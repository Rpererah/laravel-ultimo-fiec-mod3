<x-layout title="Inserir serie">
    <div class="jumbotron">
        <h1 class="display-4">
            Inserir nova serie
        </h1>
    </div>
    <form action={{route('series.store')}} method="post">
        @csrf
        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" />
        <button class="btn btn-success mt-2" type="submit">Criar serie!</button>
    </form>
</x-layout>