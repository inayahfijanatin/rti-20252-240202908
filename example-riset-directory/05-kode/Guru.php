<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nip',
        'nama_guru',
        'jabatan',
        'jenis_kelamin',
        'no_hp',
        'email',
        'alamat',
        'foto',
        'qr_code',
    ];
    public function absensis()
{
    return $this->hasMany(Absensi::class, 'guru_id');
}
}
