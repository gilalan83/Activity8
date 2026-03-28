<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo_url' => 'required',
            'info'      => 'required',
        ]);

        Superhero::create($request->all());
        return redirect()->route('superheroes.index');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo_url' => 'required',
            'info'      => 'required',
        ]);

        $superhero->update($request->all());
        return redirect()->route('superheroes.index');
    }

    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}