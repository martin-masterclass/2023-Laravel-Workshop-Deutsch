<?php

namespace Database\Seeders;

use App\Models\Navigation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Erste Ebene
        $level1_1 = Navigation::create(['title' => 'Herren', 'href' => '/herren']);
        $level1_2 = Navigation::create(['title' => 'Damen', 'href' => '/damen']);
        $level1_3 = Navigation::create(['title' => 'Kinder', 'href' => '/kinder']);
        $level1_4 = Navigation::create(['title' => 'Sale', 'href' => '/sale']);

        // Zweite Ebene für Herren
        $level2_1 = Navigation::create(['parent_id' => $level1_1->id, 'title' => 'Schuhe', 'href' => '/herren/schuhe']);
        $level2_2 = Navigation::create(['parent_id' => $level1_1->id, 'title' => 'Bekleidung', 'href' => '/herren/bekleidung']);
        $level2_3 = Navigation::create(['parent_id' => $level1_1->id, 'title' => 'Accessoires', 'href' => '/herren/accessoires']);

        // Zweite Ebene für Damen
        $level2_4 = Navigation::create(['parent_id' => $level1_2->id, 'title' => 'Schuhe', 'href' => '/damen/schuhe']);
        $level2_5 = Navigation::create(['parent_id' => $level1_2->id, 'title' => 'Bekleidung', 'href' => '/damen/bekleidung']);
        $level2_6 = Navigation::create(['parent_id' => $level1_2->id, 'title' => 'Accessoires', 'href' => '/damen/accessoires']);

        // Dritte Ebene für Herren Schuhe
        $level3_1 = Navigation::create(['parent_id' => $level2_1->id, 'title' => 'Laufschuhe', 'href' => '/herren/schuhe/laufschuhe']);
        $level3_2 = Navigation::create(['parent_id' => $level2_1->id, 'title' => 'Fußballschuhe', 'href' => '/herren/schuhe/fussballschuhe']);
        $level3_3 = Navigation::create(['parent_id' => $level2_1->id, 'title' => 'Sneakers', 'href' => '/herren/schuhe/sneakers']);

        // Dritte Ebene für Damen Schuhe
        $level3_4 = Navigation::create(['parent_id' => $level2_4->id, 'title' => 'Laufschuhe', 'href' => '/damen/schuhe/laufschuhe']);
        $level3_5 = Navigation::create(['parent_id' => $level2_4->id, 'title' => 'Yoga Schuhe', 'href' => '/damen/schuhe/yoga']);
        $level3_6 = Navigation::create(['parent_id' => $level2_4->id, 'title' => 'Sneakers', 'href' => '/damen/schuhe/sneakers']);

        // Vierte Ebene für Herren Laufschuhe
        Navigation::create(['parent_id' => $level3_1->id, 'title' => 'Trail', 'href' => '/herren/schuhe/laufschuhe/trail']);
        Navigation::create(['parent_id' => $level3_1->id, 'title' => 'Straße', 'href' => '/herren/schuhe/laufschuhe/strasse']);
        Navigation::create(['parent_id' => $level3_1->id, 'title' => 'Crossfit', 'href' => '/herren/schuhe/laufschuhe/crossfit']);

        // Vierte Ebene für Damen Laufschuhe
        Navigation::create(['parent_id' => $level3_4->id, 'title' => 'Trail', 'href' => '/damen/schuhe/laufschuhe/trail']);
        Navigation::create(['parent_id' => $level3_4->id, 'title' => 'Straße', 'href' => '/damen/schuhe/laufschuhe/strasse']);
        Navigation::create(['parent_id' => $level3_4->id, 'title' => 'Crossfit', 'href' => '/damen/schuhe/laufschuhe/crossfit']);

        // Weitere Einträge für die Demonstration
        Navigation::create(['parent_id' => $level2_2->id, 'title' => 'Hosen', 'href' => '/herren/bekleidung/hosen']);
        Navigation::create(['parent_id' => $level2_2->id, 'title' => 'Shirts', 'href' => '/herren/bekleidung/shirts']);
        Navigation::create(['parent_id' => $level2_5->id, 'title' => 'Hosen', 'href' => '/damen/bekleidung/hosen']);
        Navigation::create(['parent_id' => $level2_5->id, 'title' => 'Shirts', 'href' => '/damen/bekleidung/shirts']);

    }
}
