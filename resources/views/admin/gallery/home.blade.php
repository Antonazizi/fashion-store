<x-admin-layout>
    <x-admin-gallery-layout>
        <h1 class="text-gray-600 font-semibold text-lg">Homepage Section</h1>
        <form class="flex flex-col text-sm gap-5 mt-5" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-4">
                <label for="text" class="text-sm font-semibold text-gray-600">Hero Text:</label>
                <input type="text" name="text" id="text" class="border p-2 rounded" value="NEW COLLECTION">
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <label for="small-image" class="text-sm font-semibold text-gray-600">Small Hero Image:</label>
                <img src="{{ asset('images/hero-images/hero-image-2.jpg') }}" alt="" class="w-28">
                <input type="file" name="image" id="small-image">
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <label for="main-image" class="text-sm font-semibold text-gray-600">Main Hero Image:</label>
                <img src="{{ asset('images/hero-images/hero-image-1.jpg') }}" alt="" class="w-28">
                <input type="file" name="main-image" id="main-image">
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <label for="banner-image" class="text-sm font-semibold text-gray-600">Banner Image:</label>
                <img src="{{ asset('images/banners/banner(home).png') }}" alt="" class="w-3/4 md:w-1/2">
                <input type="file" name="banner-image" id="banner-image">
            </div>
            <hr>

            <a class="cursor-pointer py-2 px-5 w-fit rounded bg-blue-500 hover:bg-blue-600 border-0 text-white font-medium">Update Homepage</a>
        </form>
    </x-admin-gallery-layout>
</x-admin-layout>