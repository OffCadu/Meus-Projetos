@if(isset($pessoa_fisica->id))
    <div class="booking-form">    
        <form method="post" action="{{ route('pessoa_fisica.update', ['pessoa_fisica' => $pessoa_fisica->id]) }}">
            @csrf
            @method('PUT')
@else
    <div class="booking-form">
        <form method="post" action="{{ route('pessoa_fisica.store') }}">
            @csrf
@endif

        <div class="form-header">
            <h2>Faça já seu cadastro para reservar conosco!</h2>
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div style="text-align: left">
                    <span class="form-label">userid</span>
                    </div>
                    <input class="form-control" type="text" id="user_id" name="user_id" value="{{ old('user_id')}}">
                    {{ $errors->has('user_id') ? $errors->first('user_id') : '' }}
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div style="text-align: left">
                    <span class="form-label">cpf</span>
                    </div>
                    <input class="form-control" type="text" id="cpf" name="cpf" value="{{ old('cpf')}}">
                    {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div style="text-align: left">
                    <span class="form-label">RG:</span>
                    </div>
                    <input class="form-control" type="text" id="identidade" name="identidade" value="{{ old('identidade')}}">
                    {{ $errors->has('identidade') ? $errors->first('identidade') : '' }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div style="text-align: left">
                    <span class="form-label">UF:</span>
                    </div>
                    <input class="form-control" type="text" id="uf" name="uf" value="{{ old('uf')}}">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div style="text-align: left">
                    <span class="form-label">Data de Nascimento:</span>
                    </div>
                    <input class="form-control" type="date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento')}}">
                    {{ $errors->has('data_nascimento') ? $errors->first('data_nascimento') : '' }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div style="text-align: left">
                    <span class="form-label">Telefone:</span>
                </div>
                    <input class="form-control" type="text" id="telefone" name="telefone" value="{{ old('telefone')}}">
                    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                </div>
            </div>
        </div>
        {{-- <div class="form-group" >
            <label style="text-align: left"><b>RG:</b>
            <input class="form-control" type="text" name="identidade" value="{{ $pessoa_fisica->identidade ?? old('identidade') }}"  placeholder="RG" class="borda-preta">
            {{ $errors->has('identidade') ? $errors->first('identidade') : '' }}
            </label>
        </div>
        <div class="form-group" >
            <label style="text-align: left"><b>UF:</b>
            <input class="form-control" type="text" name="uf" value="{{ $pessoa_fisica->uf ?? old('uf') }}"  placeholder="UF" class="borda-preta">
            {{ $errors->has('uf') ? $errors->first('uf') : '' }}
            </label>
        </div>
        <div class="form-group" >
            <label style="text-align: left"><b>Data de Nascimento:</b>
            <input class="form-control" type="date" name="data_nascimento" value="{{ $pessoa_fisica->data_nascimento ?? old('data_nascimento') }}"  placeholder="Data de Nascimento" class="borda-preta">
            {{ $errors->has('data_nascimento') ? $errors->first('data_nascimento') : '' }}
            </label>
        </div>
        <div class="form-group" >
            <label style="text-align: left"><b>Telefone:</b>
            <input class="form-control" type="text" name="telefone" value="{{ $pessoa_fisica->telefone->telefone ?? old('telefone') }}"  placeholder="Telefone" class="borda-preta">
            {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
            </label>
        </div> --}}


        <button type="submit" class="borda-preta">Cadastrar</button>
    </div>

<form>
