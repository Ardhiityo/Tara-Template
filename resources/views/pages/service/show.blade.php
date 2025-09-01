<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Merchants') }}
        </h2>
    </x-slot>

    <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
        {{-- <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="flex flex-col space-y-4 pb-6 px-6 sm:flex-row sm:space-y-0 sm:space-x-4 mb-8">
                <a href="{{ route('dashboard') }}"
                    class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Back
                </a>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden" src="{{ Storage::url($service->photo) }}"
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
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        {{ $service->description }}
                    </p>
                </div>
            </div>
        </div> --}}

        {{-- Dummy Start --}}
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="flex flex-col space-y-4 pb-6 px-6 sm:flex-row sm:space-y-0 sm:space-x-4 mb-8">
                <a href="{{ route('dashboard') }}"
                    class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Back
                </a>
            </div>
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full dark:hidden" src="https://placehold.co/600x400" alt="" />
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        Make Up Artist
                    </h1>
                    <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            IDR 20.000
                        </p>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable
                    </p>
                </div>
            </div>
        </div>
        {{-- Dummy End --}}

    </section>
</x-app-layout>
