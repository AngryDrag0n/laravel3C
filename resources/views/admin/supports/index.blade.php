<h1>Listagem dos exploradores</h1>
<a href="{{ route('supports.create')}}">Adicionar explorador</a>
<table>
<thead>
<th>Nome</th>
<th>idade</th>
<th>Longitude</th>
<th>Latitude</th>
<th></th>
</thead>
<tbody>
    @foreach($supports as $support)
    <tr>
        <td>{{ $support['name'] }}</td>
        <td>{{ $support['idade'] }}</td>
        <td>{{ $support['latitude'] }}</td>
        <td>{{ $support['longitude'] }}</td>
        <td>
            <a href="{{ route('supports.show', $support['id']) }}">ir</a>
            <a href="{{ route('supports.edit', $support['id']) }}">Editar</a>
        </td>
        <td>
            <form action="{{ route('supports.destroy', $support['id']) }}" method="post">
                @csrf()
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>
        </td>
    </tr>
@endforeach
</tbody>
</table>
