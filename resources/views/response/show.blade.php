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
            <a href="{{ route('response.index') }}" class="hover:text-gray-500">
                {{ __('api.for response') }}
            </a>
        </h2>

        <div class="flex flex-row mt-3 lg:mt-8 flex-wrap md:flex-nowrap overflow-auto">
            <div class="flex basis-full md:basis-1/3">
                <ul class="my-4 lg:my-8">
                    @foreach ($responses as $response)
                        <li class="text-md my-5">
                            <a href="{{ route('response.show', ['response' => $response->id]) }}"
                                class="hover:text-slate-500">
                                <div class="flex flex-row justify-between relative" x-data="{ show: false }"
                                    x-on:mouseover="show=true" x-on:mouseout="show=false">
                                    <div class="basis-full text-xs md:text-sm lg:text-lg">
                                        @if (url()->current() == route('response.show', ['response' => $response->id]))
                                            <p class="text-teal-500 break-all whitespace-nowrap overflow-hidden">
                                                {{ $response->id }}
                                            </p>
                                        @else
                                            <p class="break-all whitespace-nowrap overflow-hidden">
                                                {{ $response->id }}
                                            </p>
                                        @endif
                                    </div>
                                    <div class="ml-1 absolute right-0" x-show="show" x-cloak>
                                        <form action="{{ route('response.destroy', ['response' => $response->id]) }}"
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
                    <li class="text-md my-5">
                        <div class="text-center ">
                            <form action="{{ route('response.store') }}" method="post"
                                class="justify-center mt-5 flex">
                                @csrf
                                <button type="submit"
                                    class="text-xs md:text-sm lg:text-lg block text-slate-500 hover:text-slate-800">
                                    нажмите, чтобы добавить
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex basis-full md:basis-2/3 flex-col bg-white shadow-md rounded-md mx-1 p-1 md:mx-4 md:p-4">
                <div class="p-2 flex flex-row justify-between rounded-lg bg-neutral-800">
                    <div class="basis-full rounded-lg bg-neutral-800 relative" x-data="{
                        copy_text: `{!! route('get_api', ['id' => $res->id]) !!}`,
                        copied: false,
                        copy() {
                            if (navigator.clipboard) {
                                navigator.clipboard.writeText(this.copy_text)
                                    .then(() => {
                                        this.copied = true
                                        console.log('Text copied to clipboard');
                                    })
                                    .catch(err => {
                                        console.error('Error in copying text: ', err);
                                    });
                            }
                        }
                    }">
                        <h5 class="text-sm lg:text-xl m-1 lg:m-2 ml-0 lg:ml-3 text-slate-200" x-text="copy_text"></h5>
                        <button x-on:click="copy()" :class="copied ? 'fill-white' : 'fill-teal-300'"
                            class="flex content-center justify-center text-lg rounded-full absolute right-[-5px] top-[-4px]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                data-slot="icon" class="w-6 h-6 m-auto fill-white hover:fill-teal-600">
                                <path fill-rule="evenodd"
                                    d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 0 1-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0 1 13.5 1.5H15a3 3 0 0 1 2.663 1.618ZM12 4.5A1.5 1.5 0 0 1 13.5 3H15a1.5 1.5 0 0 1 1.5 1.5H12Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 0 1 9 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0 1 16.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625v-12Z" />
                                <path
                                    d="M10.5 10.5a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963 5.23 5.23 0 0 0-3.434-1.279h-1.875a.375.375 0 0 1-.375-.375V10.5Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-2 flex-col w-full mx-auto">

                    <!-- headers -->
                    <h3 class="my-1 lg:my-3 text-xl font-semibold leading-normal">
                        {{ __('api.headers') }}
                    </h3>

                    <div class="inline-block w-full">
                        <ul>
                            @foreach ($res->headers as $header)
                                <li class="my-2" x-data="{ show: false }">
                                    <div class="text-xs lg:text-base flex flex-row border-b-2 py-2 relative"
                                        x-on:mouseover="show=true" x-on:mouseout="show=false">
                                        <div class="flex basis-1/2 px-1 break-all overflow-hidden min-w-0">
                                            {{ $header->key }}
                                        </div>
                                        <div class="flex basis-1/2 pl-1 pr-10 break-all overflow-hidden min-w-0">
                                            {{ $header->value }}
                                        </div>
                                        <form method="POST" enctype="multipart/form-data" x-show="show"
                                            action="{{ route('header.destroy', ['header' => $header->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="res_id" required
                                                value="{{ $res->id }}" />
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
                                <form method="POST" enctype="multipart/form-data" class="flex flex-row relative"
                                    action="{{ route('header.store') }}">
                                    @csrf
                                    @method('POST')

                                    <input type="text" name="header_key" required
                                        class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                        placeholder="{{ __('api.key') }}" />

                                    <input type="text" name="header_value" required
                                        class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                        placeholder="{{ __('api.value') }}" />
                                    <input type="hidden" name="res_id" required value="{{ $res->id }}" />

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

                    <!-- cookies -->
                    <h3 class="my-2 lg:my-3 text-xl font-semibold leading-normal">
                        {{ __('api.cookies') }}
                    </h3>

                    <div class="inline-block w-full">
                        <ul>
                            @foreach ($res->cookies as $cookie)
                                <li class="my-2" x-data="{ show: false }">
                                    <div class="text-xs lg:text-base flex flex-row border-b-2 py-2 relative"
                                        x-on:mouseover="show=true" x-on:mouseout="show=false">
                                        <div class="flex basis-1/2 px-1 break-all overflow-hidden min-w-0">
                                            {{ $cookie->key }}
                                        </div>
                                        <div class="flex basis-1/2 pl-1 pr-10 break-all overflow-hidden min-w-0">
                                            {{ $cookie->value }}
                                        </div>
                                        <form method="POST" enctype="multipart/form-data" x-show="show"
                                            action="{{ route('cookie.destroy', ['cookie' => $cookie->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="res_id" required
                                                value="{{ $res->id }}" />
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
                                <form method="POST" enctype="multipart/form-data" class="flex flex-row relative"
                                    action="{{ route('cookie.store') }}">
                                    @csrf
                                    @method('POST')

                                    <input type="text" name="cookie_key" required
                                        class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                        placeholder="{{ __('api.key') }}" />

                                    <input type="text" name="cookie_value" required
                                        class="m-1 bg-gray-800 flex border-0 basis-1/2 min-w-0 px-3 py-[0.25rem] text-base font-normal text-white focus:border-primary"
                                        placeholder="{{ __('api.value') }}" />
                                    <input type="hidden" name="res_id" required value="{{ $res->id }}" />

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


                    <!-- body -->
                    <div x-data="{ tab: 'res' }">
                        <h3 class="my-3 text-xl font-semibold leading-normal">
                            {{ __('api.data') }}
                        </h3>

                        <div class="flex flex-row w-full my-3 border-b-2">
                            <button class="flex p-3" :class="tab == 'res' ? 'text-gray-800' : 'text-gray-400'"
                                x-on:click="tab='res'">
                                {{ __('api.response') }}
                            </button>
                            <button class="flex p-3" :class="tab == 'change' ? 'text-gray-800' : 'text-gray-400'"
                                x-on:click="tab='change'">
                                {{ __('api.change response') }}
                            </button>
                        </div>

                        <div class="overflow-x-auto" x-show="tab == 'res'">
                            <div class="inline-block w-full">
                                <div class="overflow-hidden">
                                    <div
                                        class="overflow-x-scroll min-w-full max-w-screen-md min-h-[20rem] text-left font-light text-white bg-gray-800 p-6 rounded-md">
                                        @if ($res->body == null)
                                            <p class="w-full">no body</p>
                                        @else
                                            <pre id="json-data" class="w-full">{{ $res->body }}</pre>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-x-auto" x-show="tab == 'change'">
                            <div class="inline-block w-full">
                                <div class="overflow-hidden">
                                    <div
                                        class="overflow-x-scroll min-w-full max-w-screen-md min-h-[20rem] text-left font-light rounded-md">
                                        <form method="POST"
                                            action="{{ route('response.update', ['response' => $res->id]) }}">
                                            @csrf
                                            @method('PUT')
                                            <textarea type="text" name="body" id="json_input" required rows="10"
                                                class="block w-full flex-auto rounded-md border border-solid p-6 text-base font-normal focus:border-primary"
                                                placeholder="value"></textarea>
                                            <button
                                                class="w-full text-center rounded-md my-2 px-5 py-1 bg-teal-500 hover:bg-teal-400 text-white font-bold flex gap-1 items-center justify-center"
                                                type="submit">
                                                {{ __('api.save') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @vite(['resources/js/response.js'])
</x-app-layout>
