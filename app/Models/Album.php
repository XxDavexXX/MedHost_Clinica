<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'Album';
    
    protected $primarykey = 'album_id';

    protected $fillable = [
        'album_nombre',
        'album_descripcion',
        'usuario_id'
    ];

    public function fotos()
    {
        return $this->hasMany('App\Models\Foto', 'album_id','album_id');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'id','usuario_id');
    }

    use HasFactory;

}
