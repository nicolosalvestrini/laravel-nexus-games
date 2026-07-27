<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGioco extends Model
{
    protected $appends = ['copertina_url'];

    public function getCopertinaUrlAttribute(): ?string
    {
        return $this->copertina ? Storage::url($this->copertina) : null;
    }
    
    use HasFactory;

    protected $table = 'video_giochi';

    protected $fillable = [
        'titolo',
        'descrizione',
        'anno_uscita',
        'voto',
        'copertina',
    ];

    public function generi()
    {
        return $this->belongsToMany(Genere::class, 'genere_video_gioco');
    }

    public function piattaforme()
    {
        return $this->belongsToMany(Piattaforma::class, 'piattaforma_video_gioco');
    }
}
