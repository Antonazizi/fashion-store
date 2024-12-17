<x-layout>

    <main class="w-full mx-auto flex flex-col gap-8 py-4 px-4 max-w-screen-lg">
  
      <section class="relative">
        <img src="{{ asset('images/banners/sale-banner.png') }}" alt="Shop banner" class="w-full h-48 md:h-full object-cover">
        <div class="absolute bottom-0 top-20 left-0 w-full bg-gradient-to-t from-white to-transparent flex items-end justify-center pb-10">
          <p class="text-xl text-center font-montserrat font-semibold px-2">Clearance Deals: Up to <span class="text-red-700">50% Off !</span></p>
        </div>
      </section>
    
      <section class="shop-products w-full">
        <div class="shop-products products relative w-full grid grid-cols-2 md:grid-cols-4 gap-4 lg:gap-8 gap-y-8">
          @foreach ($products as $product)
            <a href="/shop/{{ $product['id'] }}" class="product flex flex-col items-center justify-center overflow-hidden cursor-pointer relative" data-aos="fade" data-aos-duration="1000">
              @if($product['sale'] !== null)
                <div class="ticket absolute top-1 right-1 w-fit px-3 py-1.5 font-bold bg-red-600 text-white text-xs lg:text-sm font-roboto z-10">
                  <span>{{ $product['sale'] }}% OFF</span>
                </div>
              @endif
              <img src="{{ asset('images/' . $product['main_photo']) }}" class="image w-full mb-2 shadow-md transition-transform">
              <div class="w-full uppercase font-montserrat text-left text-sm line-clamp-1">{{ $product['name'] }}</div>
              <div class="price text-left w-full flex flex-row font-montserrat text-sm 2xl:text-base">

                @if($product['sale'] !== null)
                  <div class="text-left w-fit flex flex-row font-montserrat line-through text-red-600">
                    <span class="text-black">€</span>&nbsp;<h4 class="text-black">{{ $product['price'] }}</h4>
                  </div>
                  <div class="text-left ml-1 w-fit flex flex-row font-montserrat">
                    @php
                        $discountedPrice = $product['price'] - ($product['price'] * ($product['sale'] / 100));
                    @endphp
                    <span>€</span>&nbsp;<h4>{{ number_format($discountedPrice, 2) }}</h4>
                  </div>
                @else
                  <span>€</span>&nbsp;&nbsp;<h4>{{ $product['price'] }}</h4>
                @endif

              </div>
            </a>
          @endforeach
        </div>      
      </section>

      <div class="pagination">
        {{ $products->links() }}
      </div>
  
    </main>
  </x-layout>