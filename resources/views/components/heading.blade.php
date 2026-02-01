@props([
    'size' => 'base',
    'level' => null,
])

@php
$classes = [
    match ($size) {
        'base' => 'text-sm [&:has(+[data-subheading])]:mb-2 [[data-subheading]+&]:mt-2',
        'lg' => 'text-base [&:has(+[data-subheading])]:mb-2 [[data-subheading]+&]:mt-2',
        'xl' => 'text-2xl [&:has(+[data-subheading])]:mb-2 [[data-subheading]+&]:mt-2',
    },
    'font-medium',
    '[:where(&)]:text-gray-800 [:where(&)]:dark:text-white'
]
@endphp

@php
    switch ((int) $level): case(1):
@endphp
    <h1 {{ $attributes->class($classes) }} data-heading>{{ $slot }}</h1>
@php
    break; case(2):
@endphp
    <h2 {{ $attributes->class($classes) }} data-heading>{{ $slot }}</h2>
@php
    break; case(3):
@endphp
    <h3 {{ $attributes->class($classes) }} data-heading>{{ $slot }}</h3>
@php
    break; case(4):
@endphp
    <h4 {{ $attributes->class($classes) }} data-heading>{{ $slot }}</h4>
@php
    break; default:
@endphp
    <div {{ $attributes->class($classes) }} data-heading>{{ $slot }}</div>
@php
    endswitch
@endphp
