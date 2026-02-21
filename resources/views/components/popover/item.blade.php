@props([
    'href' => '',
    'before' => '',
    'after' => '',
])

@php
$classes = [
    'group flex items-center px-2 py-2 lg:py-1.5 w-full',
    'rounded-md',
    'text-left text-sm font-medium',
    'text-gray-800 hover:bg-gray-50 dark:text-white dark:hover:bg-gray-600',
];
@endphp

@php
    if ($href):
@endphp
    <a href="{{ $href }}" {{ $attributes->class($classes) }}>
        @php
    if (is_string($before) && $before !== ''):
@endphp
            <x-dynamic-component :component="$before" aria-hidden="true" width="20" height="20" class="shrink-0 mr-2 text-gray-400 group-hover:text-current" />
        @php
    else:
@endphp
            {{ $before }}
        @php
    endif
@endphp
        @php
    if ($slot->isNotEmpty()):
@endphp
            <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap">{{ $slot }}</div>
        @php
    endif
@endphp
        @php
    if (is_string($after) && $after !== ''):
@endphp
            <x-dynamic-component :component="$after" aria-hidden="true" width="20" height="20" class="shrink-0 ml-2 text-gray-400 group-hover:text-current" />
        @php
    else:
@endphp
            {{ $after }}
        @php
    endif
@endphp
    </a>
@php
    else:
@endphp
    <button {{ $attributes->class($classes) }}>
        @php
    if (is_string($before) && $before !== ''):
@endphp
            <x-dynamic-component :component="$before" aria-hidden="true" width="20" height="20" class="shrink-0 mr-2 text-gray-400 group-hover:text-current" />
        @php
    else:
@endphp
            {{ $before }}
        @php
    endif
@endphp
        @php
    if ($slot->isNotEmpty()):
@endphp
            <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap">{{ $slot }}</div>
        @php
    endif
@endphp
        @php
    if (is_string($after) && $after !== ''):
@endphp
            <x-dynamic-component :component="$after" aria-hidden="true" width="20" height="20" class="shrink-0 ml-2 text-gray-400 group-hover:text-current" />
        @php
    else:
@endphp
            {{ $after }}
        @php
    endif
@endphp
    </button>
@php
    endif
@endphp
