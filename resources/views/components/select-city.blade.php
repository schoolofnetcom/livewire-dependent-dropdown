@props([
    "cities" => [],
    "label" => null
])

<div>
    @if($label)
        <label for="{{ $label }}" class="block">{{ $label }}</label>
    @endif
    <select {{ $attributes }} id="{{ $label ? strtolower($label) : '' }}">
        <option value="">Selecione...</option>
        @foreach($cities as $city)
            <option value="{{ $city['nome'] }}">{{ $city['nome'] }}</option>
        @endforeach
    </select>
</div>
