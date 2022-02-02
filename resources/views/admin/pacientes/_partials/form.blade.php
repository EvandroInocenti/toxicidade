@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<div class="grid grid-cols-2 gap-4">
    <form>
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Nome</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Seu nome" type="text" name="nome" id="nome" value={{ $paciente->nome ?? old('nome') }}>
            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                Informe seu nome.
            </p>
        </label>
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">CPF</span>
            <input class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="text" name="cpf" id="cpf" placeholder="CPF" value={{ $paciente->cpf ?? old('cpf') }}>
        </label>
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Email</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="seu@email.com.br" type="email" name="email" id="email" value={{ $paciente->email ?? old('email') }}>
            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                Email inválido.
            </p>
        </label>
        
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Senha</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="password" name="senha" id="senha" placeholder="Senha" value={{ $paciente->senha ?? old('senha') }}>
            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
                Senha.
            </p>   
        </label>
        
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Telefone</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="text" name="telefone" id="telefone" placeholder="Telefone" value={{ $paciente->telefone ?? old('telefone') }}>
            <p class="mt-2 invisible peer-invalid:invisible text-pink-600 text-sm"> 
                Telefone
            </p>
        </label>
        
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Data de nascimento</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="date" name="nascimento" id="nascimento" placeholder="Data de nascimento" value={{ $paciente->nascimento ?? old('nascimento') }}>
            <p class="mt-2 invisible peer-invalid:invisible text-pink-600 text-sm"> 
                Data de nascimento
            </p>
        </label>
            
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Altura</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="text" name="altura" id="altura" placeholder="Altura" value={{ $paciente->altura ?? old('altura') }}>
            <p class="mt-2 invisible peer-invalid:invisible text-pink-600 text-sm"> 
                Altura
            </p>
        </label>
        
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Peso</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="text" name="peso" id="peso" placeholder="Peso" value={{ $paciente->peso ?? old('peso') }}>
            <p class="mt-2 invisible peer-invalid:invisible text-pink-600 text-sm"> 
                Peso
            </p>
        </label>
        
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Superfície corpórea</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="text" name="superficie_corporea" id="superficie_corporea" placeholder="Superfície corporea" value={{ $paciente->superficie_corporea ?? old('superficie_corporea') }}>
            <p class="mt-2 invisible peer-invalid:invisible text-pink-600 text-sm"> 
                Superfície corpórea
            </p>
         </label>
        
        <label class="block">
            <span class="block text-sm font-medium text-slate-700">Acesso</span>
            <input class="peer mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" type="text" name="acesso" id="acesso" placeholder="Acesso" value={{ $paciente->acesso ?? old('acesso') }}>
            <p class="mt-2 invisible peer-invalid:invisible text-pink-600 text-sm"> 
                Acesso
            </p>
        </label>
        <button class="bg-sky-600 hover:bg-sky-700 rounded-lg h-8 w-32 text-white" type="submit">Salvar</button>
    </form>
</div>