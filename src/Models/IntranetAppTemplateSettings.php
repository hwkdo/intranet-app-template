<?php

namespace Hwkdo\IntranetAppTemplate\Models;

use Hwkdo\IntranetAppTemplate\Data\AppSettings;
use Illuminate\Database\Eloquent\Model;

class IntranetAppTemplateSettings extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'settings' => AppSettings::class.':default',
        ];
    }

    public static function current(): IntranetAppTemplateSettings|null
    {
        return self::orderBy('version', 'desc')->first();
    }
}
