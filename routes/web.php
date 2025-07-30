<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::middleware(['web','auth','can:see-app-template'])->group(function () {        
    Volt::route('apps/template', 'apps.template.index')->name('apps.template.index');                
});
