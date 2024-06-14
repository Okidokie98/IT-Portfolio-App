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

            <a href="{{ route('pops.edit', $pop->id) }}" class="button is-primary">
                <i class="fa-solid fa-edit"></i>&nbsp; Edit Funko Pop
            </a>

            <form method="POST" action="{{ route('pops.destroy', $pop->id) }}" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this Funko Pop?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="button is-danger">
                    <i class="fa-solid fa-trash"></i>&nbsp; Delete Funko Pop
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
