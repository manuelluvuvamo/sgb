<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Editora;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class EditoraController extends Controller
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
    //
    public function index()
    {
        //
        $data['editoras'] = Editora::all();
        $this->loggerData("Listou editoras");
        return view('admin.editora.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.editora.create.index');
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
            'nome' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'codigo' => 'string|max:255',
        ]);

        try {
            //code...

            # code...

            $editora = Editora::create([
                'nome' => $request->nome,
                'pais' => $request->pais,
                'codigo' => $request->codigo,
            ]);
            $this->loggerData(" Cadastrou a editora  de nome " . $request->nome . ", país $request->pais, código $request->codigo, id: " . $editora->id);
            return redirect()->back()->with('editora.create.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('editora.create.error', 1);
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
        $data["editora"] = Editora::find($id);
        return view('admin.editora.edit.index', $data);
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
            'nome' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'codigo' => 'string|max:255',
        ]);

        try {
            //code...
            $editora = Editora::find($id);

            $cat = Editora::findOrFail($id)->update([
                'nome' => $request->nome,
                'pais' => $request->pais,
                'codigo' => $request->codigo,
            ]);
            $this->loggerData(" Editou a editora  de id, nome, pais, código ($editora->id, $editora->nome, $editora->pais, $editora->codigo) para ($request->nome, $request->pais, $request->pais)");

            return redirect()->back()->with('editora.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('editora.update.error', 1);
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
            $editora = Editora::findOrFail($id);

            Editora::findOrFail($id)->delete();
            $this->loggerData(" Eliminou a editora  de id, nome, pais, código ($editora->id,$editora->nome, $editora->pais, $editora->codigo)");
            return redirect()->back()->with('editora.destroy.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('editora.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            //code...
            $editora = Editora::findOrFail($id);
            Editora::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou a editora  de id, nome, pais, código ($editora->id,$editora->nome, $editora->pais, $editora->codigo) ");
            return redirect()->back()->with('editora.purge.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('editora.purge.error', 1);
        }
    }
}