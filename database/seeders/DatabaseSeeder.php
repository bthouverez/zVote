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
            'password' => '$2y$10$uj2W4oYIVfJ83SfP6O3uvOho4FJnyR2/g4YBN1r54LNGNroaTcIAW'
        ]);


        Votant::insert([
            ['nom' => 'Aimo-boot', 'prenom' => 'Benjamin'],
            ['nom' => 'ALIMI', 'prenom' => 'Gilbert'],
            ['nom' => 'ARNAUD', 'prenom' => 'Philippe'],
            ['nom' => 'AUCOURT', 'prenom' => 'Bastien'],
            ['nom' => 'AUMONIER', 'prenom' => 'Benjamin'],
            ['nom' => 'BARONNIER', 'prenom' => 'Sylvie'],
            ['nom' => 'BATTIN', 'prenom' => 'Roger'],
            ['nom' => 'BAYLE', 'prenom' => 'Philippe'],
            ['nom' => 'BAYLE', 'prenom' => 'Stéphane'],
            ['nom' => 'BAYLE-DIDIER', 'prenom' => 'Valérie'],
            ['nom' => 'BEGUET', 'prenom' => 'Marie-Jeanne'],
            ['nom' => 'BELLE', 'prenom' => 'Anaël'],
            ['nom' => 'BERARD', 'prenom' => 'Morgan'],
            ['nom' => 'BERTHET', 'prenom' => 'Sylvain'],
            ['nom' => 'BESNIER', 'prenom' => 'Jean-Jacques'],
            ['nom' => 'BONNIEL', 'prenom' => 'Julien'],
            ['nom' => 'BOTTICELLI', 'prenom' => 'Antonio'],
            ['nom' => 'BOTTICELLI', 'prenom' => 'Lorenzo'],
            ['nom' => 'BOURICAND', 'prenom' => 'Jérémy'],
            ['nom' => 'BRAGOUSE', 'prenom' => 'Christophe'],
            ['nom' => 'BRULAS', 'prenom' => 'Pierrick'],
            ['nom' => 'CANO', 'prenom' => 'Denis'],
            ['nom' => 'CAPY', 'prenom' => 'Sylvain'],
            ['nom' => 'CATALA', 'prenom' => 'Thibault'],
            ['nom' => 'CHAFFANJON', 'prenom' => 'Alain'],
            ['nom' => 'CHAFFANJON', 'prenom' => 'Arnaud'],
            ['nom' => 'CHAFFANJON', 'prenom' => 'Jérémy'],
            ['nom' => 'CHAFFANJON', 'prenom' => 'Martine'],
            ['nom' => 'CHAREYRON', 'prenom' => 'Cécile'],
            ['nom' => 'CHORIER', 'prenom' => 'Roger'],
            ['nom' => 'CICCIARELLA', 'prenom' => 'Stéphane'],
            ['nom' => 'CLAUDEL', 'prenom' => 'Mickael'],
            ['nom' => 'CLAUDIN', 'prenom' => 'Christian'],
            ['nom' => 'CLAUDIN', 'prenom' => 'Romain'],
            ['nom' => 'COMBROUX', 'prenom' => 'Stéphane'],
            ['nom' => 'CORNARA', 'prenom' => 'Kévin'],
            ['nom' => 'CREMET', 'prenom' => 'Gilles'],
            ['nom' => 'DART', 'prenom' => 'Benjamin'],
            ['nom' => 'DAUGAS', 'prenom' => 'Marine'],
            ['nom' => 'DI LITTA', 'prenom' => 'Fabrice'],
            ['nom' => 'DI STEFANO', 'prenom' => 'Stéphane'],
            ['nom' => 'DIDIER', 'prenom' => 'Vincent'],
            ['nom' => 'DIDIER', 'prenom' => 'Gregory'],
            ['nom' => 'DUBOIS', 'prenom' => 'Guillaume'],
            ['nom' => 'DUBOST', 'prenom' => 'Annick'],
            ['nom' => 'EMONET', 'prenom' => 'Patricia'],
            ['nom' => 'ESPOSITO', 'prenom' => 'Patricia'],
            ['nom' => 'FARGEOT', 'prenom' => 'Marcel'],
            ['nom' => 'FERREOL', 'prenom' => 'Julien'],
            ['nom' => 'FLOS', 'prenom' => 'Jean-Philippe'],
            ['nom' => 'FLOS', 'prenom' => 'Raphaëlle'],
            ['nom' => 'GONZALEZ NAVARRO', 'prenom' => 'Consuelo'],
            ['nom' => 'GROLLEAU', 'prenom' => 'Alexis'],
            ['nom' => 'Guerdener', 'prenom' => 'Joey'],
            ['nom' => 'GUERTAULT', 'prenom' => 'Jean-Marie'],
            ['nom' => 'GUERY', 'prenom' => 'Audrey'],
            ['nom' => 'GUERY', 'prenom' => 'Valentin'],
            ['nom' => 'GUERY', 'prenom' => 'Nathanaël'],
            ['nom' => 'HERNANDEZ', 'prenom' => 'Audrey'],
            ['nom' => 'HERNANDEZ', 'prenom' => 'Alexandre'],
            ['nom' => 'HERNANDEZ', 'prenom' => 'Kylian'],
            ['nom' => 'IMBERDIS', 'prenom' => 'Frédéric'],
            ['nom' => 'JOUASSIN', 'prenom' => 'Thomas'],
            ['nom' => 'KEUSSEYAN', 'prenom' => 'Michel'],
            ['nom' => 'LABRANCHE', 'prenom' => 'Gilles'],
            ['nom' => 'LAGOUTTE', 'prenom' => 'Sandrine'],
            ['nom' => 'LAGOUTTE', 'prenom' => 'Olivier'],
            ['nom' => 'LARDET', 'prenom' => 'Serge'],
            ['nom' => 'LIÉVOIS', 'prenom' => 'Dylan'],
            ['nom' => 'LOMBARD', 'prenom' => 'Thomas'],
            ['nom' => 'MARQUETOUX', 'prenom' => 'Catherine'],
            ['nom' => 'MATRISCIANO', 'prenom' => 'Vincent'],
            ['nom' => 'Michelas', 'prenom' => 'Joe'],
            ['nom' => 'MORATO', 'prenom' => 'Jean-Christophe'],
            ['nom' => 'Morel', 'prenom' => 'Jérôme'],
            ['nom' => 'NICOT', 'prenom' => 'Yoan'],
            ['nom' => 'PAINVIN', 'prenom' => 'Stéphane'],
            ['nom' => 'PAUMIER', 'prenom' => 'Vincent'],
            ['nom' => 'PENIN', 'prenom' => 'Pierre-Marie'],
            ['nom' => 'PEROCHE-VELLA', 'prenom' => 'Nicole'],
            ['nom' => 'PORRETTI', 'prenom' => 'Gérard'],
            ['nom' => 'QUENTIN', 'prenom' => 'Cécile'],
            ['nom' => 'RADISSON', 'prenom' => 'Magali'],
            ['nom' => 'ROSELLO', 'prenom' => 'Quentin'],
            ['nom' => 'ROSELLO', 'prenom' => 'Laura'],
            ['nom' => 'ROSELLO', 'prenom' => 'Marcel'],
            ['nom' => 'ROUSSET', 'prenom' => 'Gilles'],
            ['nom' => 'RUIZ', 'prenom' => 'Francisco'],
            ['nom' => 'SADOT', 'prenom' => 'Laurent'],
            ['nom' => 'SAINT-CYR', 'prenom' => 'Sébastien'],
            ['nom' => 'SAINT-FELIX', 'prenom' => 'Damien'],
            ['nom' => 'SALLIER', 'prenom' => 'Carla'],
            ['nom' => 'SALOT', 'prenom' => 'Sébastien'],
            ['nom' => 'SCOURTELLIS', 'prenom' => 'Denis'],
            ['nom' => 'SÉON', 'prenom' => 'Séverine'],
            ['nom' => 'SILVA PETES', 'prenom' => 'Edgar'],
            ['nom' => 'SUAREZ', 'prenom' => 'Lilian'],
            ['nom' => 'SUAREZ', 'prenom' => 'Éric'],
            ['nom' => 'THEVENARD', 'prenom' => 'Christophe'],
            ['nom' => 'THÉVENOT', 'prenom' => 'Éric'],
            ['nom' => 'THOUVEREZ', 'prenom' => 'Bastien'],
            ['nom' => 'THOUVEREZ', 'prenom' => 'Marion'],
            ['nom' => 'TISSOT', 'prenom' => 'Maxime'],
            ['nom' => 'TUA', 'prenom' => 'Thierry'],
            ['nom' => 'VALLENTIN', 'prenom' => 'Sébastien'],
            ['nom' => 'VERZI', 'prenom' => 'Anthony'],
            ['nom' => 'Vidal', 'prenom' => 'Christophe'],
            ['nom' => 'VIEIRA', 'prenom' => 'Joaquim'],
            ['nom' => 'VILLALBA', 'prenom' => 'Cécile'],
            ['nom' => 'VOUSTAD', 'prenom' => 'Yanice'],
            ['nom' => 'WAGNER', 'prenom' => 'Rick'],
        ]);
    }
}
