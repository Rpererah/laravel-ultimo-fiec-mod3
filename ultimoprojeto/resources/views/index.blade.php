<x-layout title="Ver Series">
<ul>
    @foreach ($series as $serie)
        <li>{{$serie->nome}}</li>
    @endforeach
</ul>
<a href={{route('series.create')}}>Ir para criar series</a>
</x-layout>