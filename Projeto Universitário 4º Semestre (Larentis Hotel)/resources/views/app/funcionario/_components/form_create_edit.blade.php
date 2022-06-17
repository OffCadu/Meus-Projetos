@if(isset($funcionario->id))
    <form method="post" style="width: 100%" action="{{ route('funcionario.update', ['funcionario' => $funcionario->id, 'pessoa_fisica' => $pessoa_fisica->id, 'user' => $user->id, 'telefone' => $telefone->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('funcionario.store') }}">
        @csrf
@endif



    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>

    {{-- <input type="text" name="user_id" value="{{ $funcionario->pessoaFisica->user_id ?? old('user_id') }}" placeholder="ID do usuario" class="borda-preta">
    {{ $errors->has('user_id') ? $errors->first('user_id') : '' }} --}}

    {{-- <input type="text" name="pessoa_fisica_id" value="{{ $funcionario->pessoa_fisica_id ?? old('pessoa_fisica_id') }}" placeholder="ID da pessoa fisica" class="borda-preta">
    {{ $errors->has('pessoa_fisica_id') ? $errors->first('pessoa_fisica_id') : '' }} --}}

    @if(isset($funcionario->id))
        <input type="text" name="name" value="{{ $funcionario->pessoaFisica->user->name ?? old('name') }}" placeholder="Nome" class="borda-preta">
        {{ $errors->has('name') ? $errors->first('name') : '' }}

        <input type="text" name="email" value="{{ $funcionario->pessoaFisica->user->email ?? old('email') }}"  placeholder="Email" class="borda-preta">
        {{ $errors->has('email') ? $errors->first('email') : '' }}

    @endif

    <input type="text" name="cpf" value="{{ $funcionario->pessoaFisica->cpf ?? old('cpf') }}" placeholder="CPF" class="borda-preta">
    {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}

    <input type="text" name="identidade" value="{{ $funcionario->pessoaFisica->identidade ?? old('identidade') }}"  placeholder="Identidade" class="borda-preta">
    {{ $errors->has('identidade') ? $errors->first('identidade') : '' }}

    <input type="text" name="uf" value="{{ $funcionario->pessoaFisica->uf ?? old('uf') }}"  placeholder="UF" class="borda-preta">
    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

    <div style="text-align: left">Data de nascimento:</div>
    <input type="date" name="data_nascimento" value="{{ $funcionario->pessoaFisica->data_nascimento ?? old('data_nascimento') }}"  placeholder="Data de Nascimento" class="borda-preta">
    {{ $errors->has('data_nascimento') ? $errors->first('data_nascimento') : '' }}

    <input type="text" name="telefone" value="{{ $funcionario->pessoaFisica->telefone ?? old('telefone') }}"  placeholder="Telefone" class="borda-preta">
        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}

    <input type="text" name="clt" value="{{ $funcionario->clt ?? old('clt') }}" placeholder="CLT" class="borda-preta">
    {{ $errors->has('clt') ? $errors->first('clt') : '' }}

    <input type="text" name="salario" value="{{ $funcionario->salario ?? old('salario') }}"  placeholder="Salario" class="borda-preta">
    {{ $errors->has('salario') ? $errors->first('salario') : '' }}

    <input type="text" name="grau_instrucao" value="{{ $funcionario->grau_instrucao ?? old('grau_instrucao') }}"  placeholder="Grau de instrucao" class="borda-preta">
    {{ $errors->has('grau_instrucao') ? $errors->first('grau_instrucao') : '' }}

    <div style="text-align: left">Data de admissão:</div>
    <input type="date" name="data_admissao" value="{{ $funcionario->data_admissao ?? old('data_admissao') }}"  placeholder="Data de admissão" class="borda-preta">
    {{ $errors->has('data_admissao') ? $errors->first('data_admissao') : '' }}


    {{-- <input type="text" name="atendente" value="{{ $funcionario->pessoaFisica->user->atendente ?? old('atendente') }}"  placeholder="Funcionário ativo?" class="borda-preta">
    {{ $errors->has('atendente') ? $errors->first('atendente') : '' }} --}}
    {{-- <div style="text-align: left">Atendente ativo?</div>
    <select name="atendente">
            <option value="true">Sim</option>
            <option value="false">Não</option>
    </select> --}}



    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
