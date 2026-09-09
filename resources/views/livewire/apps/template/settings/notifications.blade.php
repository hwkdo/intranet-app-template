<?php

use function Livewire\Volt\title;

title('Benachrichtigungen - Template');

?>

<div>
    <x-intranet-app-template::template-layout heading="Benachrichtigungen" subheading="Benachrichtigungseinstellungen für die Template-App">
        @livewire('intranet-app-base::notification-settings', ['appIdentifier' => 'template'])
    </x-intranet-app-template::template-layout>
</div>
