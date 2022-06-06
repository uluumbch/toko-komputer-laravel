<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barang";
    // protected $primaryKey = 'id_barang';
    protected $guarded =  ['id_barang'];
    protected $fillable  = ['nama', 'category_id', 'harga', 'stok_barang'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }
}
