<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('images/icons/favicon.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    @vite('resources/css/app.css')
    @vite(['resources/css/dashboard.css'])
</head>
<body>
    <main class="h-screen overflow-hidden w-full flex flex-row font-montserrat overflow-y-hidden">
        <div class="fixed top-4 left-5 lg:hidden opacity-70 z-30" id="admin-burger-menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
        </div>
        <aside class="fixed lg:relative bg-white shadow flex flex-col items-start md:items-center h-screen py-4 gap-8 md:gap-6 rounded-r-md w-3/4 md:w-fit lg:w-auto transform -translate-x-full lg:translate-x-0 transition-transform duration-500 ease-in-out z-40" id="admin-menu">
            <div class="logo pl-6 pr-12">
                <img src="{{ asset('images/icons/Logo.png') }}" alt="png" class="w-12">
            </div>
            <nav class="flex flex-col h-full justify-between lg:text-sm">
                <div class="upper pl-4 pr-12">
                    <ul class="space-y-4 md:space-y-1 admin-menus">
                        <li class="{{ Request::is('admin') ? 'border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white' : '' }}">
                            <a href="/admin">
                                <i class="fas fa-home fa-fw mr-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="admin-submenu {{ Request::is('admin/products', 'admin/add-product', 'admin/stock') ? 'border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white' : '' }}">
                            <span id="products" class="cursor-pointer"><i class="fas fa-box-open fa-fw mr-2"></i>Products <i class="fas fa-angle-down fa-fw ml-2"></i></span>
                            <ul class="mt-1 text-gray-600">
                                <li><a href="/admin/products">All Products</a></li>
                                <li><a href="/admin/add-product">Add Products</a></li>
                                <li><a href="/admin/stock">Low Stock</a></li>
                            </ul>
                        </li>
                        <li class="admin-submenu {{ Request::is('admin/new-orders', 'admin/orders') ? 'border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white' : '' }}">
                            <span class="cursor-pointer"><i class="fas fa-box fa-fw mr-2"></i>Orders <i class="fas fa-angle-down fa-fw ml-2"></i></span>
                            <ul class="mt-1 text-gray-600">
                                <li><a href="/admin/new-orders">New Orders</a></li>
                                <li><a href="/admin/orders">All Orders</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('admin/customers') ? 'border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white rounded-r-full' : '' }}"><a href="/admin/customers"><i class="fas fa-users fa-fw mr-2"></i>Customers</a></li>
                        <li class="{{ Request::is('admin/gallery/homepage','admin/gallery/shop', 'admin/gallery/sale', 'admin/gallery/about-us', 'admin/gallery/payment' ) ? 'border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white rounded-r-full' : '' }}"><a href="/admin/gallery/homepage"><i class="fas fa-image fa-fw mr-2"></i>Gallery</a></li>
                        <li class="{{ Request::is('admin/promotions') ? 'border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white rounded-r-full' : '' }}"><a href="/admin/promotions"><i class="fas fa-percent fa-fw mr-2"></i>Promotions</a></li>
                    </ul>
                </div>
                <div class="down">
                    <hr class="mb-5">
                    <ul class="space-y-3 pl-6 pr-12">
                        <li class="{{ Request::is('admin/notifications') ? 'p-2 border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white' : '' }}"><a href="/admin/notifications"><i class="fas fa-bell fa-fw mr-2"></i>Notifications <span class="text-xs text-gray-600">(2)</span></a></li>
                        <li class="{{ Request::is('admin/settings') ? 'p-2 border-l-2 border-blue-600 bg-gradient-to-r from-blue-50 to-white' : '' }}"><a href="/admin/settings"><i class="fas fa-cog fa-fw mr-2"></i>Settings</a></li>
                        <li><a href="/"><i class="fas fa-sign-out-alt fa-fw mr-2"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="absolute top-6 right-6 cursor-pointer md:hidden opacity-80" id="close-admin-menus">
                <img src="{{ asset('images/icons/close-icon.png') }}" alt="" class="w-5">
            </div>
        </aside>
        <section class="bg-gray-100 flex-1 overflow-y-scroll py-5 px-5 md:px-6 2xl:px-10 relative">
            {{ $slot }}
            <p class="text-xs text-center text-gray-600 mt-4">Fashion Store © 2024. All rights reserved.</p>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const adminMenu = document.getElementById('admin-menu');
            const burgerMenu = document.getElementById('admin-burger-menu');
            const closeMenu = document.getElementById('close-admin-menus');
            const adminSubmenus = document.querySelectorAll('.admin-submenu');
    
            burgerMenu.addEventListener('click', () => {
                adminMenu.classList.add('open');
            });
    
            closeMenu.addEventListener('click', () => {
                adminMenu.classList.remove('open');
            });
    
            document.addEventListener('click', (e) => {
                if (!adminMenu.contains(e.target) && !burgerMenu.contains(e.target)) {
                    adminMenu.classList.remove('open');
                }
            });


            adminSubmenus.forEach(submenu => {
                const span = submenu.querySelector('span');
                const ul = submenu.querySelector('ul');
                const arrow = span.querySelector('.fas.fa-angle-down');

                ul.style.display = 'none';

                span.addEventListener('click', () => {
                    adminSubmenus.forEach(otherSubmenu => {
                        const otherUl = otherSubmenu.querySelector('ul');
                        const otherArrow = otherSubmenu.querySelector('.fas.fa-angle-down');

                        if (otherSubmenu !== submenu) {
                            otherUl.style.display = 'none';
                            otherArrow.style.transform = 'rotate(0deg)';
                        }
                    });

                    if (ul.style.display === 'none') {
                        ul.style.display = 'block';
                        arrow.style.transform = 'rotate(180deg)';
                    } else {
                        ul.style.display = 'none';
                        arrow.style.transform = 'rotate(0deg)';
                    }
                });
            });
        });

    </script>
    
</body>
</html>