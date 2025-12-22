<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyakit extends Model
{
    use HasFactory;

    protected $fillable = ['kode_penyakit', 'nama_penyakit'];

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
