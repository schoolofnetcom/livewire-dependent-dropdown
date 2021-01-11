<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;

class Select extends Component
{
    public $states;
    public $selectedStateSigla = "";
    public $selectedState = "";
    public $cities;
    public $selectedCity = "";
    public $showCityField = false;

    public function mount() {
        $states = new Client();
        $res = $states->request('GET', 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome');
        $this->states = json_decode($res->getBody()->getContents());
    }

    public function updatedSelectedState($value) {
        $this->showCityField = true;
        $cities = new Client();
        $res = $cities->request('GET', "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$this->selectedStateSigla}/municipios?orderBy=nome");
        $this->cities = json_decode($res->getBody()->getContents());
    }

    public function render()
    {
        return view('livewire.select');
    }
}
