<?php

namespace odinbi\pwa\models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'pwa_settings';

    protected $fillable = [
        'tenant_id',
        'data',
        'status',
    ];
    protected $casts = [
        'data' => 'array',
    ];
}
