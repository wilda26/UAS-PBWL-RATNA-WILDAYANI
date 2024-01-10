<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {
    protected $guarded = [''];
    use HasFactory;

    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id');
    }

    public static function generateNis()
    {
        $currentYear = date('Y');

        $randomDigits = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);

        $nis = $currentYear . $randomDigits;

        return $nis;
    }
}
