<?php

namespace Database\Seeders;

use App\Models\Genere;
use App\Models\Piattaforma;
use App\Models\VideoGioco;
use Illuminate\Database\Seeder;

class VideoGiocoSeeder extends Seeder
{
    public function run(): void
    {
        $videogiochi = [
            ['titolo' => 'The Witcher 3: Wild Hunt', 'descrizione' => 'Geralt di Rivia cerca la sua figlia adottiva in un vasto mondo aperto pieno di scelte morali.', 'anno_uscita' => 2015, 'voto' => 9.8, 'generi' => ['RPG', 'Open World'], 'piattaforme' => ['PC', 'PS4', 'Xbox One', 'Nintendo Switch']],
            ['titolo' => 'God of War', 'descrizione' => 'Kratos e suo figlio Atreus affrontano i miti norreni in un viaggio intimo e brutale.', 'anno_uscita' => 2018, 'voto' => 9.7, 'generi' => ['Azione', 'Avventura'], 'piattaforme' => ['PS4', 'PC']],
            ['titolo' => 'Red Dead Redemption 2', 'descrizione' => 'L\'epopea del fuorilegge Arthur Morgan nel selvaggio West al tramonto dell\'epoca delle bande.', 'anno_uscita' => 2018, 'voto' => 9.7, 'generi' => ['Azione', 'Avventura', 'Open World'], 'piattaforme' => ['PC', 'PS4', 'Xbox One']],
            ['titolo' => 'The Legend of Zelda: Breath of the Wild', 'descrizione' => 'Link si risveglia in un regno di Hyrule libero da esplorare in ogni direzione.', 'anno_uscita' => 2017, 'voto' => 9.7, 'generi' => ['Avventura', 'Open World'], 'piattaforme' => ['Nintendo Switch']],
            ['titolo' => 'Elden Ring', 'descrizione' => 'Un Interregno in rovina da esplorare per diventare il nuovo Lord dell\'Anello ancestrale.', 'anno_uscita' => 2022, 'voto' => 9.6, 'generi' => ['RPG', 'Open World'], 'piattaforme' => ['PC', 'PS5', 'Xbox Series X']],
            ['titolo' => 'Minecraft', 'descrizione' => 'Costruisci ed esplora mondi fatti interamente di blocchi, da solo o in compagnia.', 'anno_uscita' => 2011, 'voto' => 9.0, 'generi' => ['Simulazione', 'Avventura'], 'piattaforme' => ['PC', 'PS4', 'Xbox One', 'Nintendo Switch', 'Mobile']],
            ['titolo' => 'Grand Theft Auto V', 'descrizione' => 'Tre criminali intrecciano le loro vite nella metropoli di Los Santos.', 'anno_uscita' => 2013, 'voto' => 9.5, 'generi' => ['Azione', 'Open World'], 'piattaforme' => ['PC', 'PS4', 'Xbox One']],
            ['titolo' => 'Portal 2', 'descrizione' => 'Enigmi basati sui portali spazio-temporali, con l\'aiuto (o l\'ostacolo) di GLaDOS.', 'anno_uscita' => 2011, 'voto' => 9.6, 'generi' => ['Puzzle', 'Avventura'], 'piattaforme' => ['PC']],
            ['titolo' => 'Dark Souls III', 'descrizione' => 'Un mondo cupo e spietato dove ogni combattimento richiede pazienza e precisione.', 'anno_uscita' => 2016, 'voto' => 9.2, 'generi' => ['RPG', 'Roguelike'], 'piattaforme' => ['PC', 'PS4', 'Xbox One']],
            ['titolo' => 'Hades', 'descrizione' => 'Il principe degli Inferi tenta ripetutamente di fuggire dal regno di suo padre.', 'anno_uscita' => 2020, 'voto' => 9.3, 'generi' => ['Roguelike', 'Azione', 'Indie'], 'piattaforme' => ['PC', 'PS5', 'Nintendo Switch']],
            ['titolo' => 'Stardew Valley', 'descrizione' => 'Eredita una vecchia fattoria e ricostruisci la tua vita lontano dalla città.', 'anno_uscita' => 2016, 'voto' => 9.0, 'generi' => ['Simulazione', 'Indie'], 'piattaforme' => ['PC', 'PS4', 'Nintendo Switch', 'Mobile']],
            ['titolo' => 'EA Sports FC 24', 'descrizione' => 'Il simulatore calcistico con licenze ufficiali di squadre e giocatori.', 'anno_uscita' => 2023, 'voto' => 8.5, 'generi' => ['Sport'], 'piattaforme' => ['PC', 'PS5', 'Xbox Series X']],
            ['titolo' => 'Forza Horizon 5', 'descrizione' => 'Gare su strada in un Messico ricreato in scala, tra festival e sfide.', 'anno_uscita' => 2021, 'voto' => 9.2, 'generi' => ['Racing', 'Open World'], 'piattaforme' => ['PC', 'Xbox Series X']],
            ['titolo' => 'Resident Evil Village', 'descrizione' => 'Ethan Winters cerca sua figlia in un villaggio popolato da orrori mutanti.', 'anno_uscita' => 2021, 'voto' => 8.8, 'generi' => ['Horror', 'Azione'], 'piattaforme' => ['PC', 'PS5', 'Xbox Series X']],
            ['titolo' => 'Animal Crossing: New Horizons', 'descrizione' => 'Costruisci la vita su un\'isola deserta insieme a simpatici abitanti antropomorfi.', 'anno_uscita' => 2020, 'voto' => 9.0, 'generi' => ['Simulazione'], 'piattaforme' => ['Nintendo Switch']],
            ['titolo' => 'Cyberpunk 2077', 'descrizione' => 'A Night City, un mercenario cerca un impianto capace di garantire l\'immortalità.', 'anno_uscita' => 2020, 'voto' => 8.5, 'generi' => ['RPG', 'Azione', 'Open World'], 'piattaforme' => ['PC', 'PS5', 'Xbox Series X']],
            ['titolo' => 'Hollow Knight', 'descrizione' => 'Esplora il regno sotterraneo in rovina di Hallownest nei panni di un piccolo cavaliere.', 'anno_uscita' => 2017, 'voto' => 9.4, 'generi' => ['Platform', 'Avventura', 'Indie'], 'piattaforme' => ['PC', 'Nintendo Switch']],
            ['titolo' => 'Overwatch 2', 'descrizione' => 'Sparatutto a squadre a base di eroi, ognuno con abilità uniche.', 'anno_uscita' => 2022, 'voto' => 8.0, 'generi' => ['Sparatutto'], 'piattaforme' => ['PC', 'PS5', 'Xbox Series X']],
            ['titolo' => 'Super Mario Odyssey', 'descrizione' => 'Mario attraversa regni bizzarri per salvare la Principessa Peach dalle nozze forzate.', 'anno_uscita' => 2017, 'voto' => 9.5, 'generi' => ['Platform', 'Avventura'], 'piattaforme' => ['Nintendo Switch']],
            ['titolo' => 'Persona 5 Royal', 'descrizione' => 'Studenti di Tokyo di giorno, ladri fantasma di anime corrotte di notte.', 'anno_uscita' => 2020, 'voto' => 9.6, 'generi' => ['RPG'], 'piattaforme' => ['PC', 'PS4', 'Nintendo Switch']],
        ];

        foreach ($videogiochi as $dati) {
            $generi = $dati['generi'];
            $piattaforme = $dati['piattaforme'];
            unset($dati['generi'], $dati['piattaforme']);

            $videoGioco = VideoGioco::firstOrCreate(['titolo' => $dati['titolo']], $dati);

            $videoGioco->generi()->sync(Genere::whereIn('nome', $generi)->pluck('id'));
            $videoGioco->piattaforme()->sync(Piattaforma::whereIn('nome', $piattaforme)->pluck('id'));
        }
    }
}
