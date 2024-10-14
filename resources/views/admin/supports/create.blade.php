<h1>Novo explorador</h1>

@if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error}}
        @endforeach

@endif


<form action="{{route('supports.store')}}" method="POST">
    <input type="hidden" value="{{ csrf_token() }}">
    @csrf()
    <input type="text" placeholder="Nome" name='name' value="{{old('name')}}">
    <input type="text" placeholder="Idade" name='idade' value="{{old('idade')}}">
    <textarea name="latitude" cols="30" rows="15" placeholder="Latitude">{{old('latitude')}}</textarea>
    <textarea name="longitude" cols="30" rows="15" placeholder="Longitude">{{old('longitude')}}</textarea>
    <button type="submit">Enviar</button>
</form>
