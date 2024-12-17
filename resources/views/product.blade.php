<x-layout>
    <section class="single-product max-w-screen-lg mx-auto flex flex-col md:flex-row pt-6 pb-12 md:pb-8 md:gap-16 px-5 md:px-0">
      <div class="left w-full md:w-1/2 flex flex-row flex-nowrap md:max-h-96 gap-2 pb-8">
        <div class="flex w-1/3 md:w-auto flex-col overflow-y-auto md:items-end gap-1.5 pr-2 max-h-96 md:max-h-auto" id="product-images">
          <img src="{{ asset('images/' . $product['main_photo']) }}" alt="Thumbnail Image" class="w-full md:w-1/4 product-thumbnail cursor-pointer thumbnail">
          @foreach($product['thumbnails'] as $thumbnail)
              <img src="{{ asset('images/'. $thumbnail) }}" alt="Thumbnail Image" class="w-full md:w-1/4 product-thumbnail cursor-pointer thumbnail">
          @endforeach
        </div>
        <div class="md:h-96">
          <img src="{{ asset('images/' . $product['main_photo']) }}" alt="Main Image" id="full-image" class="w-full">
        </div>
      </div>
      <div class="right w-full md:w-1/2 font-montserrat product-details">
          <span class="text-xxs opacity-50">DRESS</span>
          <h1 class="text-lg 2xl:text-xl font-medium uppercase">{{ $product['name']}}</h1>
          <span class="star-rating flex flex-row gap-1.5 items-center mt-1 mb-4">
              <img src="{{ asset('images/icons/star-filled.svg') }}" class="w-4">
              <img src="{{ asset('images/icons/star-filled.svg') }}" class="w-4">
              <img src="{{ asset('images/icons/star-filled.svg') }}" class="w-4">
              <img src="{{ asset('images/icons/star-filled.svg') }}" class="w-4">
              <img src="{{ asset('images/icons/star.svg') }}" class="w-4">
              <p class="ml-2 text-xs opacity-50"><span>{{ $product['star_reviews'] }}</span> reviews</p>
          </span>
          @if($product['sale'] !== null)
            <span class="text-lg font-medium line-through text-red-600"><span class="text-black opacity-50">€ {{ $product['price'] }}</span></span>
            @php
              $discountedPrice = $product['price'] - ($product['price'] * ($product['sale'] / 100));
            @endphp
            <span class="text-2xl font-medium pl-1">€ {{ number_format($discountedPrice, 2) }}</span>
          @else
            <span class="text-2xl font-medium">€ {{ $product['price'] }}</span>
          @endif
          <p class="opacity-70 text-xs my-5 md:pr-16">{{ $product['description'] }}</p>
          <p class="text-xs opacity-80 my-3 mt-6 md:mt-3"><span class="font-semibold">Availability:</span>  
            @if( $product['quantity'] > 0 )
              <span class="font-normal">{{ $product['quantity']}}</span> in stock
            @else 
              <span class="text-xs text-red-700">Out of stock</span>
            @endif
          </p>
          <div class="flex flex-row items-center gap-4 mt-2">
            <form action="/add_cart/{{ $product['id'] }}" method="POST" id="add-to-cart-form" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
              @csrf
              @if($product['quantity'] > 0)
                <button type="submit" class="text-sm border border-black py-2 px-8 hover:bg-gray-20 hover:bg-opacity-50 transition duration-200">
                  Add to Cart
                </button>
              @else
                <button type="button" disabled class="text-sm border border-gray-400 text-gray-400 py-2 px-8 cursor-not-allowed">
                  Add to Cart
                </button>
              @endif
            </form>
            
            <button class="py-1.5 px-4 border border-black wishlist-button" data-product-id="{{ $product['id'] }}">
              <img src="{{ asset('images/icons/heart.svg') }}" 
                   alt="Wishlist Icon" 
                   class="w-5 wishlist-icon">
            </button>
          
          </div>
          <div id="cart-modal-message-container" style="display: none;" class="fixed text-xs bg-green-200 text-black py-2 px-4 rounded-md mt-3">
            <span id="cart-modal-message"></span>
          </div>
          @guest
            <div class="mt-3">
              <span class="text-red-600 text-xs"><a href="/login" class="underline">Login</a> to add items to the cart or wishlist</span>
            </div>
          @endguest
      </div>
  
    </section>
  
    <section class="suggestions flex flex-col font-montserrat max-w-screen-xl 2xl:max-w-screen-lg px-5 md:px-2 mx-auto pb-2">
        <span class="text-lg font-light other">OTHER DRESSES</span>
        <div class="py-4 flex flex-col items-center gap-10">
          <div class="images grid grid-cols-2 md:grid-cols-6 items-center gap-2 gap-y-5">
            @php
              $suggestedProducts = \App\Models\Product::all()->take(6);
            @endphp
            @foreach($suggestedProducts as $product)
              <a href="/shop/{{ $product['id']}}" class="image cursor-pointer w-full flex flex-col items-center justify-center">
                <img src="{{ asset('images/' . $product['main_photo']) }}" class="w-full mb-2">
                <div class="w-full uppercase font-montserrat text-left text-xs line-clamp-1">{{ $product['name'] }}</div>
                <div class="price text-left w-full flex flex-row font-montserrat text-sm">
                  <span>€</span>&nbsp;&nbsp;<h4>{{ $product['price'] }}</h4>
                </div>
              </a>
            @endforeach
          </div>
        </div>
    </section>
  
</x-layout>


<script>

document.addEventListener('DOMContentLoaded', () => {
      const wishlistButtons = document.querySelectorAll('.wishlist-button');

      wishlistButtons.forEach(button => {
          button.addEventListener('click', function () {
              const productId = this.dataset.productId;
              const icon = this.querySelector('.wishlist-icon');
              const isInWishlist = icon.src.includes('heart-filled.svg');

              if (isInWishlist) {
                  fetch(`/wishlist/removeProd/${productId}`, {
                      method: 'DELETE',
                      headers: {
                          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                      }
                  })
                  .then(response => response.json())
                  .then(data => {
                      if (data.message === 'Removed from wishlist') {
                          icon.src = "{{ asset('images/icons/heart.svg') }}";
                      } else {
                          console.error(data.message);
                      }
                  })
                  .catch(error => console.error('Error:', error));
              } else {
                  fetch(`/wishlist/add/${productId}`, {
                      method: 'POST',
                      headers: {
                          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                      }
                  })
                  .then(response => response.json())
                  .then(data => {
                      if (data.message === 'Added to wishlist') {
                          icon.src = "{{ asset('images/icons/heart-filled.svg') }}";
                      } else {
                          console.error(data.message);
                      }
                  })
                  .catch(error => console.error('Error:', error));
              }
          });
      });
  });
</script>