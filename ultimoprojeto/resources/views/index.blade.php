<x-layout title="Ver Series">
    <div class="jumbotron">
        <h1 class="display-4">Minhas series</h1>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">nome</th>
            <th scope="col">ações</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($series as $serie)
    <tr>
        <th scope="row">{{$serie->nome}}</th>
        <td class="d-flex gap-2">
            <a class="btn btn-info" href={{route('series.edit',$serie->id)}}>
                Atualizar
            </a>
            <form action={{route('series.destroy',$serie->id)}} method="post">
                @csrf
                @method('DELETE')
             <button class="btn btn-danger">
                Deletar
            </button>   
            </form>
            
        </td>
    </tr>
    @endforeach
        </tbody>
        </table>
<a class="btn btn-primary" href={{route('series.create')}}>Ir para criar series</a>
</x-layout>