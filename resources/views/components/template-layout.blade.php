@props([
    'heading' => '',
    'subheading' => '',
    'navItems' => []
])

@php
    $defaultNavItems = [
        ['label' => 'Übersicht', 'href' => route('apps.template.index'), 'icon' => 'home', 'description' => 'Zurück zur Übersicht', 'buttonText' => 'Übersicht anzeigen'],
        ['label' => 'Beispielseite', 'href' => route('apps.template.example'), 'icon' => 'document-text', 'description' => 'Beispielseite anzeigen', 'buttonText' => 'Beispielseite öffnen'],
        ['label' => 'Meine Einstellungen', 'href' => route('apps.template.settings.user'), 'icon' => 'cog-6-tooth', 'description' => 'Persönliche Einstellungen anpassen', 'buttonText' => 'Einstellungen öffnen'],
        ['label' => 'Admin', 'href' => route('apps.template.admin.index'), 'icon' => 'shield-check', 'description' => 'Administrationsbereich verwalten', 'buttonText' => 'Admin öffnen', 'permission' => 'manage-app-template']
    ];
    
    $navItems = !empty($navItems) ? $navItems : $defaultNavItems;
@endphp

@if(request()->routeIs('apps.template.index'))
    <x-intranet-app-base::app-layout 
        app-identifier="template"
        :heading="$heading"
        :subheading="$subheading"
        :nav-items="$navItems"
        :wrap-in-card="false"
    >
        <x-intranet-app-base::app-index-auto 
            app-identifier="template"
            app-name="Template App"
            app-description="Beispiel-App für neue Intranet-Apps"
            :nav-items="$navItems"
            welcome-title="Willkommen zur Template App"
            welcome-description="Dies ist eine Beispiel-App, die als Template für neue Intranet-Apps dient."
        />
    </x-intranet-app-base::app-layout>
@else
    <x-intranet-app-base::app-layout 
        app-identifier="template"
        :heading="$heading"
        :subheading="$subheading"
        :nav-items="$navItems"
        :wrap-in-card="true"
    >
        {{ $slot }}
    </x-intranet-app-base::app-layout>
@endif
