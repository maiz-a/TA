<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'isi',
        'rekam_medik_id',
        'rekam_medik_keluarga_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rekam_medik()
    {
        return $this->belongsTo(RekamMedik::class);
    }
}
