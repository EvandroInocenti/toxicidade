<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePaciente;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        //$pacientes = Paciente::paginate();
        $pacientes = $this->getPacientes();

        // Buscar pacientes do medico
       // $pacientes = Paciente::where("medico_id", auth()->user()->id)->paginate();

        return view('admin.pacientes.index', ['pacientes' => $pacientes]);
    }

    public function pacientesList(){
        return response()->json(['pacientes' => $this->getPacientes()]);
    }

    private function getPacientes(){
        return Paciente::all();
    }


    public function create(){
        return view('admin.pacientes.create');
    }

    public function store(StoreUpdatePaciente $request){

        Paciente::create($request->all());

        return redirect()->route('pacientes.index');
    }

    public function show($id){

        if( !$paciente = Paciente::find($id)) {
            return redirect()->route('pacientes.index');
        }

        return view('admin.pacientes.show', compact('paciente'));
    }

    public function destroy($id) {
        if(!$paciente = Paciente::find($id))
            return redirect()->route('pacientes.index');

        $paciente->delete();

        return redirect()
            ->route('pacientes.index')
            ->with('massege', 'Paciente deletado com sucesso!');
    }

    public function edit($id){

        if(!$paciente = Paciente::find($id)) {
            return redirect()->back();
        }

        return view('admin.pacientes.edit', compact('paciente'));
    }

    public function update(StoreUpdatePaciente $request, $id){

        if(!$paciente = Paciente::find($id)) {
            return redirect()->back();
        }

        $paciente->update($request->all());

        return redirect()
            ->route('pacientes.index')
            ->with('message', 'Paciente atualizado com sucesso.');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token', 'senha', 'nascimento', 'altura', 'peso', 'superficie_corporea', 'telefone');
        $pacientes = Paciente::where('nome', 'LIKE', "%{$request->search}%")
                        ->orWhere('email', 'LIKE', "%{$request->search}%")
                        ->orWhere('cpf', 'LIKE', "%{$request->search}%")
                        ->orWhere('acesso', '=', "%{$request->search}%")
                        ->paginate(20);
        return view('admin.pacientes.index', compact('pacientes'));
    }
}
