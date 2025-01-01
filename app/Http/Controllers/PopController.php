<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use App\Http\Requests\StorePopRequest;
use App\Http\Requests\UpdatePopRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PopController extends Controller
{
    private function getStatistics()
    {
        $user = Auth::user();
        $funkoCount = Pop::where('user_id', $user->id)->count();

        return compact('funkoCount');
    }

    public function showStats()
    {
        // Haal statistieken op via de helperfunctie
        $stats = $this->getStatistics();

        return view('pops.stats', $stats);
    }

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

        // Haal statistieken op via de helperfunctie
        $stats = $this->getStatistics();

        return view('pops.index', array_merge(['pops' => $pops], $stats));
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
        return view('pops.show', compact('pop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pop $pop)
    {
        return view('pops.edit', compact('pop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pop $pop)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'series' => 'required|string|max:255',
            'number' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
        ]);

        // Verwerk de categorie in het gewenste formaat "Pop! xxx"
        $validatedData['category'] = 'Pop! ' . $validatedData['category'];

        // Update de gevalideerde gegevens in de FunkoPop
        $pop->update($validatedData);

        // Redirect naar de index pagina met een succesmelding
        return redirect()->route('pops.index')->with('success', 'Funko Pop updated successfully!');
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
