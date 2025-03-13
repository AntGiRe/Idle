@php
    $classes =
        'max-w-sm p-1 animate-border bg-gradient-to-r from-red-500 via-purple-500 to-blue-500 bg-[length:400%_400%] rounded-lg shadow-lg';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="bg-white rounded-lg p-5">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">¿Aún no tienes una cuenta?</h5>
        <a class="inline-flex items-center text-blue-600 gap-2 hover:text-blue-900 transition font-bold" href="{{ $href }}">
            Creala ahora
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</div>
