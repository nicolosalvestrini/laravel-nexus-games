<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VideoGioco;

class VideoGiocoController extends Controller
{
    public function index()
    {
        return VideoGioco::with(['generi', 'piattaforme'])->latest()->get();
    }

    public function show(VideoGioco $videoGioco)
    {
        return $videoGioco->load(['generi', 'piattaforme']);
    }
}
