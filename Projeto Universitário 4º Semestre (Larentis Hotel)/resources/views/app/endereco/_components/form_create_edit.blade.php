@if(isset($endereco->id))
    <form method="post" action="{{ route('endereco.update', ['endereco' => $endereco->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('endereco.store') }}">
        @csrf
@endif

    <input type="text" name="cidade" value="{{ $endereco->cidade ?? old('cidade') }}" placeholder="Cidade" class="borda-preta">
    {{ $errors->has('cidade') ? $errors->first('cidade') : '' }}

    <input type="text" name="rua" value="{{ $endereco->rua ?? old('rua') }}" placeholder="Rua" class="borda-preta">
    {{ $errors->has('rua') ? $errors->first('rua') : '' }}

    <input type="text" name="cep" value="{{ $endereco->cep ?? old('cep') }}"  placeholder="CEP" class="borda-preta">
    {{ $errors->has('cep') ? $errors->first('cep') : '' }}

    <input type="text" name="estado" value="{{ $endereco->estado ?? old('estado') }}"  placeholder="Estado" class="borda-preta">
    {{ $errors->has('estado') ? $errors->first('estado') : '' }}

    <input type="text" name="numero" value="{{ $endereco->numero ?? old('numero') }}"  placeholder="nº" class="borda-preta">
    {{ $errors->has('numero') ? $errors->first('numero') : '' }}

    <input type="text" name="complemento" value="{{ $endereco->estado ?? old('complemento') }}"  placeholder="Complemento" class="borda-preta">
    {{ $errors->has('complemento') ? $errors->first('complemento') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
<form>
