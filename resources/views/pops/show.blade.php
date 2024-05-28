<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-3">
                <div class="pl-6 p-2 font-extrabold text-black is-bold inline-block">
                    POP Name:
                </div>
                <div class="pl-6 p-2 text-gray-900 inline-block">
                    {{ $pop->name }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-3">
                <div class="pl-6 p-2 font-extrabold text-black is-bold inline-block">
                    POP Series:
                </div>
                <div class="pl-6 p-2 text-gray-900 inline-block">
                    {{ $pop->series }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-3">
                <div class="pl-6 p-2 font-extrabold text-black is-bold inline-block">
                    POP Number:
                </div>
                <div class="pl-6 p-2 text-gray-900 inline-block">
                    {{ $pop->number }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-3">
                <div class="pl-6 p-2 font-extrabold text-black is-bold inline-block">
                    POP Category:
                </div>
                <div class="pl-6 p-2 text-gray-900 inline-block">
                    {{ $pop->category }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
