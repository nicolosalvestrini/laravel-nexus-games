<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piattaforma extends Model
{
    use HasFactory;

    protected $table = 'piattaforme';

    protected $fillable = ['nome'];

    public function videoGiochi()
    {
        return $this->belongsToMany(VideoGioco::class, 'piattaforma_video_gioco');
    }
}
