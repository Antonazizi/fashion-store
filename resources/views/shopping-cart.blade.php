<x-layout>
    <div id="stock-alert-modal" class="modal hidden fixed px-5 md:px-0 top-0 left-0 w-full h-full flex justify-center items-center bg-gray-800 bg-opacity-50 font-montserrat z-40">
        <div class="modal-content bg-white p-6 rounded-md text-center">
            <p id="stock-alert-message" class="text-sm font-semibold"></p>
            <button id="close-modal" class="mt-4 px-6 py-2 bg-red-500 text-white rounded-md cursor-pointer">Close</button>
        </div>
    </div>
    
        <section class="container max-w-screen-xl mx-auto pt-4 pb-8 flex flex-col lg:flex-row font-montserrat gap-4 md:px-5">
            <div class="left scroll-change flex flex-col gap-8 w-full lg:w-3/4 rounded-lg p-4 md:p-8 bg-white max-h-500 overflow-y-auto">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-semibold">Cart &nbsp;<span class="opacity-50 text-xs">3 items</span></h1>
                    <div class="flex flex-row gap-2 items-center justify-center">
                            <img src="{{ asset('images/icons/trash-can-icon.png') }}" alt="trash icon" class="w-2.5 h-3">
                            <form action="/remove_all_prod" method="POST" id="remove-from-cart-form" onsubmit="removeAllProductsFromLocalStorage()">
                                @csrf
                                <span class="text-xs font-medium text-[#ff0000] cursor-pointer">Remove all</spatype=>
                            </form>
                    </div>
                </div>
    
                {{-- PRODUCT LISTING --}}
                    <div class="flex flex-row items-center justify-center gap-4">
                        <div class="photo w-16">
                            <img src="{{ asset('images/' . $products[0]['main_photo']) }}" alt="{{ $products[0]['name'] }}" class="w-full">
                        </div>
                        <div class="description w-full flex flex-row justify-between">
                            <div class="left flex flex-col justify-center gap-y-1">
                                <h1 class="text-sm md:text-xl font-medium line-clamp-1">{{ $products[0]['name'] }}</h1>
                                @if($products[0]['sale'] !== null)
                                    <div class="flex flex-row items-center md:gap-2">
                                        <div class="w-fit flex flex-row font-montserrat line-through text-red-600 text-sm md:text-base opacity-50 font-medium">
                                            <span class="text-black">€</span>&nbsp;<h4 class="text-black">{{ $products[0]['price'] }}</h4>
                                        </div>
                                        <div class="text-left ml-1 w-fit flex flex-row font-montserrat">
                                            @php
                                                $discountedPrice = $products[0]['price'] - ($products[0]['price'] * ($products[0]['sale'] / 100));
                                            @endphp
                                            <span class="text-xs opacity-50 font-medium"><span class="text-sm md:text-base">$ {{ number_format($discountedPrice, 2) }}&nbsp;</span>per item</span>
                                        </div>
                                    </div>
                                @else
                                    <span class="text-xs opacity-50 font-medium"><span class="text-sm md:text-base">$ {{ $products[0]['price'] }} &nbsp;</span>per item</span>
                                @endif
                                <a class="text-xs text-red-600 underline mt-1 cursor-pointer">Remove</a>
                            </div>
                            <div class="right flex flex-col gap-4 md:gap-2 items-center justify-center">
                                <div class="quantity-control w-fit flex flex-row items-center gap-3 md:gap-2.5 bg-gray-100 bg-opacity-50 rounded-full" data-max-quantity="{{ $products[0]['quantity'] }}">
                                    <button class="decrease rounded-full text-lg bg-white px-2.5 shadow-sm text-brown-100">-</button>
                                    <span class="quantity-value text-sm font-semibold opacity-70">1</span>
                                    <button class="increase rounded-full text-lg bg-white px-2.5 shadow-sm text-brown-100">+</button>
                                </div>
                                <div class="total text-center opacity-70">
                                    @if($products[0]['sale'] !== null)
                                        @php
                                            $discountedPrice = $products[0]['price'] - ($products[0]['price'] * ($products[0]['sale'] / 100));
                                        @endphp
                                        <span class="text-sm text-nowrap">Total: <span class="text-base font-medium product-total" id="product-total" data-product-id="{{ $products[0]['id'] }}" data-price="{{ $discountedPrice }}">$ {{ number_format($discountedPrice, 2) }}</span></span>
                                    @else 
                                        <span class="text-sm text-nowrap">Total: <span class="text-base font-medium product-total" id="product-total" data-product-id="{{ $products[0]['id'] }}" data-price="{{ $products[0]['price'] }}">$ {{ number_format($products[0]['price'], 2) }}</span></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row items-center justify-center gap-4">
                        <div class="photo w-16">
                            <img src="{{ asset('images/' . $products[1]['main_photo']) }}" alt="{{ $products[1]['name'] }}" class="w-full">
                        </div>
                        <div class="description w-full flex flex-row justify-between">
                            <div class="left flex flex-col justify-center gap-y-1">
                                <h1 class="text-sm md:text-xl font-medium line-clamp-1">{{ $products[1]['name'] }}</h1>
                                @if($products[1]['sale'] !== null)
                                    <div class="flex flex-row items-center md:gap-2">
                                        <div class="w-fit flex flex-row font-montserrat line-through text-red-600 text-sm md:text-base opacity-50 font-medium">
                                            <span class="text-black">€</span>&nbsp;<h4 class="text-black">{{ $products[1]['price'] }}</h4>
                                        </div>
                                        <div class="text-left ml-1 w-fit flex flex-row font-montserrat">
                                            @php
                                                $discountedPrice = $products[1]['price'] - ($products[1]['price'] * ($products[1]['sale'] / 100));
                                            @endphp
                                            <span class="text-xs opacity-50 font-medium"><span class="text-sm md:text-base">$ {{ number_format($discountedPrice, 2) }}&nbsp;</span>per item</span>
                                        </div>
                                    </div>
                                @else
                                    <span class="text-xs opacity-50 font-medium"><span class="text-sm md:text-base">$ {{ $products[1]['price'] }} &nbsp;</span>per item</span>
                                @endif
                                <a class="text-xs text-red-600 underline mt-1 cursor-pointer">Remove</a>
                            </div>
                            <div class="right flex flex-col gap-4 md:gap-2 items-center justify-center">
                                <div class="quantity-control w-fit flex flex-row items-center gap-3 md:gap-2.5 bg-gray-100 bg-opacity-50 rounded-full" data-max-quantity="{{ $products[1]['quantity'] }}">
                                    <button class="decrease rounded-full text-lg bg-white px-2.5 shadow-sm text-brown-100">-</button>
                                    <span class="quantity-value text-sm font-semibold opacity-70">1</span>
                                    <button class="increase rounded-full text-lg bg-white px-2.5 shadow-sm text-brown-100">+</button>
                                </div>
                                <div class="total text-center opacity-70">
                                    @if($products[1]['sale'] !== null)
                                        @php
                                            $discountedPrice = $products[1]['price'] - ($products[1]['price'] * ($products[1]['sale'] / 100));
                                        @endphp
                                        <span class="text-sm text-nowrap">Total: <span class="text-base font-medium product-total" id="product-total" data-product-id="{{ $products[1]['id'] }}" data-price="{{ $discountedPrice }}">$ {{ number_format($discountedPrice, 2) }}</span></span>
                                    @else 
                                        <span class="text-sm text-nowrap">Total: <span class="text-base font-medium product-total" id="product-total" data-product-id="{{ $products[1]['id'] }}" data-price="{{ $products[1]['price'] }}">$ {{ number_format($products[1]['price'], 2) }}</span></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- ------------------- --}}
                
    
            </div>
            <div class="right flex flex-col gap-2 w-full lg:w-1/4 h-fit rounded-lg p-4 md:p-6 bg-white">
                <h1 class="text-xl font-semibold">Total</h1>
                <hr>
                <span class="text-nowrap flex justify-between pt-2">Subtotal: <span class="font-semibold" id="subtotal-amount">$ 129.99</span></span>
                <button class="px-6 py-2 my-2 rounded-md bg-brown-200 hover:bg-brown-300 transition duration-200 text-white">Checkout</button>
                <hr>
                <span>We accept:</span>
                <div class="flex flex-row gap-5 items-center">
                    <img src="{{ asset('images/payment-cards/visa.png') }}" alt="" class="w-10">
                    <img src="{{ asset('images/payment-cards/paypal.png') }}" alt="" class="w-10">
                    <img src="{{ asset('images/payment-cards/mastercard.png') }}" alt="" class="w-8 h-7">
                    <img src="{{ asset('images/payment-cards/maestro.png') }}" alt="" class="w-8 h-7">
                </div>
            </div>
        </section>
        <script>
            function removeProductFromLocalStorage(productId) {
                localStorage.removeItem(`quantity-${productId}`);
            }
            function removeAllProductsFromLocalStorage() {
                localStorage.clear();
            }
        </script>
    </x-layout>