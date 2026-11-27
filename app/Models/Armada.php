<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    // Mengarahkan ke nama tabel yang benar di database gudang_d
    protected $table = 'armada';

    protected $primaryKey = 'nomor_seri';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nomor_seri', 'jenis', 'merk', 'kondisi', 'status'
    ];
}