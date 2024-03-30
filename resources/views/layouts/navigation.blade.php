<div class="w-full bg-white">
    <div class="max-w-7xl mx-auto px-10 shadow-sm">
        <header class="flex flex-col lg:flex-row justify-between items-center py-5">
            <div class="flex w-full lg:w-auto items-center justify-between">
                <a href="/" class="">
                    <img src="{{ asset('image/logo.png') }}" class="h-12">
                </a>
                <div class="block lg:hidden"> <button id="astronav-menu" aria-label="Toggle Menu"> <svg
                            fill="currentColor" class="w-6 h-6 text-gray-800" width="36" height="36"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Toggle Menu</title>
                            <path class="astronav-close-icon astronav-toggle hidden" fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M18.278 16.864a1 1 0 01-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 01-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 011.414-1.414l4.829 4.828 4.828-4.828a1 1 0 111.414 1.414l-4.828 4.829 4.828 4.828z">
                            </path>
                            <path class="astronav-open-icon astronav-toggle" fill-rule="evenodd"
                                d="M4 5h16a1 1 0 010 2H4a1 1 0 110-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2z">
                            </path>
                        </svg> </button>
                </div>
            </div>
            <nav class="astronav-items astronav-toggle w-full lg:w-auto mt-2 lg:flex lg:mt-0 hidden">
                <ul class="flex flex-col lg:flex-row lg:gap-3">
                    <li class="relative">
                        <menu class="astronav-dropdown group" aria-expanded="false"> <button
                                class="flex items-center gap-1 w-full lg:w-auto lg:px-3 py-2 text-gray-600 hover:text-teal-900">
                                <span>api</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                    class="w-3 h-3 mt-0.5 group-open:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                    </path>
                                </svg> </button>
                            <div class="astronav-dropdown dropdown-toggle hidden" aria-expanded="false">
                                <div class="lg:absolute w-full lg:w-48 z-10 lg:left-0 origin-top-left">
                                    <div
                                        class="px-3 lg:py-2 lg:bg-white lg:rounded-md lg:shadow lg:border flex flex-col">
                                        <a href="{{ route('response.index') }}"
                                            class="py-1 text-gray-900 hover:text-teal-600">{{ __('navigation.get response') }}</a>
                                        <a href="{{ route('request.index') }}"
                                            class="py-1 text-gray-900 hover:text-teal-600">{{ __('navigation.send request') }}</a>
                                    </div>
                                </div>
                            </div>
                        </menu>
                    </li>
                    <li> <a href="{{ route('docs') }}"
                            class="flex lg:px-3 py-2 items-center text-gray-900 hover:text-teal-600">
                            <span> {{ __('navigation.documentation') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('support') }}"
                            class="flex lg:px-3 py-2 items-center text-gray-900 hover:text-teal-600">
                            <span> {{ __('navigation.support') }}</span>
                        </a>
                    </li>
                </ul>
                <div class="lg:hidden flex items-center mt-3 gap-4 pt-3 border-t-2 border-teal-400">
                    @auth
                        <menu class="astronav-dropdown group" aria-expanded="false"> <button
                                class="flex items-center gap-1 w-full lg:w-auto lg:px-3 py-2 text-gray-600 hover:text-teal-900">
                                <span> {{ Auth::user()->name }}</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                    class="w-3 h-3 mt-0.5 group-open:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                    </path>
                                </svg> </button>
                            <div class="astronav-dropdown dropdown-toggle hidden" aria-expanded="false">
                                <div class="lg:absolute w-full lg:w-48 z-10 lg:left-0 origin-top-left">
                                    <div class="px-3 lg:py-2 lg:bg-white lg:rounded-md lg:shadow lg:border flex flex-col">
                                        <a href="{{ route('dashboard') }}"
                                            class="py-1 text-gray-900 hover:text-teal-600">{{ __('navigation.get response') }}</a>
                                        <a href="{{ route('profile.edit') }}"
                                            class="py-1 text-gray-900 hover:text-teal-600">{{ __('navigation.get response') }}</a>
                                        <a href="{{ route('logout') }}"
                                            class="py-1 text-gray-900 hover:text-teal-600">{{ __('navigation.send request') }}</a>
                                    </div>
                                </div>
                            </div>
                        </menu>
                    @else
                        <a href="{{ route('login') }}" class="w-full text-center">{{ __('navigation.log in') }}</a>
                        <a href="{{ route('register') }}"
                            class=" w-full rounded-lg text-center ring-gray-200 px-4 py-2 bg-teal-400 text-white hover:bg-teal-600  border-2 border-transparent">
                            {{ __('navigation.register') }}
                        </a>
                    @endauth
                </div>
            </nav>

            <div>
                <div class="hidden lg:flex items-center gap-4">
                    @auth
                        <menu class="astronav-dropdown group relative" aria-expanded="false"> <button
                                class="flex items-center gap-1 w-full lg:w-auto lg:px-3 py-2 text-gray-600 hover:text-teal-900">
                                <span> {{ Auth::user()->name }}</span> <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                    class="w-3 h-3 mt-0.5 group-open:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5">
                                    </path>
                                </svg> </button>
                            <div class="astronav-dropdown dropdown-toggle hidden" aria-expanded="false">
                                <div class="lg:absolute w-full lg:w-44 z-10 lg:right-0 origin-top-left text-right">
                                    <div class="px-3 lg:py-2 lg:bg-white lg:rounded-md lg:shadow lg:border flex flex-col">
                                        {{-- <a href="{{ route('dashboard') }}"
                                    class="py-1 text-gray-900 hover:text-teal-600">{{ __('navigation.dashboard') }}</a> --}}
                                        <a href="{{ route('profile.edit') }}"
                                            class="py-1 text-gray-900 hover:text-teal-600">{{ __('navigation.setting') }}</a>
                                        <hr>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="py-1 text-gray-900 hover:text-teal-600">
                                                {{ __('navigation.logout') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </menu>
                    @else
                        <a href="{{ route('login') }}">{{ __('navigation.log in') }}</a>
                        <a href="{{ route('register') }}"
                            class="rounded-lg text-center ring-gray-200 px-4 py-2 bg-teal-400 text-white hover:bg-teal-600  border-2 border-transparent">
                            {{ __('navigation.register') }}
                        </a>
                    @endauth
                </div>
            </div>

        </header>
    </div>
</div>
