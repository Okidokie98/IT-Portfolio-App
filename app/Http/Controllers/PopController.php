<?php

namespace App\Http\Controllers;

use App\Models\Pop;
use App\Http\Requests\StorePopRequest;
use App\Http\Requests\UpdatePopRequest;
use Illuminate\Http\Request;

class PopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $query = Pop::query();

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePopRequest $request)
    {
        //
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
        //
    }
}
