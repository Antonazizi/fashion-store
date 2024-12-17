<x-layout>
    <h1 class="text-center text-2xl font-montserrat mt-4 mb-6">LOGIN</h1>

    <form class="font-montserrat w-full md:w-1/2 lg:w-2/5 px-5 md:px-0 mx-auto mb-14" onsubmit="event.preventDefault();">
        @csrf
        <div>
            <x-text-input id="email" class="bg-transparent shadow-none w-full border-b p-2 rounded-none" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>
        <div class="my-6">
            <x-text-input id="password" class="bg-transparent shadow-none w-full border-b p-2 rounded-none"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />
        </div>
        <div class="flex justify-between items-center mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
                {{ __('Forgot your password?') }}
            </a>
        </div>
        <div class="flex flex-col gap-6 items-center justify-end mt-6">
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
            <span class="text-xs"><span class="opacity-70">Don't have and account yet?</span> &nbsp;<a href="/register" class="uppercase opacity-100 font-medium text-blue-800">Sign Up</a></span>
        </div>
    </form>
</x-layout>
