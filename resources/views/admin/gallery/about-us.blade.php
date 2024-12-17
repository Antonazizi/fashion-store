<x-admin-layout>
    <x-admin-gallery-layout>
        <h1 class="text-gray-600 font-semibold text-lg">About Us Page Section</h1>
        <form class="flex flex-col text-sm gap-5 mt-5" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-4">
                <label for="text" class="text-sm font-semibold text-gray-600">Hero Title:</label>
                <input type="text" name="text" id="text" class="border p-2 rounded" value="OUR MISION">
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <label for="description" class="text-sm font-semibold text-gray-600">Hero Description:</label>
                <textarea name="text" id="description" cols="30" rows="5" class="border p-2 rounded">We strive to create beautiful, high-quality dresses that make every woman feel confident, unique, and stylish. By blending modern trends with timeless elegance, we aim to provide an exceptional shopping experience that celebrates individuality and supports our community of fashion enthusiasts.</textarea>
            </div>
            <hr>
            <div class="flex flex-col gap-4">
                <label for="banner-image" class="text-sm font-semibold text-gray-600">Hero Image:</label>
                <img src="{{ asset('images/about-us/exterior-image.jpg') }}" alt="" class="w-3/4 md:w-1/2 2xl:w-1/3">
                <input type="file" name="banner-image" id="banner-image">
            </div>
            <hr>

            <div class="flex flex-col gap-4">
                <label for="banner-gallery" class="text-sm font-semibold text-gray-600">Store Gallery (preferable 4) :</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <img src="{{ asset('images/about-us/gallery/gallery-1.jpg') }}" alt="" class="w-full">
                    <img src="{{ asset('images/about-us/gallery/gallery-2.jpg') }}" alt="" class="w-full">
                    <img src="{{ asset('images/about-us/gallery/gallery-3.jpg') }}" alt="" class="w-full">
                    <img src="{{ asset('images/about-us/gallery/gallery-4.jpg') }}" alt="" class="w-full">
                </div>
                <input type="file" name="banner-gallery" id="banner-gallery" multiple>
            </div>
            <hr>

            <a class="cursor-pointer py-2 px-5 w-fit rounded bg-blue-500 hover:bg-blue-600 border-0 text-white font-medium">Update About Us Page</a>
        </form>
    </x-admin-gallery-layout>
</x-admin-layout>