<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputPesanan extends Model
{
    use HasFactory;

    protected $table = 'inputpesananss';

    protected $fillable = [
        'Nama_Barang',
        'nama',
        'alamat',
        // 'Alamat_Tujuan',
        'Nama_Paket',
        'Harga_Paket',
        'kurirs_id',
        'status',
        'paket',
        'paket_sekarang',
        'penerimaan_paket',
        'Angkutan',
        'province',
        'city_name',
        'postal_code',
        'DetailAlamat',
        'Lebar_cm',
        'Tinggi_cm',
        'Berat_kg',
        'Nama_Kurir',
        'PerkiraanSampai',
        'titikjemput',
        'infostatusbykurir',
        'NomorHpKurir'
                



    ];

    public function user()
    {
        return $this->hasMany(User::class, 'nama', 'nama');
    }

    public function pilihanPaketByNama()
    {
        return $this->hasMany(PilihanPaket::class, 'Nama_Paket', 'Nama_Paket');
    }

    public function pilihanPaketByHarga()
    {
        return $this->hasMany(PilihanPaket::class, 'Harga_Paket', 'Harga_Paket');
    }

    
    public function kurir()
    {
        return $this->belongsTo(Kurir::class, 'kurirs_id', 'id');
    }

}
