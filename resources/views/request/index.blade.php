<x-app-layout>
    <div class="flex flex-col w-full mx-auto max-w-7xl p-2 lg:p-10 min-h-screen">

        @if (session('alert'))
            <div x-data="{ open: true }" x-show="open"
                class="mb-5 w-full items-center rounded-lg bg-yellow-200 px-6 py-5 text-base text-yellow-800 inline-flex">
                {{ session('alert') }}
                <button type="button" x-on:click="open = ! open"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss aria-label="Close">
                    <span
                        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        @endif

        @if (session('success'))
            <div x-data="{ open: true }" x-show="open"
                class="mb-5 w-full items-center rounded-lg bg-green-200 px-6 py-5 text-base text-green-800 inline-flex">
                {{ session('success') }}
                <button type="button" x-on:click="open = ! open"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss aria-label="Close">
                    <span
                        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        @endif

        @if (session('warning'))
            <div x-data="{ open: true }" x-show="open"
                class="mb-5 w-full items-center rounded-lg bg-yellow-200 px-6 py-5 text-base text-yellow-800 inline-flex">
                {{ session('warning') }}
                <button type="button" x-on:click="open = ! open"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss aria-label="Close">
                    <span
                        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        @endif

        <h2 class="text-3xl lg:text-4xl font-bold lg:tracking-tight basis-full">
            <a href="{{ route('request.index') }}" class="hover:text-gray-500">
                {{ __('api.for request') }}
            </a>
        </h2>
        <div class="flex flex-row mt-3 lg:mt-8 flex-wrap md:flex-nowrap overflow-auto">
            <div class="flex basis-full md:basis-1/3">
                <ul class="my-8">
                    @foreach ($requests as $request)
                        <li class="text-md my-5">
                            <a href="{{ route('request.show', ['request' => $request->id]) }}"
                                class="hover:text-slate-500">
                                <div class="flex flex-row justify-between relative" x-data="{ show: false }"
                                    @mouseover="show=true" @mouseout="show=false">
                                    <div class="basis-11/12 break-all whitespace-nowrap overflow-hidden">
                                        @if (url()->current() == route('request.show', ['request' => $request->id]))
                                            <h5
                                                class="text-sm text-teal-500 break-all whitespace-nowrap overflow-hidden">
                                                {{ $request->meth }} {{ $request->url }}
                                            </h5>
                                        @else
                                            <h5 class="text-sm break-all whitespace-nowrap overflow-hidden">
                                                {{ $request->meth }} {{ $request->url }}
                                            </h5>
                                        @endif
                                    </div>
                                    <div class="ml-1 absolute right-0" x-show="show">
                                        <form action="{{ route('request.destroy', ['request' => $request->id]) }}"
                                            method="post" class="">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="justify-center text-lg rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" data-slot="icon"
                                                    class="w-6 h-6 m-auto fill-slate-800 hover:fill-red-500">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm3 10.5a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5h6Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <hr>
                    @endforeach
                    <li class="text-md my-5 relative">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('request.store') }}"
                            class="flex flex-row text-sm">
                            @csrf
                            @method('POST')

                            <select name="meth" class="basis-2/12 rounded-l ml-1 border-l border-y border-solid border-neutral-300" required>
                                <option value="GET">GET</option>
                                <option value="POST">POST</option>
                                <option value="PUT">PUT</option>
                                <option value="PATCH">PATCH</option>
                                <option value="DEL">DELETE</option>
                            </select>

                            <input type="text" name="url" required
                                class="basis-8/12 m-0 mr-1 block w-full min-w-0 flex-auto rounded-r border-r border-y border-neutral-300 px-3 py-[0.25rem] text-base font-normal text-neutral-700 focus:border-primary"
                                placeholder="url" />


                            <button type="submit" class="h-full text-lg rounded-full absolute right-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 m-auto fill-gray-800 hover:fill-teal-600">
                                    <path fill-rule="evenodd"
                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="flex basis-full md:basis-2/3 flex-col bg-white shadow-md rounded-md mx-1 p-1 md:mx-4 md:p-4">
                <h2 class="my-3 text-2xl font-semibold leading-normal text-center">
                    Выберите API
                </h2>
                <hr>
            </div>
        </div>
    </div>
</x-app-layout>
