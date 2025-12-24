<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';
    protected $fillable = ['kode_gejala', 'nama_gejala'];

    // Relasi ke Rule
    public function rules()
    {
        return $this->hasMany(Rule::class, 'gejala_id');
    }

    // Relasi ke Penyakit lewat rules (many-to-many through Rule)
    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'rule', 'gejala_id', 'penyakit_id')
            ->withPivot('cf_pakar');
    }
}
