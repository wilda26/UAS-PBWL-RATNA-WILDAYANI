<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {
    protected $guarded = [];
    use HasFactory;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id');
    }
}
