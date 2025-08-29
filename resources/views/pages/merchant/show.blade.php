<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Merchants') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 rounded-lg">
        <div class="p-12 mx-auto max-w-screen-xl">
            <div class="max-w-screen-md">
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4 mb-8">
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Back
                    </a>
                </div>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Yani MUA</h2>
                <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400">Flowbite helps you connect
                    with
                    friends, family and communities of people who share your interests. Connecting with your friends
                    and
                    family as well as discovering new ones is easy with features like Groups, Watch and Marketplace.
                </p>
            </div>
        </div>
    </section>
</x-app-layout>
