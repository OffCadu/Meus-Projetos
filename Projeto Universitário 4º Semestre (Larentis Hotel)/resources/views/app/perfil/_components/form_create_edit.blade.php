@if(isset($pessoa_fisica->id))
    <form method="post" action="{{ route('pessoa_fisica.update', ['pessoa_fisica' => $pessoa_fisica->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('pessoa_fisica.store') }}">
        @csrf
@endif

    <input type="text" name="pessoa_fisica_id" value="{{ $pessoa_fisica->user_id ?? old('pessoa_fisica_id') }}" placeholder="ID do pessoa_fisica" class="borda-preta">
    {{ $errors->has('pessoa_fisica_id') ? $errors->first('pessoa_fisica_id') : '' }}

    @if(isset($pessoa_fisica->id))
        <input type="text" name="nome" value="{{ $pessoa_fisica->user->name ?? old('name') }}" placeholder="Nome" class="borda-preta">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}

        <input type="text" name="identidade" value="{{ $pessoa_fisica->user->email ?? old('email') }}"  placeholder="Email" class="borda-preta">
        {{ $errors->has('email') ? $errors->first('email') : '' }}

    @endif

    <input type="text" name="cpf" value="{{ $pessoa_fisica->cpf ?? old('cpf') }}" placeholder="CPF" class="borda-preta">
    {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}

    <input type="text" name="identidade" value="{{ $pessoa_fisica->identidade ?? old('identidade') }}"  placeholder="Identidade" class="borda-preta">
    {{ $errors->has('identidade') ? $errors->first('identidade') : '' }}

    <input type="text" name="uf" value="{{ $pessoa_fisica->uf ?? old('uf') }}"  placeholder="UF" class="borda-preta">
    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

    <input type="text" name="telefone" value="{{ $pessoa_fisica->user->telefone->telefone ?? old('telefone') }}"  placeholder="Telefone" class="borda-preta">
        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
<form>

