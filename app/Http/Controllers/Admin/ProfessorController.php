<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProfessorController extends Controller
{
    //

    public function __construct()
    {

        $this->Logger = new Logger();
    }
    public function loggerData($mensagem)
    {

        $this->Logger->Log('info', $mensagem);
    }

    public function loggerDataError($mensagem)
    {

        $this->Logger->Log('error', $mensagem);
    }
    //
    public function index()
    {
        //
        $data['professores'] = Professor::all();
        $this->loggerData("Listou professores");
        return view('admin.professor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.professor.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $request->validate([
            'primeiro_nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'endereco' => 'string|max:255',
            'bi' => 'string|max:14',
        ]);

        try {
            //code...

            # code...

            $professor = Professor::create([
                'primeiro_nome' => $request->primeiro_nome,
                'sobrenome' => $request->sobrenome,
                'telefone' => $request->telefone,
                'endereco' => $request->endereco,
                'bi' => $request->bi,
            ]);
            $this->loggerData(" Cadastrou o professor  de nome " . $request->primeiro_nome . ", sobrenome $request->sobrenome, telefone $request->telefone, Endereço $request->endereco, BI $request->bi, id: " . $professor->id);
            return redirect()->back()->with('professor.create.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('professor.create.error', 1);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data["professor"] = Professor::find($id);
        return view('admin.professor.edit.index', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        //dd($request);
        $request->validate([
            'primeiro_nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'endereco' => 'string|max:255',
            'bi' => 'string|max:14',
        ]);

        try {
            //code...
            $professor = Professor::find($id);

            $cat = Professor::findOrFail($id)->update([
                'primeiro_nome' => $request->primeiro_nome,
                'sobrenome' => $request->sobrenome,
                'telefone' => $request->telefone,
                'endereco' => $request->endereco,
                'bi' => $request->bi,
            ]);
            $this->loggerData(" Editou o professor  de id, nome, sobrenome, telefone, endereço, BI ($professor->id, $professor->primeiro_nome, $professor->sobrenome, $professor->telefone, $professor->endereco, $professor->bi) para ($request->primeiro_nome, $request->sobrenome, $request->telefone, $request->endereco, $request->bi)");

            return redirect()->back()->with('professor.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('professor.update.error', 1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            //code...
            $professor = Professor::findOrFail($id);

            Professor::findOrFail($id)->delete();
            $this->loggerData(" Eliminou o professor  de id, nome, sobrenome, telefone, endereço, BI ($professor->id,$professor->primeiro_nome, $professor->sobrenome, $professor->telefone, $professor->endereco, $professor->bi)");
            return redirect()->back()->with('professor.destroy.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('professor.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            //code...
            $professor = Professor::findOrFail($id);
            Professor::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou o professor  de id, nome, sobrenome, telefone, endereço, BI ($professor->id,$professor->primeiro_nome, $professor->sobrenome, $professor->telefone, $professor->endereco, $professor->bi) ");
            return redirect()->back()->with('professor.purge.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('professor.purge.error', 1);
        }
    }
}