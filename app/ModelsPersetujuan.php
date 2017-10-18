<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsPersetujuan extends Model
{
    use SoftDeletes;
    public $fillable = ['dok_persetujuan','note_persetujuan', 'pengajuan_id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
