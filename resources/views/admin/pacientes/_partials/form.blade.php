@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="text" name="nome" id="nome" placeholder="Nome" value={{ $paciente->nome ?? old('nome') }}>
<input type="email" name="email" id="email" placeholder="E-mail" value={{ $paciente->email ?? old('email') }}>
<input type="text" name="cpf" id="cpf" placeholder="CPF" value={{ $paciente->cpf ?? old('cpf') }}>
<input type="password" name="senha" id="senha" placeholder="Senha" value={{ $paciente->senha ?? old('senha') }}>
<input type="text" name="telefone" id="telefone" placeholder="Telefone" value={{ $paciente->telefone ?? old('telefone') }}>
<input type="date" name="nascimento" id="nascimento" placeholder="Data de nascimento" value={{ $paciente->nascimento ?? old('nascimento') }}>
<input type="text" name="altura" id="altura" placeholder="Altura" value={{ $paciente->altura ?? old('altura') }}>
<input type="text" name="peso" id="peso" placeholder="Peso" value={{ $paciente->peso ?? old('peso') }}>
<input type="text" name="superficie_corporea" id="superficie_corporea" placeholder="Superfície corporea" value={{ $paciente->superficie_corporea ?? old('superficie_corporea') }}>
<input type="text" name="acesso" id="acesso" placeholder="Acesso" value={{ $paciente->acesso ?? old('acesso') }}>
<button type="submit">Salvar</button>