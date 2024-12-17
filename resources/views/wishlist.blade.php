<x-layout>
    <!-- Wishlist -->
    <section class="flex flex-col gap-3 pt-4 pb-12 max-w-screen-lg mx-auto px-5">
        <h1 class="bg-white py-3 px-4 rounded-md font-montserrat font-medium wishlist">Wishlist</h1>
        <div class="products grid grid-cols-2 md:grid-cols-4 gap-3 wishlist-products">
            <div class="w-full flex flex-col items-center justify-center bg-white p-2 md:p-3 rounded-md">
                <img src="{{ asset('images/'. $products[0]['main_photo'] ) }}" class="w-full mb-2">
                <div class="description w-full uppercase font-montserrat text-left text-sm line-clamp-1">{{ $products[0]['name'] }}</div>
                <div class="price text-left w-full flex flex-row font-montserrat text-base 2xl:text-xl mb-3">
                @if($products[0]['sale'] !== null)
                    <div class="text-left w-fit flex flex-row font-montserrat line-through text-red-600">
                        <span class="text-black">€</span>&nbsp;<h4 class="text-black">{{ $products[0]['price'] }}</h4>
                    </div>
                    <div class="text-left ml-1 w-fit flex flex-row font-montserrat">
                    @php
                        $discountedPrice = $products[0]['price'] - ($products[0]['price'] * ($products[0]['sale'] / 100));
                    @endphp
                        <span>€</span>&nbsp;<h4>{{ number_format($discountedPrice, 2) }}</h4>
                    </div>
                    @else
                        <span>€</span>&nbsp;&nbsp;<h4>{{ $$products[0]['price'] }}</h4>
                    @endif                    
                    </div>
                <div class="buttons flex flex-row gap-2 md:gap-3 flex-nowrap justify-between w-full relative">
                    <form action="/add_cart/{{ $products[0]['id'] }}" method="POST" class="add-to-cart-form w-full border border-black items-center justify-center text-xs py-2 font-montserrat font-medium cursor-pointer ease duration-200 hover:bg-gray-20 hover:bg-opacity-30 hidden md:flex" data-product-id="{{ $products[0]['id'] }}" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
                        @csrf
                        <button type="submit">ADD TO CART</button>
                    </form>
                    
                    <div class="cart-modal-message-container hidden absolute top-8 text-xs bg-green-200 text-black py-2 px-4 rounded-md mt-2 w-full" data-product-id="{{ $products[0]['id'] }}">
                        <span class="cart-modal-message"></span>
                    </div>

                    <form action="" method="POST" class="add-to-cart-form trash w-1/2 ease duration-200 hover:bg-gray-20 flex items-center justify-center border cursor-pointer md:hidden py-2" data-product-id="{{ $products[0]['id'] }}" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
                        @csrf
                        <span><img src="{{ asset('images/icons/add-to-cart.png') }}" alt="" class="w-5"></span>
                    </form>

                    <form action="" method="POST" class="flex md:bg-gray-100 md:bg-opacity-50 items-center justify-center border md:border-gray-100 md:border-opacity-50 w-1/2 md:w-1/4 cursor-pointer">
                        @csrf
                        @method('DELETE')
                        <span><img src="{{ asset('images/icons/trash-can-red.svg') }}" alt="" class="w-5 md:w-4"></span>
                    </form>                        
                </div>
            </div>
            <div class="w-full flex flex-col items-center justify-center bg-white p-2 md:p-3 rounded-md">
                <img src="{{ asset('images/'. $products[1]['main_photo'] ) }}" class="w-full mb-2">
                <div class="description w-full uppercase font-montserrat text-left text-sm line-clamp-1">{{ $products[1]['name'] }}</div>
                <div class="price text-left w-full flex flex-row font-montserrat text-base 2xl:text-xl mb-3">
                @if($products[1]['sale'] !== null)
                    <div class="text-left w-fit flex flex-row font-montserrat line-through text-red-600">
                      <span class="text-black">€</span>&nbsp;<h4 class="text-black">{{ $products[1]['price'] }}</h4>
                    </div>
                    <div class="text-left ml-1 w-fit flex flex-row font-montserrat">
                    @php
                        $discountedPrice = $products[1]['price'] - ($products[1]['price'] * ($products[1]['sale'] / 100));
                    @endphp
                        <span>€</span>&nbsp;<h4>{{ number_format($discountedPrice, 2) }}</h4>
                    </div>
                    @else
                        <span>€</span>&nbsp;&nbsp;<h4>{{ $products[1]['price'] }}</h4>
                    @endif                    
                    </div>
                <div class="buttons flex flex-row gap-2 md:gap-3 flex-nowrap justify-between w-full relative">
                    <form action="/add_cart/{{ $products[1]['id'] }}" method="POST" class="add-to-cart-form w-full border border-black items-center justify-center text-xs py-2 font-montserrat font-medium cursor-pointer ease duration-200 hover:bg-gray-20 hover:bg-opacity-30 hidden md:flex" data-product-id="{{ $products[1]['id'] }}" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
                        @csrf
                        <button type="submit">ADD TO CART</button>
                    </form>
                    
                    <div class="cart-modal-message-container hidden absolute top-8 text-xs bg-green-200 text-black py-2 px-4 rounded-md mt-2 w-full" data-product-id="{{ $products[1]['id'] }}">
                        <span class="cart-modal-message"></span>
                    </div>

                    <form action="" method="POST" class="add-to-cart-form trash w-1/2 ease duration-200 hover:bg-gray-20 flex items-center justify-center border cursor-pointer md:hidden py-2" data-product-id="{{ $products[1]['id'] }}" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
                        @csrf
                        <span><img src="{{ asset('images/icons/add-to-cart.png') }}" alt="" class="w-5"></span>
                    </form>

                    <form action="" method="POST" class="flex md:bg-gray-100 md:bg-opacity-50 items-center justify-center border md:border-gray-100 md:border-opacity-50 w-1/2 md:w-1/4 cursor-pointer">
                        @csrf
                        @method('DELETE')
                        <span><img src="{{ asset('images/icons/trash-can-red.svg') }}" alt="" class="w-5 md:w-4"></span>
                    </form>                        
                </div>
            </div>
            <div class="w-full flex flex-col items-center justify-center bg-white p-2 md:p-3 rounded-md">
                <img src="{{ asset('images/'. $products[2]['main_photo'] ) }}" class="w-full mb-2">
                <div class="description w-full uppercase font-montserrat text-left text-sm line-clamp-1">{{ $products[2]['name'] }}</div>
                <div class="price text-left w-full flex flex-row font-montserrat text-base 2xl:text-xl mb-3">
                @if($products[2]['sale'] !== null)
                    <div class="text-left w-fit flex flex-row font-montserrat line-through text-red-600">
                      <span class="text-black">€</span>&nbsp;<h4 class="text-black">{{ $products[2]['price'] }}</h4>
                    </div>
                    <div class="text-left ml-1 w-fit flex flex-row font-montserrat">
                    @php
                        $discountedPrice = $products[2]['price'] - ($products[2]['price'] * ($products[2]['sale'] / 100));
                    @endphp
                        <span>€</span>&nbsp;<h4>{{ number_format($discountedPrice, 2) }}</h4>
                    </div>
                    @else
                        <span>€</span>&nbsp;&nbsp;<h4>{{ $products[2]['price'] }}</h4>
                    @endif                    
                    </div>
                <div class="buttons flex flex-row gap-2 md:gap-3 flex-nowrap justify-between w-full relative">
                    <form action="/add_cart/{{ $products[2]['id'] }}" method="POST" class="add-to-cart-form w-full border border-black items-center justify-center text-xs py-2 font-montserrat font-medium cursor-pointer ease duration-200 hover:bg-gray-20 hover:bg-opacity-30 hidden md:flex" data-product-id="{{ $products[2]['id'] }}" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
                        @csrf
                        <button type="submit">ADD TO CART</button>
                    </form>
                    
                    <div class="cart-modal-message-container hidden absolute top-8 text-xs bg-green-200 text-black py-2 px-4 rounded-md mt-2 w-full" data-product-id="{{ $products[2]['id'] }}">
                        <span class="cart-modal-message"></span>
                    </div>

                    <form action="" method="POST" class="add-to-cart-form trash w-1/2 ease duration-200 hover:bg-gray-20 flex items-center justify-center border cursor-pointer md:hidden py-2" data-product-id="{{ $products[2]['id'] }}" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
                        @csrf
                        <span><img src="{{ asset('images/icons/add-to-cart.png') }}" alt="" class="w-5"></span>
                    </form>

                    <form action="" method="POST" class="flex md:bg-gray-100 md:bg-opacity-50 items-center justify-center border md:border-gray-100 md:border-opacity-50 w-1/2 md:w-1/4 cursor-pointer">
                        @csrf
                        @method('DELETE')
                        <span><img src="{{ asset('images/icons/trash-can-red.svg') }}" alt="" class="w-5 md:w-4"></span>
                    </form>                        
                </div>
            </div>
        </div>
    </section>
</x-layout>