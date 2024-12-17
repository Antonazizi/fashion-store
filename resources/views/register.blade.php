<x-layout>
    <h1 class="text-center text-2xl font-montserrat mt-4 mb-6">REGISTER</h1>
    <form class="font-montserrat w-full md:w-1/2 lg:w-2/5 px-5 md:px-0 mx-auto mb-14 flex flex-col gap-6" onsubmit="event.preventDefault();">
        @csrf
        <div>
            <x-text-input id="name" class="bg-transparent shadow-none w-full border-b p-2 rounded-none" type="text" name="name" :value="old('name')" placeholder="Name" required autofocus autocomplete="name" />
        </div>
        <div class="">
            <x-text-input id="email" class="bg-transparent shadow-none w-full border-b p-2 rounded-none" type="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username" />
        </div>
        <div class="">
            <x-text-input id="password" class="bg-transparent shadow-none w-full border-b p-2 rounded-none"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password" />
        </div>
        <div class="">
            <x-text-input id="password_confirmation" class="bg-transparent shadow-none w-full border-b p-2 rounded-none"
                            type="password"
                            placeholder="Confirm Password"
                            name="password_confirmation" required autocomplete="new-password" />
        </div>
        <div class="flex flex-col-reverse items-center justify-end mt-4 gap-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/login">
                {{ __('Already registered?') }}
            </a>
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-layout>
