<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASHION STORE</title>
    <link rel="shortcut icon" href="{{ asset('images/icons/favicon.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    @vite(['resources/css/main.css'])
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 overflow-x-hidden">
  
  <header id="header">
    <div class="delivery h-10 bg-primary-100 w-full flex items-center justify-center">
      <h1 class="text-xs font-montserrat tracking-wide font-semibold opacity-80 nav-text"> 🌍&nbspFree Worldwide Shipping on Orders Over $100!&nbsp✨</h1>
    </div>

    <nav class="navbar w-full px-4 md:px-4 lg:px-12 py-5 z-[999] bg-gray-100" id="scrollToTop">
      <div class="w-full mx-auto flex flex-row items-center justify-center">
        <div class="logo w-1/4 ">
          <a href="/"><img src="{{ asset('images/icons/Logo.png') }}" alt="logo" class="w-12 2xl:w-16"></a>
        </div>

        <nav class="lg:flex lg:flex-row lg:items-center lg:justify-center lg:w-2/4 w-full fixed lg:static top-0 right-0 left-0 lg:pt-0 pt-24 h-screen lg:h-auto bg-white lg:bg-transparent transform transition-transform duration-500 ease-in-out translate-x-full lg:translate-x-0 overflow-hidden z-40" id="mobile-menus">
          <ul class="nav-menus flex lg:flex-row flex-col items-center justify-center text-center text-xl md:text-2xl lg:text-xs 2xl:text-sm lg:gap-8 gap-16 text-zinc-500 font-montserrat text-nowrap">
            <x-nav-link href="/" :active="request()->is('/')">HOME</x-nav-link>
            <x-nav-link href="/shop" :active="request()->is('shop')">SHOP</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">ABOUT US</x-nav-link>
            <x-nav-link href="/sales" :active="request()->is('sales')" class="text-red-600">SALE</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">CONTACT</x-nav-link>
          </ul>
        </nav>
    
        <div class="buttons flex md:gap-6 gap-8 items-center justify-end w-3/4 lg:w-1/4 relative">
          <a href="/shopping-cart" class="cart-icon relative">
            <img src="{{ asset('images/icons/shopping_cart.png') }}" alt="Shopping Cart" class="w-6 md:w-5 cursor-pointer" id="cart-icon">
            <span id="cart-item-count" class="absolute -right-2 bg-gray-20 font-medium opacity-80 rounded-full -top-1 px-1 text-xs font-montserrat">2</span>
            <span class="cart-tooltip-text">Shopping Cart</span>
          </a>

          <a class="wishlist-icon" href="/wishlist">
            <img src="{{ asset('images/icons/heart.svg') }}" alt="heart icon" class="w-6 md:w-5 cursor-pointer">
            <span class="wishlist-tooltip-text">Wishlist</span>
          </a>
          @auth
            @php
              $user = Auth::user();
              $initial = strtoupper($user->name[0]);
            @endphp

            <span class="w-8 h-8 flex items-center justify-center rounded-full text-white bg-brown-200 cursor-pointer" id="user-profile" onclick="toggleDropdown()">
                {{ $initial }}
            </span>

            <div class="absolute hidden flex flex-col right-3 md:right-auto gap-3 items-center top-10 bg-white shadow z-40 rounded-lg py-2.5 px-8" id="dropdown-profile">
              <a href="/profile">Dashboard</a>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>


            <script>
              function toggleDropdown() {
                  document.getElementById("dropdown-profile").classList.toggle("hidden");
              }
          
              document.addEventListener("click", function(event) {
                  const profile = document.getElementById("user-profile");
                  const dropdown = document.getElementById("dropdown-profile");
          
                  if (!profile.contains(event.target) && !dropdown.contains(event.target)) {
                      dropdown.classList.add("hidden");
                  }
              });
          </script>

          @endauth
          @guest
            <a class="account-icon" href="/login">
              <img src="{{ asset('images/icons/user-icon.svg') }}" alt="user icon" class="w-5 md:w-4 cursor-pointer" id="profile">
              <span class="account-tooltip-text">Account</span>
            </a>
          @endguest
          
          <img src="{{ asset('images/icons/burger.png') }}" alt="burger menu" class="w-8 block lg:hidden" id="burger-menu">
          <img src="{{ asset('images/icons/close-icon.png') }}" class="z-50 w-6 fixed lg:hidden top-6 right-6 hidden" id="close-icon"/>
        </div>
        
      </div>

    </nav>
  </header>

      <!---- Load Animation --->
    <div class="load-section fixed top-0 left-0 right-0 bottom-0 bg-footer-100 z-50 flex flex-col items-center justify-center gap-5 pb-24" id="loader">
      <img src="{{ asset('images/icons/Logo.png') }}" alt="logo" class="w-24 2xl:w-32">
      <div class="loader"></div>
    </div>

    <!---- Go to Top Modal --->
    <div class="fixed right-3 flex flex-col gap-1 bottom-12 font-montserrat z-40 hidden" id="GoUpModal">
        <img src="{{ asset('images/icons/up-arow.png') }}" alt="upicon" class="w-8 mx-auto rounded-full p-2 bg-brown-200 cursor-pointer hover:bg-brown-300" id="GoUp">
        <span class="text-xs">Back to Top</span>
    </div>

    {{ $slot }}


  <footer class="w-full bg-footer-100 px-6 md:px-16 lg:px-36 2xl:px-0 pt-12 pb-5">

    <div class="menus grid grid-cols-2 md:grid-cols-4 gap-20 gap-y-10 md:justify-items-center 2xl:max-w-screen-lg mx-auto">
      <x-footer-menus>
        <h2 class="font-semibold mb-1 text-sm 2xl:text-base text-nowrap">CUSTOMER SERVICE</h2>
        <a href="">Sign-in</a>
        <a href="">View Account</a>
        <a href="/faq">FAQ</a>
      </x-footer-menus>
      <x-footer-menus>
        <h2 class="font-semibold mb-1 text-sm 2xl:text-base">STORE</h2>
        <a href="/about">About Us</a>
        <a href="/shop">Shop</a>
        <a href="">Newest Dresses</a>
        <a href="">Best Sellers</a>
        <a href="">Sale</a>
      </x-footer-menus>
      <x-footer-menus>
        <h2 class="font-semibold mb-1 text-sm 2xl:text-base">LEGAL</h2>
        <a href="">Terms and Conditions</a>
        <a href="">Privacy Policy</a>
      </x-footer-menus>
      <x-footer-menus>
        <h2 class="font-semibold mb-1 text-sm 2xl:text-base">SOCIAL</h2>
        <a href="" class="instagram flex flex-row items-center gap-3"><img src="{{ asset('images/icons/instagram-black.svg') }}" class="w-3" alt="">Instagram</a>
        <a href="" class="facebook flex flex-row items-center gap-3"><img src="{{ asset('images/icons/facebook-black.svg') }}" class="w-2.5">Facebook</a>
        <a href="" class="tiktok flex flex-row items-center gap-3"><img src="{{ asset('images/icons/tiktok-black.svg') }}" class="w-3">Tiktok</a>
      </x-footer-menus>
    </div>

    <hr class="w-full my-10 md:my-8">

    <div class="payment-informations w-full flex flex-col items-center gap-3">
      <span class="font-montserrat text-xs md:text-sm tracking-wider opacity-70">Easy and Fast Payment</span>
      <div class="cards flex flex-row gap-2 md:gap-4">
        <div class="w-20 2xl:w-24 h-10 2xl:h-12 border shadow-md flex items-center p-4 rounded-md bg-gray-100"><img src="{{ asset('images/payment-cards/visa.png') }}" class="object-cover"></div>
        <div class="w-20 2xl:w-24 h-10 2xl:h-12 border shadow-md flex items-center p-3 rounded-md bg-gray-100"><img src="{{ asset('images/payment-cards/paypal.png') }}" class="object-cover"></div>
        <div class="w-20 2xl:w-24 h-10 2xl:h-12 border shadow-md flex items-center px-6 2xl:px-7 rounded-md bg-gray-100"><img src="{{ asset('images/payment-cards/mastercard.png') }}" class="object-cover"></div>
        <div class="w-20 2xl:w-24 h-10 2xl:h-12 border shadow-md flex items-center px-6 2xl:px-7 rounded-md bg-gray-100"><img src="{{ asset('images/payment-cards/maestro.png') }}" class="object-cover"></div>
      </div>
    </div>

    <div class="copy-rights text-center mt-10 text-xxs opacity-70 font-montserrat">
      © 2024 FASHION STORE - ALL RIGHTS RESERVED
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
   @vite(['resources/js/main.js', 'resources/js/animations.js'])
   <script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>
