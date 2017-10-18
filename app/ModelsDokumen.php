<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsDokumen extends Model
{
    use SoftDeletes;
    public $fillable = [
        'pendahuluan_dokumen',
        'interim_dokumen',
        'draft_akhir_dokumen',
        'akhir_dokumen',
        'desain_dokumen',
        'hidrologi_dokumen',
        'sosial_ekonomi_dokumen',
        'topografi_dokumen',
        'geologi_teknik_dokumen',
        'nota_desain_dokumen',
        'larap_dokumen',
        'lingkungan_dokumen',
        'pengajuan_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
