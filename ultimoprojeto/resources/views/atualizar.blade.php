<x-layout title="atualizando serie">
    <div class="jumbotron">
        <h1 class="display-4">Atualizando a serie {{$series->nome}}</h1>
    </div>
    <form action={{route('series.update',$series->id)}} method="post">
        @csrf
        @method('PATCH')
        <label class="form-label" for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value={{$series->nome}} />
        <button class="btn btn-info mt-2" type="submit">Atualizar serie!</button>
    </form>
</x-layout>