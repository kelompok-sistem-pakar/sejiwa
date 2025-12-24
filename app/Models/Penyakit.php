<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit';
    protected $fillable = ['kode_penyakit', 'nama_penyakit'];

    // Relasi ke Rule
    public function rules()
    {
        return $this->hasMany(Rule::class, 'penyakit_id');
    }

    // Relasi ke Gejala lewat rules (many-to-many through Rule)
    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'rule', 'penyakit_id', 'gejala_id')
            ->withPivot('cf_pakar');
    }
}
