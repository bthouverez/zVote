<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Scrutin;
use App\Models\Votant;
use App\Models\VotantScrutin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Bat',
             'email' => 'bthouverez@bthouverez.fr',
             'password'=> '$2y$10$uj2W4oYIVfJ83SfP6O3uvOho4FJnyR2/g4YBN1r54LNGNroaTcIAW'
         ]);

//        $s = new Scrutin();
//        $s->libelle = 'Election du président';
//        $s->date = '2022-09-02';
//        $s->save();

        $v = new Votant();
        $v->nom = 'ALIMI';
        $v->prenom = 'Gilbert';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'ARNAUD';
        $v->prenom = 'Philippe';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BARONNIER';
        $v->prenom = 'Sylvie';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BATTIN';
        $v->prenom = 'Roger';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BAYLE';
        $v->prenom = 'Philippe';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->candidat = true;
        //$vs->nb_votes = 0;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BAYLE';
        $v->prenom = 'Stéphane';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BAYLE-DIDIER';
        $v->prenom = 'Valérie';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BEGUET';
        $v->prenom = 'Marie-Jeanne';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BOTTICELLI';
        $v->prenom = 'Antonio';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BOTTICELLI';
        $v->prenom = 'Lorenzo';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'BESNIER';
        $v->prenom = 'Jean-Jacques';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CHAFFANJON';
        $v->prenom = 'Alain';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->candidat = true;
        //$vs->nb_votes = 0;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CHAFFANJON';
        $v->prenom = 'Arnaud';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CHAFFANJON';
        $v->prenom = 'Jérémy';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CHAREYRON';
        $v->prenom = 'Cécile';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CHORIER';
        $v->prenom = 'Roger';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CLAUDEL';
        $v->prenom = 'Mickael';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CLAUDIN';
        $v->prenom = 'Christian';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CLAUDIN';
        $v->prenom = 'Romain';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'CREMET';
        $v->prenom = 'Gilles';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'DAUGAS';
        $v->prenom = 'Marine';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'DI LITTA';
        $v->prenom = 'Fabrice';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'DIDIER';
        $v->prenom = 'Vincent';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'DUBOST';
        $v->prenom = 'Annick';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'FARGEOT';
        $v->prenom = 'Marcel';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'FERREOL';
        $v->prenom = 'Julien';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'FLOS';
        $v->prenom = 'Jean-Philippe';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->candidat = true;
        //$vs->nb_votes = 0;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'FLOS';
        $v->prenom = 'Raphaëlle';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'GROLLEAU';
        $v->prenom = 'Alexis';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'GUERTAULT';
        $v->prenom = 'Jean-Marie';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'LOMBARD';
        $v->prenom = 'Thomas';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->candidat = true;
        //$vs->nb_votes = 0;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'PAUMIER';
        $v->prenom = 'Vincent';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'PORETTI';
        $v->prenom = 'Gérard';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'RADISSON';
        $v->prenom = 'Magali';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'ROUSSET';
        $v->prenom = 'Gilles';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'RUIZ';
        $v->prenom = 'Francisco';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'SADOT';
        $v->prenom = 'Laurent';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'SAINT-CYR';
        $v->prenom = 'Sébastien';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'SÉON';
        $v->prenom = 'Séverine';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'THEVENARD';
        $v->prenom = 'Christophe';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'THOUVEREZ';
        $v->prenom = 'Bastien';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->candidat = true;
        //$vs->nb_votes = 0;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'TISSOT';
        $v->prenom = 'Maxime';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'VERZI';
        $v->prenom = 'Anthony';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();

        $v = new Votant();
        $v->nom = 'VIEIRA';
        $v->prenom = 'Joaquim';
        $v->save();

        //$vs = new VotantScrutin();
        //$vs->scrutin_id = 1;
        //$vs->votant_id = $v->id;
        //$vs->save();
    }
}
