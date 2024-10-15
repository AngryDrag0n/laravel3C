<h1>Adicione um novo item no inventário</h1>


<form action="{{ route('itens.store', $explorer->id) }}" method="POST">

    @csrf()
        <p>Nome</p> <input type="text" placeholder="Ex: corda" name="nome" value="{{ old('nome') }}">
        <p>Valor</p><input type="number" placeholder="Ex: 2,00" name="valor" value="{{ old('valor') }}">
        <p>Latitude</p><input type="number" placeholder="Ex: 123456" name="latitude" value="{{ old('latitude') }}">
        <p>Longitude</p><input type="number" placeholder="Ex: 654321" name="longitude" value="{{ old('longitude') }}">
        <br>
        <br>
        <button type="submit">Enviar novo item</button>
</form>
