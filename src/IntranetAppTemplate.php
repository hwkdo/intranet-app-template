<?php

namespace Hwkdo\IntranetAppTemplate;
use Hwkdo\IntranetAppBase\Interfaces\IntranetAppInterface;
use Illuminate\Support\Collection;

class IntranetAppTemplate implements IntranetAppInterface 
{
    public static function app_name(): string
    {
        return 'Template';
    }

    public static function app_icon(): string
    {
        return 'magnifying-glass';
    }

    public static function identifier(): string
    {
        return 'template';
    }

    public static function roles_admin(): Collection
    {
        return collect(config('intranet-app-template.roles.admin'));
    }

    public static function roles_user(): Collection
    {
        return collect(config('intranet-app-template.roles.user'));
    }    
}
