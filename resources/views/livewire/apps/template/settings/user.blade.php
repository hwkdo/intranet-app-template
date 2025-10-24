<?php

use function Livewire\Volt\{title};

title('Template - Meine Einstellungen');

?>

<x-intranet-app-template::template-layout heading="Meine Einstellungen" subheading="Persönliche Einstellungen für die Template App">
    @livewire('intranet-app-base::user-settings', ['appIdentifier' => 'template'])
</x-intranet-app-template::template-layout>
