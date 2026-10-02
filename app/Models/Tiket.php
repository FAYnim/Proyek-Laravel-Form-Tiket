<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = ["nama_event", "nama_pembeli", "jumlah_tiket", "harga_tiket", "total_harga"];
}
