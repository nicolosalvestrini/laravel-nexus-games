<?php

namespace App\Http\Controllers;

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
        return view('admin.videogiochi.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titolo' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            'anno_uscita' => 'nullable|integer|min:1970|max:' . date('Y'),
            'voto' => 'nullable|numeric|min:0|max:10',
        ]);

        VideoGioco::create($data);

        return redirect()->route('videogiochi.index')->with('status', 'Videogioco creato con successo.');
    }

    public function show(VideoGioco $videoGioco)
    {
        return view('admin.videogiochi.show', compact('videoGioco'));
    }

    public function edit(VideoGioco $videoGioco)
    {
        return view('admin.videogiochi.edit', compact('videoGioco'));
    }

    public function update(Request $request, VideoGioco $videoGioco)
    {
        $data = $request->validate([
            'titolo' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
            'anno_uscita' => 'nullable|integer|min:1970|max:' . date('Y'),
            'voto' => 'nullable|numeric|min:0|max:10',
        ]);

        $videoGioco->update($data);

        return redirect()->route('videogiochi.index')->with('status', 'Videogioco aggiornato con successo.');
    }

    public function destroy(VideoGioco $videoGioco)
    {
        $videoGioco->delete();

        return redirect()->route('videogiochi.index')->with('status', 'Videogioco eliminato.');
    }
}
