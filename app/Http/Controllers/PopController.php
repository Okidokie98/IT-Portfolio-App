<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use App\Http\Requests\StorePopRequest;
use App\Http\Requests\UpdatePopRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = Pop::where('user_id', Auth::id());

        if ($request->has('sort') && $request->has('direction')) {
            $query->orderBy($request->sort, $request->direction);
        }

        $query = $query->orderBy('number', 'asc');
        $pops = $query->paginate(10)->appends($request->query());

        return view('pops.index', compact('pops') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'series' => 'required|string|max:255',
            'number' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
        ]);

        $validatedData['category'] = 'Pop! ' . $validatedData['category'];
        $validatedData['user_id'] = Auth::id();

        Pop::create($validatedData);

        return redirect()->route('pops.index')->with('success', 'Funko Pop added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pop $pop)
    {
        return view('pops.show', [
            'pop' => $pop
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pop $pop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePopRequest $request, Pop $pop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pop $pop)
    {
        $pop->delete();

        return redirect()->route('pops.index')->with('success', 'Funko Pop deleted successfully!');
    }
}
