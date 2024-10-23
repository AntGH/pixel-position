@props(['job'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
            src="{{ $job->employer->logo }}"
            alt="">
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">
                <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
            </p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $job->employer->name }}</p>
        </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900">        
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
        </p>
        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
</li>
