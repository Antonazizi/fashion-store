<x-layout>
    <!---- Hero Section --->
    <section class="w-full flex flex-col md:flex-row relative items-end md:items-stretch justify-between h-auto bg-primary-100 gap-16 md:gap-0 max-w-screen-2xl mx-auto">
        <div class="text w-full md:w-1/2 pl-5 md:pl-12 pb-10 pt-4 md:pb-0 md:pt-0 bg-gray-100 h-auto flex flex-col justify-center gap-6">
          <h1 class="text-5xl md:text-4xl lg:text-6xl 2xl:text-7xl w-1/2 font-cormorant-infant new-collection">NEW COLLECTION</h1>
          <hr class="h-0.5 bg-black w-3/4 md:w-5/12">
          <a href="/shop" class="shop-button border border-black w-fit py-2 px-5 text-xs 2xl:text-sm hover:bg-brown-200 hover:border-brown-200 hover:text-white hover:transform hover:scale-105 ease duration-300 uppercase">SHOP NOW</a>
        </div>
        <img src="{{ asset('images/hero-images/hero-image-2.jpg') }}" class="hero-image-1 w-5/12 md:w-1/4 absolute left-5 top-[55%] md:top-1/2 md:left-1/2 transform md:-translate-x-1/4 -translate-y-1/2 z-30">
        <img src="{{ asset('images/hero-images/hero-image-1.jpg') }}" class="hero-image-2 w-7/12 md:w-4/12 mr-5 md:mr-0">
    </section>

    <!---- Hero Text --->
    <section class="bg-primary-100 text-center py-8 h-auto" data-aos="fade-in" data-aos-duration="1000">
        <h1 class="text-xl md:text-4xl font-cormorant-infant text-nowrap" >ADD SOME <span class="font-mr-dafoe text-3xl md:text-5xl text-secondary-100">&nbsp;STYLE&nbsp;</span> TO YOUR LIFE</h1>
    </section>

    <!---- Text Scroll --->
    <section class="text-scroll overflow-hidden w-4/5 md:w-3/4 mx-auto pt-8 md:pt-12 flex flex-col gap-4">
        <hr>
        <div class="flex space-x-4 animate-scroll uppercase text-base md:text-xl lg:text-2xl tracking-widest text-nowrap font-cormorant-infant">
            <span class="pl-4">
                Up to 30% Off New Collection |
            </span>
            <span class="">
            Sale on New Season Dresses |
            </span>
            <span class="">
            Up to 30% Off New Collection |
            </span>
            <span class="">
            Sale on New Season Dresses
            </span>
        </div>
        <hr>
    </section>

    <!---- New Collection --->
    <section class="py-8 md:py-12 flex flex-col items-center gap-10">
        <h1 class="font-caudex text-xl md:text-2xl 2xl:text-4xl uppercase text-center" data-aos="fade-up" data-aos-duration="1000">New Collection</h1>
        <div class="images max-w-screen-xl grid grid-cols-2 md:grid-cols-4 px-5 lg:px-20 items-center gap-6 md:gap-10" data-aos="fade-up" data-aos-duration="1000">
          @foreach($latestProducts as $product)
            <a href="/shop/{{ $product['id'] }}" class="image cursor-pointer w-full flex flex-col items-center justify-center">
              <img src="{{ asset('images/' . $product['main_photo']) }}" class="w-full mb-2">
              <div class="w-full uppercase font-montserrat text-left line-clamp-1 text-sm md:text-base">{{ $product['name'] }}</div>
              <div class="price text-left w-full flex flex-row font-montserrat">
                <span>€</span>&nbsp;&nbsp;<h4>{{ $product['price'] }}</h4>
              </div>
            </a>
          @endforeach
    
        </div>
    
        <div class="button">
          <a href="/shop" class="border border-black w-fit py-2 px-6 text-sm hover:bg-brown-200 hover:border-brown-200 hover:text-white ease duration-300 uppercase">See more</a>
        </div>
    </section>

    <!---- Banner --->
    <section class="banner" data-aos="fade-out" data-aos-duration="1500">
        <img src="{{ asset('images/banners/banner(home).png') }}" class="w-screen">
    </section>

    <!---- Most Popular --->
    <section class="py-12 flex flex-col items-center gap-10">
        <h1 class="font-caudex text-xl md:text-2xl 2xl:text-4xl uppercase text-center" data-aos="fade-in" data-aos-duration="3000">Most Popular Fashion Picks</h1>
        <div class="images max-w-screen-xl grid grid-cols-2 md:grid-cols-4 px-5 lg:px-20 items-center gap-6 md:gap-10" data-aos="fade-up" data-aos-duration="1000">
          @foreach($mostPopularProducts as $product)
            <a href="/shop/{{ $product['id'] }}" class="image cursor-pointer w-full flex flex-col items-center justify-center">
              <img src="{{ asset('images/' . $product['main_photo']) }}" class="w-full mb-2">
              <div class="w-full uppercase font-montserrat text-left line-clamp-1 text-sm md:text-base">{{ $product['name'] }}</div>
              <div class="price text-left w-full flex flex-row font-montserrat">
                <span>€</span>&nbsp;&nbsp;<h4>{{ $product['price'] }}</h4>
              </div>
            </a>
          @endforeach
        </div>
    
        <div class="button">
          <a href="/shop" class="border border-black w-fit py-2 px-6 text-sm hover:bg-brown-200 hover:border-brown-200 hover:text-white ease duration-300 uppercase">Shop Now</a>
        </div>
    </section>

    <!---- Subscription --->
    <section class="subscription flex flex-col items-center justify-center py-12 my-4 bg-primary-100 gap-4 2xl:gap-8 overflow-hidden">
        <h1 class="font-caudex text-xl md:text-2xl 2xl:text-4xl uppercase text-center" data-aos="fade-in" data-aos-duration="3000">JOIN THE CLUB</h1>
        <p class="font-montserrat text-sm text-center md:text-lg 2xl:text-xl m-0 px-4 md:px-0" data-aos="fade-down" data-aos-duration="1000">Be the first to know about new products, discounts and sales!</p>
        <form action="" method="get" class="flex flex-row mt-1 px-4 md:px-0" data-aos="fade-down" data-aos-duration="1000">
          <input type="email" name="" id="" placeholder="Email" class="text-base 2xl:text-xl w-full md:w-96 p-3 h-10 2xl:h-12 bg-transparent border border-gray-400 font-montserrat">
          <button type="submit" class="w-20 2xl:w-26 h-10 2xl:h-12 p-0 flex items-center justify-center bg-brown-100"><img src="{{ asset('images/icons/right-arrow.png') }}" class="w-8"></button>
        </form>
    </section>

    <!---- FAQ --->
    <section class="faq py-12 flex flex-col items-center justify-center">
        <h1 class="font-caudex text-xl md:text-2xl 2xl:text-3xl uppercase text-center" data-aos="fade-in" data-aos-duration="3000">Frequently asked questions</h1>
        <div class="container w-full flex flex-col items-center justify-center py-12 gap-4 px-6">
            <div class="w-full md:w-3/4 lg:w-2/4 font-montserrat font-medium pb-4 border-b border-b-black border-opacity-20">
                <div class="question uppercase flex justify-between items-center cursor-pointer">
                    <span class="text-sm" data-aos="fade-right" data-aos-duration="1000">What is your return policy?</span>
                    <span class="icon">+</span>
                </div>
                <div class="answer text-sm pt-3 px-2 font-normal hidden">We accept returns within 30 days of purchase. The items must be unused, in their original condition, and with the tags attached. To initiate a return, please contact our customer service team to receive a return authorization number and instructions.</div>
            </div>
            <div class="w-full md:w-3/4 lg:w-2/4 font-montserrat font-medium pb-4 border-b border-b-black border-opacity-20">
              <div class="question uppercase flex justify-between items-center cursor-pointer">
                    <span class="text-sm" data-aos="fade-right" data-aos-duration="1200">How can I track my order?</span>
                    <span class="icon">+</span>
                </div>
                <div class="answer text-sm pt-3 px-2 font-normal hidden">Once your order has shipped, you will receive an email with a tracking number and a link to track your order. You can also log in to your account on our website and check your order status under the "My Orders" section.</div>
            </div>
            <div class="w-full md:w-3/4 lg:w-2/4 font-montserrat font-medium pb-4 border-b border-b-black border-opacity-20">
                <div class="question uppercase flex justify-between items-center cursor-pointer">
                    <span class="text-sm" data-aos="fade-right" data-aos-duration="1400">Do you offer international shipping?</span>
                    <span class="icon">+</span>
                </div>
                <div class="answer text-sm pt-3 px-2 font-normal hidden">Yes, we offer international shipping to most countries. Shipping costs and delivery times vary depending on the destination. Please check our shipping policy for more details or contact customer service for specific inquiries.</div>
            </div>
            <div class="w-full md:w-3/4 lg:w-2/4 font-montserrat font-medium pb-4 border-b border-b-black border-opacity-20">
              <div class="question uppercase flex justify-between items-center cursor-pointer">
                  <span class="text-sm" data-aos="fade-right" data-aos-duration="1600">How long does shipping take?</span>
                  <span class="icon">+</span>
              </div>
              <div class="answer text-sm pt-3 px-2 font-normal hidden">Shipping times vary depending on your location and the shipping method selected at checkout. Standard shipping typically takes 5-7 business days, while express shipping options are available for faster delivery. International orders may take 7-14 business days.</div>
            </div>
        </div>
    </section>

</x-layout>