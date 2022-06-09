<?php

namespace odinbi\pwa\models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'pwa_settings';
    protected $connection = config('odb_pwa.database.driver');
    protected $fillable = [
        'tenant_id',
        'data',
        'status',
    ];
    protected $casts = [
        'data' => 'array',
    ];
}
