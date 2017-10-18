<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsPengajuan extends Model
{
    use SoftDeletes;
    public $fillable = [
        'judul_pengajuan',
        'deskripsi_pengajuan',
        'kategori_id',
        'konsultan_id',
        'status_pengajuan'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
