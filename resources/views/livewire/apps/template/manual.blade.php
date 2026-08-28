<?php

use function Livewire\Volt\{title};

title('Template - Bedienungsanleitung');

?>

<div>
    <x-intranet-app-template::template-layout heading="Bedienungsanleitung" subheading="Schritt-für-Schritt-Anleitung zur App">
        @livewire('intranet-app-base::manual-show', ['appIdentifier' => 'template'])
    </x-intranet-app-template::template-layout>
</div>
