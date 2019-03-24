<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
		protected $table = 'siswas';
		protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'agama', 'alamat'];
}
