<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjams';
    protected $primaryKey = 'peminjaman_id';

    protected $fillable = [
        'buku_id',
        'judul',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
}
