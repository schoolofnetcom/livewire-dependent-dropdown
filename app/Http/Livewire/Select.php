<?php

namespace App\Http\Livewire;

use Livewire\Component;
class Select extends Component
{
    public $states;
    public $cities;
    public $selectedState;
    public $selectedCity;
    public $showCities = false;

    public function mount() {
        $response = \Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome");
        $this->states = json_decode($response->body(), true);
    }

    // o $value vai ser a sigla do estado
    public function updatedSelectedState($value) {
        $this->showCities = true;
        $response = \Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$value}/municipios?orderBy=nome");
        $this->cities = json_decode($response->body(), true);
    }

    public function render()
    {
        return view('livewire.select');
    }
}
