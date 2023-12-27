<x-app-layout>
    <div class="max-w-screen-lg mx-auto px-5">
        <div class="mt-20 mb-4">
            <div class="flex justify-between items-center">
                <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                    Все ваши API
                </h2>
                <a class="ml-5 text-lg rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-8 h-8 hover:fill-gray-700">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>

            @empty($responses)
            <p class="text-xl mt-7 text-center text-slate-600">
                у вас пока нет API, нажмите чтобы добавить
            </p>
            @else
            <ul>
                @foreach($responses as $response)
                <li class="my-6">
                    <div class="p-4 flex flex-row justify-between bg-gray-200 text-black shadow-lg">
                        <div class="basis-full rounded-lg bg-neutral-800">
                            <h5 class="text-xl font-medium m-2 ml-3 text-neutral-300">{{ route('get_api', ['id' => $response->id]) }}</h5>
                        </div>
                        <div class="ml-6 text-right flex flex-row">

                            <!-- <a href="#" class="flex content-center justify-center text-lg rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-8 h-8 m-auto hover:fill-purple-900">
                                    <path fill-rule="evenodd" d="M17.663 3.118c.225.015.45.032.673.05C19.876 3.298 21 4.604 21 6.109v9.642a3 3 0 0 1-3 3V16.5c0-5.922-4.576-10.775-10.384-11.217.324-1.132 1.3-2.01 2.548-2.114.224-.019.448-.036.673-.051A3 3 0 0 1 13.5 1.5H15a3 3 0 0 1 2.663 1.618ZM12 4.5A1.5 1.5 0 0 1 13.5 3H15a1.5 1.5 0 0 1 1.5 1.5H12Z" clip-rule="evenodd" />
                                    <path d="M3 8.625c0-1.036.84-1.875 1.875-1.875h.375A3.75 3.75 0 0 1 9 10.5v1.875c0 1.036.84 1.875 1.875 1.875h1.875A3.75 3.75 0 0 1 16.5 18v2.625c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625v-12Z" />
                                    <path d="M10.5 10.5a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963 5.23 5.23 0 0 0-3.434-1.279h-1.875a.375.375 0 0 1-.375-.375V10.5Z" />
                                </svg>
                            </a> -->
                            <a href="#" class="flex justify-center ml-2 text-lg rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-8 h-8 m-auto hover:fill-yellow-900">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                                    <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                                </svg>

                            </a>
                            <a href="#" class="flex justify-center ml-2 text-lg rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" data-slot="icon" class="w-8 h-8 m-auto hover:fill-red-700">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm3 10.5a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5h6Z" clip-rule="evenodd" />
                                </svg>

                            </a>
                        </div>

                    </div>
                </li>
                @endforeach
            </ul>
            @endempty
        </div>
    </div>
</x-app-layout>