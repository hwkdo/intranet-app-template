<?php

use function Livewire\Volt\{title};

title('Template - App-Info');

?>

<x-intranet-app-template::template-layout heading="App-Info" subheading="Installierte Version und Release-Historie">
    @livewire('intranet-app-base::app-info', ['appIdentifier' => 'template'])
</x-intranet-app-template::template-layout>
