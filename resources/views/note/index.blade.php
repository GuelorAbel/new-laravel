@extends("note.layout")

@section("title", "Accueil")

@section("content")
    <main class="min-h-screen w-full">
        <x-box>
            <div class="prose mb-6">
                <h1 class="uppercase">la liste des notes</h1>
            </div>
            {{-- affichage des notes --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($notes as $note)
                <div class="prose">
                    <p>{{ $note->title }}</p>
                </div>
                @endforeach
            </div>
            {{-- test titre --}}
            <div class="divider divider-primary proseS">
                <h1 class="uppercase">le grand titre</h1>
            </div>
        </x-box>
    </main>
@endSection
