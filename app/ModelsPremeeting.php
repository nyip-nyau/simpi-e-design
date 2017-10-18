<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsPremeeting extends Model
{
    use SoftDeletes;
    public $fillable = [
        'narasumber_premeeting',
        'bws_premeeting',
        'direktorat_premeeting',
        'dok_premeeting',
        'dok_konsultan_premeeting',
        'konsultan_premeeting',
        'pengajuan_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
