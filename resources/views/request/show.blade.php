<x-app-layout>
    <div class="flex flex-col w-full mx-auto max-w-7xl p-10 min-h-screen">

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

        <div x-data="{ open: true }" x-show="open"
            class="mb-5 w-full border-2 border-sky-400 items-center rounded-lg bg-sky-200 px-6 py-5 text-base text-sky-700 inline-flex">
            <a href="https://developer.mozilla.org/ru/docs/Web/HTTP/CORS"
                class="inline hover:underline">{{ __('api.cors alert') }}</a>
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

        <h2 class="text-3xl lg:text-4xl font-bold lg:tracking-tight basis-full">
            <a href="{{ route('request.index') }}" class="hover:text-gray-500">
                {{ __('api.for request') }}
            </a>
        </h2>
        <div class="flex flex-row mt-8 flex-nowrap">
            <div class="basis-1/3 break-all whitespace-nowrap overflow-hidden">
                <ul class="my-8">
                    @foreach ($requests as $request)
                        <li class="text-md my-5">
                            <a href="{{ route('request.show', ['request' => $request->id]) }}"
                                class="hover:text-slate-500">
                                <div class="flex flex-row justify-between relative" x-data="{ show: false }"
                                    x-on:mouseover="show=true" x-on:mouseout="show=false">
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
                                    <div class="ml-1 absolute right-0" x-show="show" x-cloak>
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
                            class="flex flex-row text-sm px-1">
                            @csrf
                            @method('POST')

                            <select name="meth" class="basis-2/12 border-0 rounded-l bg-slate-100" required>
                                <option value="GET">GET</option>
                                <option value="POST">POST</option>
                                <option value="PUT">PUT</option>
                                <option value="PATCH">PATCH</option>
                                <option value="DEL">DELETE</option>
                            </select>

                            <input type="text" name="url" required
                                class="basis-8/12 m-0 block w-full min-w-0 flex-auto rounded-r bg-slate-100 border-0 px-3 py-[0.25rem] text-base font-normal text-neutral-700 focus:border-primary"
                                placeholder="url" />

                            <button type="submit" class="justify-center h-full text-lg rounded-full absolute right-2">
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
            <div x-data="sendReq" class="basis-2/3 bg-white shadow-md rounded-md mx-4 p-4">
                <div class="flex flex-row text-sm relative">
                    <form method="POST" enctype="multipart/form-data"
                        action="{{ route('request.update', ['request' => $req->id]) }}" class="flex w-full">
                        @csrf
                        @method('PUT')

                        <select name="meth" class="basis-1/12 rounded-l border-0 bg-slate-100" x-model="method"
                            required>
                            @if ($req->meth == 'GET')
                                <option value="GET" selected='selected'>GET</option>
                            @else
                                <option value="GET">GET</option>
                            @endif

                            @if ($req->meth == 'POST')
                                <option value="POST" selected='selected'>POST</option>
                            @else
                                <option value="POST">GET</option>
                            @endif

                            @if ($req->meth == 'PUT')
                                <option value="PUT" selected='selected'>PUT</option>
                            @else
                                <option value="PUT">PUT</option>
                            @endif

                            @if ($req->meth == 'PATCH')
                                <option value="PATCH" selected='selected'>PATCH</option>
                            @else
                                <option value="PATCH">PATCH</option>
                            @endif

                            @if ($req->meth == 'DELETE')
                                <option value="DEL" selected='selected'>DELETE</option>
                            @else
                                <option value="DEL">DELETE</option>
                            @endif
                        </select>

                        <input type="text" name="url" required x-model="url"
                            class="basis-9/12 bg-slate-100 m-0 block w-full min-w-0 flex-auto border-0 px-3 py-[0.25rem] text-base font-normal text-neutral-700 focus:border-primary"
                            placeholder="url" />

                        <button type="submit"
                            class="justify-center h-full px-5 bg-slate-100 hover:bg-teal-400 border-r-2 border-teal-400 text-teal-800 ">
                            {{ __('api.save') }}
                        </button>
                    </form>
                    <button x-on:click="send"
                        class="basis-1/12 rounded-r-lg text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-1 bg-teal-400 hover:bg-slate-100 text-teal-800 flex gap-1 items-center justify-center">
                        {{ __('api.send') }}
                    </button>
                </div>

                <div class="flex flex-row w-full mt-3 border-b-2">
                    <button class="flex p-3" :class="tab == 'req' ? 'text-gray-800' : 'text-gray-400'"
                        x-on:click="tab='req'">
                        {{ __('api.request') }}
                    </button>
                    <button class="flex p-3" :class="tab == 'pre' ? 'text-gray-800' : 'text-gray-400'"
                        x-on:click="tab='pre'">
                        {{ __('api.response') }}
                    </button>

                </div>

                <div class="p-2 flex-col mx-auto mt-3" x-show="tab=='req'">
                    <!-- headers -->
                    <h3 class="my-3 text-xl font-semibold leading-normal">
                        {{ __('api.headers') }}
                    </h3>
                    <div class="overflow-x-auto">
                        <div class="inline-block w-full">
                            <div class="overflow-hidden">
                                <ul>
                                    @foreach ($req->headers as $header)
                                        <li class="my-2" x-data="{ show: false }">
                                            <div class="text-sm flex flex-row w-100 border-b-2 py-2 relative"
                                                x-on:mouseover="show=true" x-on:mouseout="show=false">
                                                <div class="flex basis-1/2 px-1 overflow-hidden">
                                                    {{ $header->key }}
                                                </div>
                                                <div class="flex basis-1/2 px-1 overflow-hidden">
                                                    {{ $header->value }}
                                                </div>
                                                <form method="POST" enctype="multipart/form-data" x-show="show"
                                                    action="{{ route('header.destroy', ['header' => $header->id]) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="req_id" required
                                                        value="{{ $req->id }}" />
                                                    <button class="items-center justify-center absolute right-2"
                                                        type="submit">
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
                                        </li>
                                    @endforeach

                                    <li class="w-full bg-gray-800 rounded-md">
                                        <form method="POST" enctype="multipart/form-data"
                                            class="flex flex-row relative" action="{{ route('header.store') }}">
                                            @csrf
                                            @method('POST')

                                            <input type="text" name="header_key" required
                                                class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                                placeholder="{{ __('api.key') }}" />

                                            <input type="text" name="header_value" required
                                                class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                                placeholder="{{ __('api.value') }}" />
                                            <input type="hidden" name="req_id" required
                                                value="{{ $req->id }}" />

                                            <button type="submit"
                                                class="justify-center h-full text-lg rounded-full absolute right-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor"
                                                    class="w-6 h-6 m-auto fill-teal-300 hover:fill-teal-600">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- cookies -->
                    <h3 class="my-3 text-xl font-semibold leading-normal">
                        {{ __('api.cookies') }}
                    </h3>
                    <div class="overflow-x-auto">
                        <div class="inline-block w-full">
                            <div class="overflow-hidden">
                                <ul>
                                    @foreach ($req->cookies as $cookie)
                                        <li class="my-2" x-data="{ show: false }">
                                            <div class="text-sm flex flex-row w-100 border-b-2 py-2 relative"
                                                x-on:mouseover="show=true" x-on:mouseout="show=false">
                                                <div class="flex basis-1/2 px-1 overflow-hidden">
                                                    {{ $cookie->key }}
                                                </div>
                                                <div class="flex basis-1/2 px-1 overflow-hidden">
                                                    {{ $cookie->value }}
                                                </div>
                                                <form method="POST" enctype="multipart/form-data" x-show="show"
                                                    action="{{ route('cookie.destroy', ['cookie' => $cookie->id]) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="req_id" required
                                                        value="{{ $req->id }}" />
                                                    <button class="items-center justify-center absolute right-2"
                                                        type="submit">
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
                                        </li>
                                    @endforeach

                                    <li class="w-full bg-gray-800 rounded-md">
                                        <form method="POST" enctype="multipart/form-data"
                                            class="flex flex-row relative" action="{{ route('cookie.store') }}">
                                            @csrf
                                            @method('POST')

                                            <input type="text" name="cookie_key" required
                                                class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                                placeholder="{{ __('api.key') }}" />

                                            <input type="text" name="cookie_value" required
                                                class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                                placeholder="{{ __('api.value') }}" />
                                            <input type="hidden" name="req_id" required
                                                value="{{ $req->id }}" />

                                            <button type="submit"
                                                class="justify-center h-full text-lg rounded-full absolute right-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor"
                                                    class="w-6 h-6 m-auto fill-teal-300 hover:fill-teal-600">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- inputs -->
                    <h3 class="my-3 text-xl font-semibold leading-normal">
                        {{ __('api.data') }}
                    </h3>
                    <div class="overflow-x-auto">
                        <div class="inline-block w-full">
                            <div class="overflow-hidden">
                                <ul>
                                    @foreach ($req->inputs as $input)
                                        <li class="my-2" x-data="{ show: false }">
                                            <div class="text-sm flex flex-row w-100 border-b-2 py-2 relative"
                                                x-on:mouseover="show=true" x-on:mouseout="show=false">
                                                <div class="flex basis-1/2 px-1 overflow-hidden">
                                                    {{ $input->key }}
                                                </div>
                                                <div class="flex basis-1/2 px-1 overflow-hidden">
                                                    {{ $input->value }}
                                                </div>
                                                <form method="POST" enctype="multipart/form-data" x-show="show"
                                                    action="{{ route('input.destroy', ['input' => $input->id]) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="req_id" required
                                                        value="{{ $req->id }}" />
                                                    <button class="items-center justify-center absolute right-2"
                                                        type="submit">
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
                                        </li>
                                    @endforeach

                                    <li class="w-full bg-gray-800 rounded-md">
                                        <form method="POST" enctype="multipart/form-data"
                                            class="flex flex-row relative" action="{{ route('input.store') }}">
                                            @csrf
                                            @method('POST')

                                            <input type="text" name="input_key" required
                                                class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                                placeholder="{{ __('api.key') }}" />

                                            <input type="text" name="input_value" required
                                                class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                                placeholder="{{ __('api.value') }}" />
                                            <input type="hidden" name="req_id" required
                                                value="{{ $req->id }}" />

                                            <button type="submit"
                                                class="justify-center h-full text-lg rounded-full absolute right-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor"
                                                    class="w-6 h-6 m-auto fill-teal-300 hover:fill-teal-600">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="p-2 flex-col mx-auto mt-3" x-show="tab=='pre'">
                    <div class=" relative">
                        <div
                            class="overflow-x-scroll min-w-full max-w-screen-md min-h-[20rem] text-left font-light text-white bg-gray-800 p-4 py-6 rounded-md">
                            <button x-on:click="copy()" :class="copied ? 'fill-white': 'fill-teal-300' "
                                class="flex content-center justify-center text-lg rounded-full absolute right-6 top-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    data-slot="icon" class="w-8 h-8 m-auto hover:fill-teal-600">
                                    <path fill-rule="evenodd"
                                        d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 0 1-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0 1 13.5 1.5H15a3 3 0 0 1 2.663 1.618ZM12 4.5A1.5 1.5 0 0 1 13.5 3H15a1.5 1.5 0 0 1 1.5 1.5H12Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 0 1 9 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0 1 16.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625v-12Z" />
                                    <path
                                        d="M10.5 10.5a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963 5.23 5.23 0 0 0-3.434-1.279h-1.875a.375.375 0 0 1-.375-.375V10.5Z" />
                                </svg>
                            </button>
                            <pre x-text="copy_text" class="break-all"></pre>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('sendReq', () => ({

                tab: 'req',
                url: `{!! $req->url !!}`,
                cookies: {!! $req->cookies !!},
                headers: {!! $req->headers !!},
                inputs: {!! $req->inputs !!},
                method: `{!! $req->meth !!}`,
                copy_text: 'no body',
                copied: false,

                send() {
                    headers_to_send = {};
                    cookies_to_send = {};
                    inputs_to_send = {};
                    this.copied = false;

                    this.cookies.forEach(element => {
                        cookies_to_send[element.key] = element.value
                    });
                    this.headers.forEach(element => {
                        headers_to_send[element.key] = element.value
                    });
                    this.inputs.forEach(element => {
                        inputs_to_send[element.key] = element.value
                    });

                    axios({
                            method: this.method,
                            url: this.url,
                            headers: headers_to_send,
                            cookies: cookies_to_send,
                            data: inputs_to_send
                        })
                        .then((response) => {
                            this.tab = 'pre';
                            this.copy_text = js_beautify(JSON.stringify(response.data), {
                                indent_size: 2,
                                space_in_empty_paren: true
                            })
                        })
                        .catch((error) => {
                            this.tab = 'pre';
                            this.copy_text = js_beautify(JSON.stringify(error.response ? error
                                .response : error.code + ' (CORS error)'), {
                                indent_size: 2,
                                space_in_empty_paren: true
                            })
                        })

                },

                copy() {
                    if (window.isSecureContext) {
                        navigator.clipboard.write(this.copy_text)
                            .then(() => {
                                this.copied = true
                                console.log('Text copied to clipboard');
                            })
                            .catch(err => {
                                console.error('Error in copying text: ', err);
                            });
                    }
                }
            }))
        })
    </script>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.11/beautify.min.js"></script>
