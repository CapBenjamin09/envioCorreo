<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2.5 px-5 rounded-lg text-sm text-center font-medium text-white bg-teal-600 hover:bg-teal-500 active:bg-teal-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
