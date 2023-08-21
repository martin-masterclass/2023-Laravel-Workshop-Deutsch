<x-frontend-layout>

    <!-- Hauptspalte (ganze Breite) -->
    <section class="p-4">
        <article class="bg-white p-4 rounded shadow-md">
            <h2 class="text-xl font-bold mb-4">Hauptspalte</h2>
            <p>Hier kommt der Inhalt der Hauptspalte hin.</p>
        </article>
    </section>

    <!-- (1/3 zu 2/3 Spaltenaufteilung) -->
    <section class="flex p-4">
        <aside class="w-2/3 bg-white p-4 rounded shadow-md mr-4">
            <h2 class="text-xl font-bold mb-4">2/3 Spalte</h2>
            <p>Hier kommt der Inhalt der 2/3 Spalte hin.</p>
        </aside>
        <article class="w-1/3 bg-white p-4 rounded shadow-md">
            <h2 class="text-xl font-bold mb-4">1/3 Spalte</h2>
            <p>Hier kommt der Inhalt der 1/3 Spalte hin.</p>
        </article>
    </section>

</x-frontend-layout>
