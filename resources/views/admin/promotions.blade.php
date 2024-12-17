<x-admin-layout>
    <div class="w-full bg-white rounded shadow-md p-6 mt-12 md:mt-0">
        <h1 class="text-gray-600 font-semibold text-lg">Promotions Section</h1>
        <form class="flex flex-col text-sm gap-5 mt-5" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="flex flex-col gap-4">
                <label for="header" class="text-sm font-semibold text-gray-600">Header Ribbon Text:</label>
                <input type="text" name="header" id="header" class="border p-2 rounded" value="🌍 Free Worldwide Shipping on Orders Over $100! ✨">
            </div>
            <hr>

            <div class="flex flex-col gap-4">
                <label for="text" class="text-sm font-semibold text-gray-600">Homepage Scrolling Text:</label>
                <input type="text" name="text" id="text" class="border p-2 rounded" value="Up to 30% Off New Collection">
                <input type="text" name="text2" id="text2" class="border p-2 rounded" value="Sale on New Season Dresses">
                <input type="text" name="text3" id="text3" class="border p-2 rounded" value="">
                <input type="text" name="text4" id="text4" class="border p-2 rounded" value="">
            </div>
            <hr>

            <a class="cursor-pointer py-2 px-5 w-fit rounded bg-blue-500 hover:bg-blue-600 border-0 text-white font-medium">Update Promotions</a>
        </form>
    </div>
</x-admin-layout>