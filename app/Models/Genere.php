<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genere extends Model
{
    use HasFactory;
    protected $table = 'generi';

    protected $fillable = ['nome'];

    public function videoGiochi()
    {
        return $this->belongsToMany(VideoGioco::class, 'genere_video_gioco');
    }
}
