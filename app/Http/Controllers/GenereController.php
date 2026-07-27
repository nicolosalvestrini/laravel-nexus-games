<?php

namespace App\Http\Controllers;

use App\Models\Genere;
use Illuminate\Http\Request;

class GenereController extends Controller
{
    public function index()
    {
        $generi = Genere::orderBy('nome')->paginate(10);

        return view('admin.generi.index', compact('generi'));
    }

    public function create()
    {
        return view('admin.generi.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Genere::create($data);

        return redirect()->route('generi.index')->with('status', 'Genere creato con successo.');
    }

    public function edit(Genere $genere)
    {
        return view('admin.generi.edit', compact('genere'));
    }

    public function update(Request $request, Genere $genere)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $genere->update($data);

        return redirect()->route('generi.index')->with('status', 'Genere aggiornato con successo.');
    }

    public function destroy(Genere $genere)
    {
        $genere->delete();

        return redirect()->route('generi.index')->with('status', 'Genere eliminato.');
    }
}
