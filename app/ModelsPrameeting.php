<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsPrameeting extends Model
{
    use SoftDeletes;
    public $fillable = ['dok_risalah_prameeting','bws_prameeting', 'direktorat_prameeting', 'narasumber_prameeting', 'dok_konsultan_prameeting', 'pengajuan_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
