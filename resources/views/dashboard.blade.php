<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @role('admin')
        <div class="flex gap-6 flex-wrap justify-center">
            <div class="bg-white w-sm shadow-xs sm:rounded-lg">
                <div class="p-6 flex flex-col gap-4 items-center justify-center py-[50px] text-gray-900">
                    <span class="font-bold">
                        <i class="fa-solid fa-shop mr-1"></i>
                        Total Merchant
                    </span>
                    {{-- Dummy Start --}}
                    {{-- <span class="text-2xl">{{ $merchants->total() }}</span> --}}
                    {{-- Dummy Start --}}

                    <span class="text-2xl">100</span>
                </div>
            </div>
        </div>
    @endrole

    @role('merchant')
        <div class="flex flex-wrap gap-6 justify-center">
            <div class="bg-white flex-col w-sm shadow-xs rounded-lg">
                <div class="p-6 flex flex-col gap-4 items-center justify-center py-[50px] text-gray-900">
                    <span class="font-bold">
                        <i class="fa-solid fa-list mr-1"></i>
                        Total Services
                    </span>
                    {{-- <span class="text-2xl">{{ $services->total() }}</span> --}}

                    {{-- Dummy Start --}}
                    50
                    {{-- Dummy End --}}
                </div>
            </div>
            <div class="bg-white flex-col w-sm shadow-xs rounded-lg">
                <div class="p-6 flex flex-col gap-4 items-center justify-center py-[50px] text-gray-900">
                    <span class="font-bold">
                        <i class="fa-solid fa-circle-info mr-1"></i>
                        Status
                    </span>
                    {{-- <span class="text-xl">{{ $merchant_status }}</span> --}}

                    {{-- Dummy Start --}}
                    <span class="text-xl">Active</span>
                    {{-- Dummy End --}}
                </div>
            </div>
        </div>
    @endrole

    @role('merchant')
        {{-- <x-service :services="$services" /> --}}

        {{-- Dummy Start --}}
        <x-service :services="[]" />
        {{-- Dummy End --}}
    @endrole
    @role('admin')
        {{-- <x-merchant :merchants="$merchants" /> --}}

        {{-- Dummy Start --}}
        <x-merchant :merchants="[]" />
        {{-- Dummy End --}}
    @endrole
</x-app-layout>
