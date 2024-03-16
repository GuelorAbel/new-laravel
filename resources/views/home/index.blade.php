@extends("home.layout")

@section("title", "Accueil")

@section("content")
    <main class="min-h-screen w-full">
        <x-box>
            <h1 class="uppercase">la liste des notes</h1>
            {{-- affichage des notes --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($notes as $note)
                <div class="">
                    <h3>{{ $note->title }}</h3>
                </div>
                @endforeach
            </div>
            <div class="">
                {{ $notes->links() }}
            </div>
        </x-box>
    </main>
@endSection
