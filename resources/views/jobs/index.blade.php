<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Work From Home DevOps</h1>

            <x-forms.form action="/search" class="mt-6 pt-6">
                <!--
            <x-forms.input :label="false" name="q" placeholder="Web Developer..."
                  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"/>
                -->
                <div class="relative">
                    <input :label="false" name="q" placeholder="DevOps Engineer..."
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" />
                    <button
                        class="absolute top-1 right-1 flex items-center rounded bg-slate-800 py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-4 h-4 mr-2">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        Search
                    </button>
                </div>

            </x-forms.form>
        </section>

        <section class="pt-1">
            @if (false)
                <x-section-heading>Featured Jobs</x-section-heading>

                <div class="grid lg:grid-cols-3 gap-8 mt-6">
                    @foreach ($featuredJobs as $job)
                        <x-job-card :$job />
                    @endforeach
                </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            @endif

            <div>
                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($jobs as $job)
                        <x-job-card-wide :$job />
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
</x-layout>
