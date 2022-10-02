<form name="frmDelete" action="{{ route('item.destroy', $item->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do item?');">


    @csrf
    @method('DELETE')
    <br>
    <a style=' color:white;' href="{{route('pedidos.edit', $item->id)}}"> <input class="btn btn-secondary" type="button" value="Editar"></a>
    <a style=' color:white;' href="{{route('pedidos.index')}}"> <input class="btn btn-secondary" type="button" value="Voltar"></a>

    <input class='btn btn-danger' type="submit" value="Excluir">


</form>