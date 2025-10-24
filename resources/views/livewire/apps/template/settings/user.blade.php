<?php

use function Livewire\Volt\{title};

title('Template - Meine Einstellungen');

?>

<x-intranet-app-template::template-layout heading="Template App" subheading="Meine Einstellungen">
    <x-intranet-app-base::user-settings app-identifier="template" />
</x-intranet-app-template::template-layout>
