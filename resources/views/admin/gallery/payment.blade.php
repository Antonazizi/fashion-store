<x-admin-layout>
    <x-admin-gallery-layout>
        <h1 class="text-gray-600 font-semibold text-lg">Payment Methods</h1>
        <form class="flex flex-col text-sm gap-5 mt-5" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="description" class="text-sm font-semibold text-gray-600">Add New Payment Method:</label>
            <div class="grid grid-cols-4 md:grid-cols-6 2xl:grid-cols-10 gap-2 md:gap-5">
                <div class="w-full border shadow-md flex items-center rounded-md px-3 relative"><div class="bg-gray-100 rounded-full font-medium text-xs absolute -top-2 -right-2 text-red-600 px-1.5 py-0.5 cursor-pointer">X</div><img src="{{ asset('images/payment-cards/visa.png') }}" class="object-cover"></div>
                <div class="w-full border shadow-md flex items-center rounded-md px-3 relative"><div class="bg-gray-100 rounded-full font-medium text-xs absolute -top-2 -right-2 text-red-600 px-1.5 py-0.5 cursor-pointer">X</div><img src="{{ asset('images/payment-cards/paypal.png') }}" class="object-cover"></div>
                <div class="w-full border shadow-md flex items-center rounded-md px-6 relative"><div class="bg-gray-100 rounded-full font-medium text-xs absolute -top-2 -right-2 text-red-600 px-1.5 py-0.5 cursor-pointer">X</div><img src="{{ asset('images/payment-cards/mastercard.png') }}" class="object-cover"></div>
                <div class="w-full border shadow-md flex items-center rounded-md px-6 relative"><div class="bg-gray-100 rounded-full font-medium text-xs absolute -top-2 -right-2 text-red-600 px-1.5 py-0.5 cursor-pointer">X</div><img src="{{ asset('images/payment-cards/maestro.png') }}" class="object-cover"></div>
            </div>
            <input type="file" name="banner-gallery" id="banner-gallery" multiple>
            <hr>
            <a class="cursor-pointer py-2 px-5 w-fit rounded bg-blue-500 hover:bg-blue-600 border-0 text-white font-medium">Update Payment Methods</a>
        </form>
    </x-admin-gallery-layout>
</x-admin-layout>