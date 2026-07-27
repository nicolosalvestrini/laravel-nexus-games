<?php

namespace App\Http\Controllers;

use App\Models\Genere;
use App\Models\Piattaforma;
use Illuminate\Support\Facades\Storage;
use App\Models\VideoGioco;
use Illuminate\Http\Request;

class VideoGiocoController extends Controller
{
    public function index()
    {
        $videoGiochi = VideoGioco::latest()->paginate(9);

        return view('admin.videogiochi.index', compact('videoGiochi'));
    }

    public function create()
    {
        $generi = Genere::orderBy('nome')->get();
        $piattaforme = Piattaforma::orderBy('nome')->get();

        return view('admin.videogiochi.create', compact('generi', 'piattaforme'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titolo' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            'anno_uscita' => 'nullable|integer|min:1970|max:' . date('Y'),
            'voto' => 'nullable|numeric|min:0|max:10',
            'copertina' => 'nullable|image|max:2048',
            'generi' => 'nullable|array',
            'generi.*' => 'exists:generi,id',
            'piattaforme' => 'nullable|array',
            'piattaforme.*' => 'exists:piattaforme,id',
        ]);

        if ($request->hasFile('copertina')) {
            $data['copertina'] = $request->file('copertina')->store('copertine', 'public');
        }

        $videoGioco = VideoGioco::create($data);

        $videoGioco->generi()->sync($request->input('generi', []));
        $videoGioco->piattaforme()->sync($request->input('piattaforme', []));

        return redirect()->route('videogiochi.index')->with('status', 'Videogioco creato con successo.');
    }

    public function show(VideoGioco $videoGioco)
    {
        return view('admin.videogiochi.show', compact('videoGioco'));
    }

    public function edit(VideoGioco $videoGioco)
    {
        $generi = Genere::orderBy('nome')->get();
        $piattaforme = Piattaforma::orderBy('nome')->get();

        return view('admin.videogiochi.edit', compact('videoGioco', 'generi', 'piattaforme'));
    }

    public function update(Request $request, VideoGioco $videoGioco)
    {
        $data = $request->validate([
            'titolo' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            'anno_uscita' => 'nullable|integer|min:1970|max:' . date('Y'),
            'voto' => 'nullable|numeric|min:0|max:10',
            'copertina' => 'nullable|image|max:2048',
            'generi' => 'nullable|array',
            'generi.*' => 'exists:generi,id',
            'piattaforme' => 'nullable|array',
            'piattaforme.*' => 'exists:piattaforme,id',
        ]);

        if ($request->hasFile('copertina')) {
            if ($videoGioco->copertina) {
                Storage::disk('public')->delete($videoGioco->copertina);
            }

            $data['copertina'] = $request->file('copertina')->store('copertine', 'public');
        }

        $videoGioco->update($data);

        $videoGioco->generi()->sync($request->input('generi', []));
        $videoGioco->piattaforme()->sync($request->input('piattaforme', []));

        return redirect()->route('videogiochi.index')->with('status', 'Videogioco aggiornato con successo.');
    }

    public function destroy(VideoGioco $videoGioco)
    {
        if ($videoGioco->copertina) {
            Storage::disk('public')->delete($videoGioco->copertina);
        }

        $videoGioco->delete();

        return redirect()->route('videogiochi.index')->with('status', 'Videogioco eliminato.');
    }
}
