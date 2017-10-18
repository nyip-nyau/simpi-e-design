<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsKontributor extends Model
{
    use SoftDeletes;
    public $fillable = [
        'narasumber_id',
        'bws_id',
        'direktorat_id',
        'pengajuan_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
