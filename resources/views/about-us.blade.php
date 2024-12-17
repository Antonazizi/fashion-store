<x-layout>
    <!-- About Us -->
    <main class="max-w-screen-lg mx-auto px-6 md:px-12 lg:px-4 overflow-hidden">
        <div class="banner flex md:flex-row flex-col py-8 md:gap-0 gap-8">
            <div class="description w-full lg:w-1/2 md:h-64 lg:h-80 md:gap-0 gap-4 tracking-widest leading-8 flex flex-col justify-evenly our-mision">
                <h1 class="text-3xl md:text-2xl lg:text-3xl font-caudex">OUR MISION</h1>
                <p class="font-roboto font-light text-lg md:text-base lg:text-lg">We strive to create beautiful, 
                    high-quality dresses that make every woman feel confident, unique, and stylish. 
                    By blending modern trends with timeless elegance, we aim to provide an exceptional 
                    shopping experience that celebrates individuality and supports our community of fashion 
                    enthusiasts.
                </p>
            </div>
            <div class="our-mision-image flex items-center justify-center md:justify-end">
                <img src="{{ asset('images/about-us/exterior-image.jpg') }}" alt="" class="w-full md:w-3/4 object-cover">
            </div>
        </div>
    
        <div class="team flex flex-col gap-14 py-8">
            <h1 class="text-3xl md:text-2xl lg:text-3xl font-caudex text-center">Our Dedicated Team</h1>
            <div class="flex flex-col md:flex-row items-center justify-center w-3/4 mx-auto gap-12 md:gap-16">
                <div class="first flex flex-col items-center justify-center font-montserrat gap-2" data-aos="fade-in" data-aos-duration="3000">
                    <img src="{{ asset('images/about-us/member-1.jpg') }}" alt="" class="rounded-full mb-2">
                    <p class="font-bold text-lg md:text-sm lg:text-base">EVA MONROE</p>
                    <p class="font-light text-xs" data-aos="fade-up" data-aos-duration="1000">FASHION DESIGNER</p>
                </div>
                <div class="second flex flex-col items-center justify-center font-montserrat gap-2" data-aos="fade-in" data-aos-duration="3000">
                    <img src="{{ asset('images/about-us/member-2.jpg') }}" alt="" class="rounded-full mb-2">
                    <p class="font-bold text-lg md:text-sm lg:text-base">CHLOE HARPER</p>
                    <p class="font-light text-xs" data-aos="fade-up" data-aos-duration="1000">MERCHANDISER</p>
                </div>
                <div class="third flex flex-col items-center justify-center font-montserrat gap-2" data-aos="fade-in" data-aos-duration="3000">
                    <img src="{{ asset('images/about-us/member-3.jpg') }}" alt="" class="rounded-full mb-2">
                    <p class="font-bold text-lg md:text-sm lg:text-base">MIA LANGFORD</p>
                    <p class="font-light text-xs" data-aos="fade-up" data-aos-duration="1000">STYLIST</p>
                </div>
            </div>
        </div>
    
        <div class="store-gallery flex flex-col gap-14 py-8 px-0 md:px-32 items-center">
          <h1 class="text-3xl md:text-2xl lg:text-3xl font-caudex text-center">Our Store</h1>
          <div>
            <div class="flex flex-row gap-2 md:gap-4 md:mb-4 mb-2">
              <a data-fancybox="gallery" href="{{ asset('images/about-us/gallery/gallery-1.jpg') }}" class="" data-aos="fade-in" data-aos-duration="1000">
                <img src="{{ asset('images/about-us/gallery/gallery-1.jpg') }}" alt="Gallery Photo" class="w-full">
              </a>
              
              <a data-fancybox="gallery" href="{{ asset('images/about-us/gallery/gallery-2.jpg') }}" class="" data-aos="fade-in" data-aos-duration="1500">
                <img src="{{ asset('images/about-us/gallery/gallery-2.jpg') }}" alt="Gallery Photo" class="w-full">
              </a>
            </div>
    
            <div class="flex flex-row gap-2 md:gap-4">
              <a data-fancybox="gallery" href="{{ asset('images/about-us/gallery/gallery-3.jpg') }}" class="w" data-aos="fade-in" data-aos-duration="2000">
                <img src="{{ asset('images/about-us/gallery/gallery-3.jpg') }}" alt="Gallery Photo" class="w-full">
              </a>
              <a data-fancybox="gallery" href="{{ asset('images/about-us/gallery/gallery-4.jpg') }}" class="" data-aos="fade-in" data-aos-duration="3000">
                <img src="{{ asset('images/about-us/gallery/gallery-4.jpg') }}" alt="Gallery Photo" class="w-full">
              </a>
            </div>
    
          </div>
        </div>
        
        <div class="explore-products flex items-center justify-center pb-12 pt-4 ">
          <a href="/shop" class="flex flex-row items-center rounded-full border border-gray-300 border-opacity-40 hover:bg-footer-100 ease duration-200 w-fit px-6 gap-2 py-2.5 shadow-custom-show-products uppercase text-xs tracking-wider font-montserrat">Explore Products<img src="{{ asset('images/icons/right-icon.png') }}" class="w-5"></a>
        </div>
    
    </main>
</x-layout>