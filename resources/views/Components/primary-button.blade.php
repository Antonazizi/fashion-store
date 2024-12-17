<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full border border-black p-2 mt-2 uppercase hover:bg-gray-20 hover:bg-opacity-20']) }}>
    {{ $slot }}
</button>
