@props([
    "states" => [],
    "label" => null
])

<div>
    @if($label)
        <label for="{{ $label }}" class="block">{{ $label }}</label>
    @endif
    <select {{ $attributes }} id="{{ $label ? strtolower($label) : '' }}">
        <option value="">Selecione...</option>
        @foreach($states as $state)
            <option wire:click="$set('selectedStateSigla', {{ $state->sigla }})">{{ $state->nome }}</option>
        @endforeach
    </select>
</div>
