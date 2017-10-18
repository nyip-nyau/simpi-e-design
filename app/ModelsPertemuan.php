<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsPertemuan extends Model
{
    use SoftDeletes;
    public $fillable = [
        'link_pertemuan',
        'jadwal_pertemuan',
        'pengajuan_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
