<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    
    protected $fillable = ['mahasiswa_id', 'tanggal', 'diagnosis', 'cf_total'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function detail()
    {
        return $this->hasMany(DetailKonsultasi::class);
    }
}
