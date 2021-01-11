<div>
    <div class="w-full h-screen max-w-2xl mx-auto flex flex-col justify-center items-center">
        <h1 class="text-5xl antialiased mb-8">Dropdown dependente</h1>
        <div class="flex w-full">
            <div class="w-1/2">
                <x-select-state wire:model="selectedState" :states="$states" label="Estado"/>
            </div>
            @if($showCityField)
                <div class="w-1/2">
                    <x-select-city wire:model="selectedCity" :cities="$cities" label="Cidade"/>
                </div>
            @endif
        </div>
    </div>
</div>
