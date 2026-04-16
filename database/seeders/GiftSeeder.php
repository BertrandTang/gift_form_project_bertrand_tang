<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gift;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gift::insert([
            [
                'name' => 'Épée de Diamant',
                'url' => 'https://frieren.fandom.com/wiki/Diamond_Sword',
                'details' => "Une épée légendaire capable de trancher n'importe quoi.",
                'price' => 999.99,
            ],
            [
                'name' => 'Fleur Éternelle',
                'url' => 'https://frieren.fandom.com/wiki/Eternal_Flower',
                'details' => "Une fleur qui ne fane jamais, symbole d’amitié éternelle.",
                'price' => 120.00,
            ],
            [
                'name' => 'Cape de l’Invisible',
                'url' => 'https://frieren.fandom.com/wiki/Cloak_of_Invisibility',
                'details' => "Permet de devenir invisible aux yeux des humains et des démons.",
                'price' => 450.50,
            ],
            [
                'name' => 'Bague de Mana',
                'url' => 'https://frieren.fandom.com/wiki/Mana_Ring',
                'details' => "Augmente la puissance magique de son porteur.",
                'price' => 300.00,
            ],
            [
                'name' => 'Grimoire de Frieren',
                'url' => 'https://frieren.fandom.com/wiki/Frieren_Grimoire',
                'details' => "Un livre de sorts rares écrit par Frieren elle-même.",
                'price' => 800.00,
            ],
        ]);
    }
}
