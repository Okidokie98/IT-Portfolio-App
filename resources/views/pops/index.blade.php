<x-app-layout>
    <x-notification.notification />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg m-3">
                <div class="p-3 text-gray-900">
                    <details>
                        <summary>Sorteren</summary>
                        <form method="GET" action="{{ route('pops.index') }}">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="sort">Sort By</label>
                                    <select id="sort" name="sort" class="form-control">
                                        <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name</option>
                                        <option value="series" {{ request('sort') == 'series' ? 'selected' : '' }}>Series</option>
                                        <option value="number" {{ request('sort') == 'number' ? 'selected' : '' }}>Nummer</option>
                                        <option value="category" {{ request('sort') == 'category' ? 'selected' : '' }}>Categorië</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="direction">Sort Direction</label>
                                    <select id="direction" name="direction" class="form-control">
                                        <option value="asc" {{ request('direction') == 'asc' ? 'selected' : '' }}>Oplopend (A-Z)</option>
                                        <option value="desc" {{ request('direction') == 'desc' ? 'selected' : '' }}>Aflopend (Z-A)</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="button is-primary">Filter Table</button>
                        </form>
                    </details>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm rounded-lg m-3">
                <div class="p-6 text-gray-900">
                    <p>Aantal Funko Pops: {{$funkoCount}}</p>
                    <p>Aantal unieke series: {{ $uniqueSeriesCount }}</p>
                    <p>Meest voorkomende categorie: {{ $mostCommonCategory->category }} ({{ $mostCommonCategory->count }}x)</p>
                    <p>Meest voorkomende serie: {{ $mostCommonSeries->series }} ({{ $mostCommonSeries->count }}x)</p>
                    <p>Nieuwste Funko Pop: <a href="{{ route('pops.show', $newestPop->id) }}">{{ $newestPop->name ?? 'Geen data' }}</a></p>
                    <p>Hoogste nummer: {{ $highestNumberData->number }} ({{ $highestNumberData->count }}x)</p>
                    <p>Laagste nummer: {{ $lowestNumberData->number }} ({{ $lowestNumberData->count }}x)</p>

                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm rounded-lg m-3">
                <a href="{{ route('pops.create') }}" class="button is-primary">
                    <i class="fa-solid fa-plus"></i>&nbsp; Voeg een nieuwe Funko Pop toe!
                </a>
            </div>

            <div class="bg-white shadow-sm rounded-lg m-3 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Series</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categorië</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($pops as $pop)
                        <x-pops.table-row :pop="$pop" class="odd:bg-gray-300 even:bg-gray-100 hover:bg-green-200"/>
                    @endforeach
                    </tbody>
                </table>
                {{ $pops->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
