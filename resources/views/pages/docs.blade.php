<x-app-layout>

    <div class="flex flex-col w-full mx-auto max-w-7xl p-10 min-h-screen">
        <h2 class="text-3xl lg:text-4xl font-bold lg:tracking-tight basis-full">
            {{ __('pages.docs') }}
        </h2>

        <div class="flex flex-row mt-8">
            <div x-data="{ faqOne: true, faqTwo: false, faqThree: false }" class="w-full">
                <div class="rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-body-dark">
                    <h2 class="mb-0">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-body-dark dark:text-white [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary [&:not([data-twe-collapse-collapsed])]:shadow-border-b dark:[&:not([data-twe-collapse-collapsed])]:bg-surface-dark dark:[&:not([data-twe-collapse-collapsed])]:text-primary dark:[&:not([data-twe-collapse-collapsed])]:shadow-white/10 "
                            x-on:click="faqOne = !faqOne">
                            {{ __('pages.button1') }}
                            <span
                                class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div x-cloak x-show="faqOne">
                        <div class="px-5 py-4">
                            {{ __('pages.faq1') }}
                        </div>
                    </div>
                </div>
                <div class="border border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-body-dark">
                    <h2 class="mb-0">
                        <button
                            class="group relative flex w-full items-center border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-body-dark dark:text-white [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary [&:not([data-twe-collapse-collapsed])]:shadow-border-b dark:[&:not([data-twe-collapse-collapsed])]:bg-surface-dark dark:[&:not([data-twe-collapse-collapsed])]:text-primary dark:[&:not([data-twe-collapse-collapsed])]:shadow-white/10 "
                            x-on:click="faqTwo = !faqTwo">
                            {{ __('pages.button2') }}
                            <span
                                class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div x-cloak x-show="faqTwo">
                        <div class="px-5 py-4">
                            {{ __('pages.faq2') }}
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-b-lg border border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-body-dark">
                    <h2 class="accordion-header mb-0">
                        <button
                            class="data-[twe-collapse-collapsed] group relative flex w-full items-center border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none data-[twe-collapse-collapsed]:rounded-b-lg dark:bg-body-dark dark:text-white [&:not([data-twe-collapse-collapsed])]:bg-white [&:not([data-twe-collapse-collapsed])]:text-primary [&:not([data-twe-collapse-collapsed])]:shadow-border-b dark:[&:not([data-twe-collapse-collapsed])]:bg-surface-dark dark:[&:not([data-twe-collapse-collapsed])]:text-primary  dark:[&:not([data-twe-collapse-collapsed])]:shadow-white/10"
                            x-on:click="faqThree = !faqThree">
                            {{ __('pages.button3') }}
                            <span
                                class="-me-1 ms-auto h-5 w-5 shrink-0 rotate-[-180deg] transition-transform duration-200 ease-in-out group-data-[twe-collapse-collapsed]:me-0 group-data-[twe-collapse-collapsed]:rotate-0 motion-reduce:transition-none [&>svg]:h-6 [&>svg]:w-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div x-cloak x-show="faqThree">
                        <div class="px-5 py-4">
                            {{ __('pages.faq3') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
