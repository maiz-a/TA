<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'status_obat',
    ];

    public $timestamps = false;

    public function resepobat()
    {
        return $this->hasMany(ResepObat::class);
    }
}
