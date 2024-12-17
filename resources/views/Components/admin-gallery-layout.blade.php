<h1 class="font-medium text-gray-600 2xl:text-lg text-right lg:text-left mt-2 lg:mt-0">Gallery</h1>
<div class="mt-4 flex flex-col md:flex-row gap-4">
    <div class="left w-full md:w-fit">
        <div class="bg-white h-full flex flex-col gap-2 md:gap-1 p-6 rounded shadow-md">
            <h1 class="font-semibold text-gray-700 text-sm md:text-xs">Sections</h1>
            <div class="flex flex-row md:flex-col gap-2.5 text-sm font-medium text-gray-700 overflow-x-auto">
                <a href="/admin/gallery/homepage" class="{{ Request::is('admin/gallery/homepage') ? 'py-4 md:py-2 pr-8 pl-3 rounded bg-blue-500 hover:bg-blue-600 border-0 text-white text-nowrap' : 'border py-4 md:py-2 pr-8 pl-3 rounded text-nowrap' }}"><i class="fas fa-folder mr-3"></i>Homepage</a>
                <a href="/admin/gallery/shop" class="{{ Request::is('admin/gallery/shop') ? 'py-4 md:py-2 pr-8 pl-3 rounded bg-blue-500 hover:bg-blue-600 border-0 text-white text-nowrap' : 'border py-4 md:py-2 pr-8 pl-3 rounded text-nowrap' }}"><i class="fas fa-folder mr-3"></i>Shop Section</a>
                <a href="/admin/gallery/sale" class="{{ Request::is('admin/gallery/sale') ? 'py-4 md:py-2 pr-8 pl-3 rounded bg-blue-500 hover:bg-blue-600 border-0 text-white text-nowrap' : 'border py-4 md:py-2 pr-8 pl-3 rounded text-nowrap' }}"><i class="fas fa-folder mr-3"></i>Sale Section</a>
                <a href="/admin/gallery/about-us" class="{{ Request::is('admin/gallery/about-us') ? 'py-4 md:py-2 pr-8 pl-3 rounded bg-blue-500 hover:bg-blue-600 border-0 text-white text-nowrap' : 'border py-4 md:py-2 pr-8 pl-3 rounded text-nowrap' }}"><i class="fas fa-folder mr-3"></i>About Us</a>
                <a href="/admin/gallery/payment" class="{{ Request::is('admin/gallery/payment') ? 'py-4 md:py-2 pr-8 pl-3 rounded bg-blue-500 hover:bg-blue-600 border-0 text-white text-nowrap' : 'border py-4 md:py-2 pr-8 pl-3 rounded text-nowrap' }}"><i class="fas fa-folder mr-3"></i>Payment</a>
            </div>
        </div>
    </div>
    <div class="right flex-1 bg-white rounded shadow-md p-6">
        {{ $slot }}
    </div>
</div>