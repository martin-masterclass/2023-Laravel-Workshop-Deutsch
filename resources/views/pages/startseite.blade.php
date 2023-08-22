<x-frontend-layout>

    <x-einspaltig>
        <x-slot:ueberschrift>Hauptspalte</x-slot:ueberschrift>
        <x-slot:inhalt>Hier kommt der Inhalt der Hauptspalte hin.</x-slot:inhalt>
    </x-einspaltig>

    <!-- (2/3 zu 1/3 Spaltenaufteilung) -->
    <x-zweispaltig>
        <x-slot:ueberschrift-links>2/3 Spalte</x-slot:ueberschrift-links>
        <x-slot:inhalt-links>Hier kommt der Inhalt der 2/3 Spalte hin.</x-slot:inhalt-links>
        <x-slot:ueberschrift-rechts>1/3 Spalte</x-slot:ueberschrift-rechts>
        <x-slot:inhalt-rechts>Hier kommt der Inhalt der 1/3 Spalte hin.</x-slot:inhalt-rechts>
    </x-zweispaltig>

</x-frontend-layout>
