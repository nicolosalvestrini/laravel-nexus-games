<?php

namespace App\Http\Controllers;

use App\Models\Piattaforma;
use Illuminate\Http\Request;

class PiattaformaController extends Controller
{
    public function index()
    {
        $piattaforme = Piattaforma::orderBy('nome')->paginate(10);

        return view('admin.piattaforme.index', compact('piattaforme'));
    }

    public function create()
    {
        return view('admin.piattaforme.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Piattaforma::create($data);

        return redirect()->route('piattaforme.index')->with('status', 'Piattaforma creata con successo.');
    }

    public function edit(Piattaforma $piattaforma)
    {
        return view('admin.piattaforme.edit', compact('piattaforma'));
    }

    public function update(Request $request, Piattaforma $piattaforma)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $piattaforma->update($data);

        return redirect()->route('piattaforme.index')->with('status', 'Piattaforma aggiornata con successo.');
    }

    public function destroy(Piattaforma $piattaforma)
    {
        $piattaforma->delete();

        return redirect()->route('piattaforme.index')->with('status', 'Piattaforma eliminata.');
    }
}
