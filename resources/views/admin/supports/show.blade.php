<h1>Detalhes do explorador {{$support->id}}</h1>

<ul>
    <li>nome: {{$support->name}}</li>
    <li>idade: {{$support->idade}}</li>
    <li>Longitude: {{$support->longitude}}</li>
    <li>Latitude: {{$support->latitude}}</li>
    <li>Inventário: {{$support->inventario}}</li>

</ul>

<a href="{{ route('itens.show', $support->id) }}">Mostrar inventário</a>
<br>
<a href="{{ route('itens.create', $support->id) }}">Adicionar novo item ao inventario</a>


<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>
