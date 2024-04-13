<x-app-layout>

    <div class="flex flex-col w-full mx-auto max-w-7xl p-10 min-h-screen">

        @if (session('success'))
            <div x-data="{ open: true }" x-show="open"
                class="mb-5 w-full items-center rounded-lg bg-green-200 px-6 py-5 text-base text-green-800 inline-flex">
                {{ session('success')}}
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
            {{ __('pages.support') }}
        </h2>

        <div class="flex flex-row mt-8">
            <div class="rounded max-w-7xl w-full mx-auto py-8 px-2 border  border-neutral-200 bg-white dark:border-neutral-600 dark:bg-body-dark">
                <h2 class="text-xl font-bold lg:tracking-tight max-w-3xl mx-auto my-6">
                    {{ __('pages.text us') }}
                </h2>
                
                <form method="POST" action="{{ route($urlTo) }}" class="max-w-3xl mx-auto">
                    @csrf

                    <!-- Name  -->
                    <div class="my-2">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="my-2">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Message -->
                    <div class="my-2">
                        <x-input-label for="mes" :value="__('Message')" />
                        <textarea id="mes" name="mes" :value="old('mes')" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="message"
                            required autofocus></textarea>
                        <x-input-error :messages="$errors->get('mes')" class="mt-2" />
                    </div>

                    <button type="submit" class="inline-flex items-center px-8 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        {{ __('send') }}
                    </button>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
