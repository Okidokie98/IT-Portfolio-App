<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-3">
                <div class="p-3 text-gray-900">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Edit Funko Pop
                    </h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('pops.update', $pop->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">POP Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $pop->name }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="series">POP Series</label>
                                <input type="text" id="series" name="series" class="form-control" value="{{ $pop->series }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="number">POP Number</label>
                                <input type="number" id="number" name="number" class="form-control" value="{{ $pop->number }}" min="0" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category">POP Category</label>
                                <input type="text" id="category" name="category" class="form-control" value="{{ substr($pop->category, 5) }}" required>
                                <small class="form-text text-muted">Format: Pop! xxx</small>
                            </div>
                        </div>
                        <button type="submit" class="button is-primary mt-3">Update Funko Pop</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
