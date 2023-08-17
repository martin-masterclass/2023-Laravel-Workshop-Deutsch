<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            ['question' => 'Wie kann ich meine Bestellung verfolgen?', 'answer' => 'Nachdem Ihre Bestellung versandt wurde, erhalten Sie eine E-Mail mit einer Sendungsverfolgungsnummer.'],
            ['question' => 'Wie lange dauert der Versand?', 'answer' => 'Der Standardversand dauert in der Regel 3-5 Werktage.'],
            ['question' => 'Kann ich Artikel zurückgeben?', 'answer' => 'Ja, Sie haben 30 Tage Zeit, um ungetragene Artikel zurückzugeben.'],
            ['question' => 'Bietet ihr Größenberatung an?', 'answer' => 'Ja, auf unserer Website finden Sie eine Größentabelle für alle Produkte.'],
            ['question' => 'Wie pflege ich meine Sportbekleidung richtig?', 'answer' => 'Bitte beachten Sie das Pflegeetikett auf jedem Produkt.'],
            ['question' => 'Bietet ihr Mengenrabatte an?', 'answer' => 'Ja, bei Bestellungen über 10 Artikeln bieten wir Mengenrabatte an.'],
            ['question' => 'Kann ich meine Bestellung ändern?', 'answer' => 'Ja, solange Ihre Bestellung noch nicht versandt wurde, können Sie Änderungen vornehmen.'],
            ['question' => 'Verkauft ihr Geschenkkarten?', 'answer' => 'Ja, wir bieten Geschenkkarten in verschiedenen Beträgen an.'],
            ['question' => 'Wie kann ich einen Gutschein einlösen?', 'answer' => 'Geben Sie den Gutscheincode im Warenkorb in das dafür vorgesehene Feld ein.'],
            ['question' => 'Wo ist mein Paket?', 'answer' => 'Verwenden Sie die Sendungsverfolgungsnummer, die Sie per E-Mail erhalten haben, um den Status Ihrer Bestellung zu überprüfen.'],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
