<h1>Explorador {{$support->name}}</h1>

@if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error}}
        @endforeach

@endif

<p>Detalhes:</p>
<ul>Nome: {{$support->name}}</ul>
<ul>Idade: {{$support->idade}}</ul>
<ul>Latitude: {{$support->latitude}}</ul>
<ul>Longitude: {{$support->longitude}}</ul>
<ul>Inventário: {{$support->inventario}}</ul>

<form action="{{route('supports.update', $support->id)}}" method="POST">
    @csrf()
    @method('PUT')
    <p>Latitude</p>
    <input type="text" placeholder="Latitude" name='latitude' value="{{ $support->latitude}}"><br>
    <p>Longitude</p>
    <input type="text" placeholder="Longitude" name='longitude' value="{{ $support->longitude}}"><br>
    <p>inventário</p>
    <textarea name="inventario" cols="30" rows="15" placeholder="inventário">{{$support->inventario}}</textarea>
    <button type="submit">Enviar</button>
</form>
