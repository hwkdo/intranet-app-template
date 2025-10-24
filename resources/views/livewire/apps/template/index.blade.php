<?php

use function Livewire\Volt\{title};

title('Template - Übersicht');

?>

<x-intranet-app-template::template-layout heading="Template App" subheading="Übersicht">
    <x-intranet-app-base::app-index-auto 
        app-identifier="template"
        app-name="Template App"
        app-description="Beispiel-App für neue Intranet-Apps"
        welcome-title="Willkommen zur Template App"
        welcome-description="Dies ist eine Beispiel-App, die als Template für neue Intranet-Apps dient."
    />
</x-intranet-app-template::template-layout>