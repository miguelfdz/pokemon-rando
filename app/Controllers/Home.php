<?php

namespace App\Controllers;
use PokePHP\PokeApi;

class Home extends BaseController
{
    public function index()
    {
        $api = new PokeApi;
        $pokedex = json_decode($api->pokedex("kanto"), true)['pokemon_entries'];
        $random_pokemon = [];

        for ($i = 1; $i < 11; $i++) {
            $id = rand(0, 150);
            $random_pokemon[$id+1] = $pokedex[$id]['pokemon_species']['name'];
        }
        
        $data = [
            'random_pokemon' => $random_pokemon,
        ];

        return view('show', $data);
    }
}
