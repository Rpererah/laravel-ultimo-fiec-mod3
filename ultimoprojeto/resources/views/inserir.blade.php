<x-layout title="Inserir serie">
    <form action={{route('series.store')}} method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" />
        <button type="submit">Criar serie!</button>
    </form>
</x-layout>