<x-app-layout>

    <div class="max-w-7xl mx-auto px-5">
        <div class="flex flex-col md:flex-row  place-items-center pt-16 pb-8 md:pt-12 md:pb-24">
            <div class="py-6 md:order-1 hidden md:block basis-full md:basis-1/2">
                <img src="{{ asset('image/banner.png') }}">
            </div>
            <div class="basis-full md:basis-1/2">
                <h1
                    class="text-gray-800 text-3xl lg:text-4xl xl:text-5xl font-bold lg:tracking-tight xl:tracking-tighter">
                    {{ __('home.h1') }}
                </h1>
                <p class="text-lg mt-4 text-gray-600 max-w-xl">
                    {{ config('app.name', 'wapi') }} {{ __('home.p') }}
                </p>
                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('response.index') }}" rel="noopener"
                        class="rounded text-center px-5 py-2.5 bg-teal-400 text-white hover:bg-teal-600 flex gap-1 items-center justify-center">
                        {{ __('home.get response') }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                        </svg>
                    </a>
                    <a href="{{ route('request.index') }}" rel="noopener"
                        class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white hover:bg-teal-100 text-teal-900 flex gap-1 items-center justify-center">
                        {{ __('home.send request') }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-16 md:mt-0">
            <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                {{ __('home.h2') }}
            </h2>
        </div>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-16">
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-briefcase">
                        <path fill="currentColor"
                            d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v3h20V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm5 10h-4v-2H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-8v2z">
                        </path>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">{{ __('home.free') }}</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">{{ __('home.free description') }}</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-window-alt">
                        <path fill="currentColor"
                            d="M20 3H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-3 3h2v2h-2V6zm-3 0h2v2h-2V6zM4 19v-9h16.001l.001 9H4z">
                        </path>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">{{ __('home.interface') }}</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">{{ __('home.interface description') }}</p>
                </div>
            </div>
            <div class="flex gap-4 items-start">
                <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0"> <svg viewBox="0 0 24 24"
                        class="text-white" astro-icon="bx:bxs-user">
                        <path fill="currentColor"
                            d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                        </path>
                    </svg> </div>
                <div>
                    <h3 class="font-semibold text-lg">{{ __('home.support') }}</h3>
                    <p class="text-slate-500 mt-2 leading-relaxed">{{ __('home.support description') }}</p>
                </div>
            </div>
        </div>

        <div
            class="bg-gray-800 p-8 md:px-20 md:py-20 mt-20 mx-auto max-w-5xl rounded-lg flex flex-col items-center text-center">
            <h2 class="text-white text-4xl md:text-6xl tracking-tight">
                {{ __('home.start testing web applications now') }}
            </h2>

            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <a href="{{ route('response.index') }}" rel="noopener"
                    class="rounded text-center px-5 py-2.5 bg-teal-400 text-white hover:bg-teal-600 flex gap-1 items-center justify-center">
                    {{ __('home.get response') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                    </svg>
                </a>
                <a href="{{ route('request.index') }}" rel="noopener"
                    class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white hover:bg-teal-100 text-teal-900 flex gap-1 items-center justify-center">
                    {{ __('home.send request') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
