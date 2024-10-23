@props(['employer', 'width' => 90])

<img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ asset($employer->logo) }}" alt="{{ $employer->name }}">

<!-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> -->
