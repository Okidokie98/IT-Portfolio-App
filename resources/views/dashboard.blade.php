<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <div class="flex flex-col items-center space-y-4">

                            <a href="{{ route('pops.index') }}" class="inline-block px-6 py-2 text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 rounded-md">
                                {{ __("Funko POP Collectie") }}
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
