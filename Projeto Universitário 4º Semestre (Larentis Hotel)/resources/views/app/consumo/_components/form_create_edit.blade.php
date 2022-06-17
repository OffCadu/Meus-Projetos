@if(isset($consumo->id))
    <form method="post" action="{{ route('consumo.update', ['consumo' => $consumo->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('consumo.store') }}">
        @csrf
@endif

    <input type="text" name="produto_quantidade" value="{{ $consumo->produto_quantidade ?? old('produto_quantidade') }}" placeholder="Quantidade do produto" class="borda-preta">
    {{ $errors->has('produto_quantidade') ? $errors->first('produto_quantidade') : '' }}

    <input type="text" name="data_consumo" value="{{ $consumo->data_consumo ?? old('data_consumo') }}"  placeholder="Data do consumo" class="borda-preta">
    {{ $errors->has('data_consumo') ? $errors->first('data_consumo') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
<form>
