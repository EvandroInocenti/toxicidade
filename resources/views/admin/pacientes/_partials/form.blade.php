@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<form>
    <div class="grid xl:grid-cols-2 xl:gap-6">
        <div class="relative z-0 mb-6 w-full group">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome</label>
            <input placeholder="Seu nome" type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->nome ?? old('nome') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CPF</label>
            <input  type="text" name="cpf" id="cpf" placeholder="CPF" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->cpf ?? old('cpf') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
            <input placeholder="seu@email.com.br" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->email ?? old('email') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Senha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->senha ?? old('senha') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="telefone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefone</label>
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->telefone ?? old('telefone') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Data de Nascimento</label>
            <input type="date" name="nascimento" id="nascimento" placeholder="Data de nascimento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->nascimento ?? old('nascimento') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="altura" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Altura</label>
            <input type="text" name="altura" id="altura" placeholder="Altura" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->altura ?? old('altura') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="peso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Peso</label>
            <input type="text" name="peso" id="peso" placeholder="Peso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->peso ?? old('peso') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="superficie_corporea" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Superfície Corporea</label>
            <input type="text" name="superficie_corporea" id="superficie_corporea" placeholder="Superfície Corporea" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->superficie_corporea ?? old('superficie_corporea') }}>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="acesso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Acesso</label>
            <input type="text" name="acesso" id="acesso" placeholder="Acesso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value={{ $paciente->acesso ?? old('superficie_corporea') }}>

           <!-- <label for="acesso" class="block flex relative items-center cursor-pointer text-sm font-medium text-gray-900 dark:text-gray-300">
                <input id="acesso" class="sr-only" type="checkbox">
                <div class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg dark:bg-gray-700 dark:border-gray-600"></div>
                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Acesso</span>
                </div>
            </label> -->
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <button type="submit" class="text-white bg-blue-800 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
        </div>
    </div>
</form>
