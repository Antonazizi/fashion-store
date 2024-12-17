<x-layout>
    <!-- Contact Page -->
    <div class="py-10 max-w-screen-lg mx-auto px-5 lg:px-20 2xl:px-10">
        <div class="top flex flex-col md:flex-row items-center gap-10 md:gap-0">
    
            <div class="left w-full md:w-1/2 flex flex-col font-montserrat gap-5 md:pl-12">
                <h1 class="text-2xl md:text-4xl font-caudex mb-3 get-in-touch">Get In Touch</h1>
                <div class="pl-2 address flex flex-row gap-5 items-center contact-info">
                    <div class="icon"><img src="{{ asset('images/icons/location.png') }}" alt="location" class="w-6"></div>
                    <div class="text flex flex-col">
                        <span class="text-base font-medium">Address</span>
                        <span class="text-sm opacity-70">Springfield, IL 62701, USA</span>
                    </div>
                </div>
                <div class="pl-2 phone flex flex-row gap-5 items-center contact-info">
                    <div class="icon"><img src="{{ asset('images/icons/phone.png') }}" alt="phone" class="w-6"></div>
                    <div class="text flex flex-col">
                        <span class="text-base font-medium">Phone Number</span>
                        <span class="text-sm opacity-70">+1 32 4334 5466</span>
                    </div>
                </div>
                <div class="pl-2 email flex flex-row gap-5 items-center contact-info">
                    <div class="icon"><img src="{{ asset('images/icons/mail.png') }}" alt="mail" class="w-6"></div>
                    <div class="text flex flex-col">
                        <span class="text-base font-medium">E-Mail</span>
                        <span class="text-sm opacity-70">mailto@gmail.com</span>
                    </div>
                </div>
                <hr class="pl-2 w-3/4">
                <div class="pl-2 social flex flex-col gap-2.5">
                    <span>Follow Us:</span>
                    <div class="social-medias flex flex-row item-center gap-6 contact-social">
                        <img src="{{ asset('images/icons/facebook-black.svg') }}" alt="facebook" class="w-3 cursor-pointer">
                        <img src="{{ asset('images/icons/instagram-black.svg') }}" alt="instagram" class="w-5 cursor-pointer">
                        <img src="{{ asset('images/icons/tiktok-black.svg') }}" alt="tiktok" class="w-4 cursor-pointer">
                    </div>
                </div>
            </div> 
    
            <div class="right w-full md:w-1/2 font-montserrat flex justify-center">
                <div class="box w-full md:w-5/6 border rounded-md px-12 py-8 flex flex-col">
                    <h1 class="text-xl text-center mb-8 send-message">Send a Message</h1>
                    <form action="" class="flex flex-col gap-8 contact-form">
                        <input type="text" name="name" id="name" placeholder="Name" class="bg-transparent border-b border-b-gray-black p-2 text-sm">
                        <input type="email" name="email" id="sender-email" placeholder="E-Mail address" class="bg-transparent border-b border-b-gray-black p-2 text-sm">
                        <input type="text" name="message" id="message" placeholder="Message" class="bg-transparent border-b border-b-gray-black p-2 text-sm">
                        <div class="submit w-full flex items-center justify-center">
                            <input type="submit" value="Submit" class="text-center bg-brown-200 w-3/4 text-white text-sm rounded-full py-2.5 mt-5 cursor-pointer hover:bg-brown-300">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom w-full mt-16 md:px-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d774404.4769365472!2d-74.63903204377579!3d40.69561249343124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1726964295776!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" class="w-full h-64" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</x-layout>