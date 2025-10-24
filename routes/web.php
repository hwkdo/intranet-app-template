<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware(['web','auth','can:see-app-template'])->group(function () {        
    Volt::route('apps/template', 'apps.template.index')->name('apps.template.index');
    Volt::route('apps/template/example', 'apps.template.example')->name('apps.template.example');
    Volt::route('apps/template/settings/user', 'apps.template.settings.user')->name('apps.template.settings.user');
});

Route::middleware(['web','auth','can:manage-app-template'])->group(function () {
    Volt::route('apps/template/admin', 'apps.template.admin.index')->name('apps.template.admin.index');
});
