<x-main>
    <section class="p-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
        <div class="mb-14">
            <a href="{{ route('main') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Back
            </a>
        </div>
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">

            {{-- <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden rounded-lg" src="{{ Storage::url($service->photo) }}"
                        alt="{{ $service->title }}" />
                </div>
                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        {{ $service->title }}
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            {{ Number::currency($service->price) }}
                        </p>
                        <div class="flex items-center mt-2 sm:mt-0">
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300">
                                {{ $service->type }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <a href="https://wa.me/{{ $service->merchant->phone }}"
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <i class="fa-brands fa-whatsapp fa-2xl mr-2"></i>
                            Whatsapp
                        </a>
                        <a href="mailto:{{ $service->merchant->user->email }}"
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <i class="fa-solid fa-envelope fa-2xl mr-2"></i>
                            Mail
                        </a>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        {{ $service->description }}
                    </p>
                </div>
            </div> --}}

            {{-- Dummy Start --}}
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden rounded-lg" src="https://placehold.co/600x400" alt="Make Up Artist" />
                </div>
                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        Make Up Artist
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            IDR 20.000
                        </p>
                        <div class="flex items-center mt-2 sm:mt-0">
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300">
                                skill
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <a href="https://wa.me/6289650557420"
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <i class="fa-brands fa-whatsapp fa-2xl mr-2"></i>
                            Whatsapp
                        </a>
                        <a href="mailto:aryaadi229@gmail.com"
                            class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <i class="fa-solid fa-envelope fa-2xl mr-2"></i>
                            Mail
                        </a>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum iste aspernatur fuga
                        temporibus corporis quam non eius modi dolor. Debitis magnam incidunt natus hic sequi asperiores
                        rem temporibus culpa.
                    </p>
                </div>
            </div>
            {{-- Dummy End --}}
        </div>
    </section>
</x-main>
