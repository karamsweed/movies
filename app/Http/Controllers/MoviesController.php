<?php

namespace App\Http\Controllers;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moves = Movies::all();
        return view('movies.index', ['moves' => $moves]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("movies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'string|max:100',
            'director' => 'string|max:255',
            'cost' => 'string|max:20',
            'year' => 'string|max:4',
        ]);


        Movies::create($validatedData);


        return redirect()-> route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $moves = Movies::findOrFail($id);
        return view('movies.show', compact('move'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $movie = Movies::findOrFail($id); // Assuming Movies is your model

    return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $moves = Movies::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'director' => '|string|max:255',
            'cost' => 'required|string|max:20',
            'year' => '|string|max:4'
        ]);

        $moves->update($validatedData);

        return redirect()->route('movies.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movies::destroy($id); // Ensure consistency in class names
        return redirect()->route('movies.index')->with('success', 'movie deleted successfully');
    }
}
