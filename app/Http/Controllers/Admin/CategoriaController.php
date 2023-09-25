<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
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
        $data['categorias'] = Categoria::all();
        $this->loggerData("Listou Categorias");
        return view('admin.categoria.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categoria.create.index');
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
        ]);

        try {
            //code...

            # code...

            $categoria = Categoria::create([
                'nome' => $request->nome,
            ]);
            $this->loggerData(" Cadastrou a categoria  de nome " . $request->nome . ", id: " . $categoria->id);
            return redirect()->back()->with('categoria.create.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('categoria.create.error', 1);
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
        $data["categoria"] = Categoria::find($id);
        return view('admin.categoria.edit.index', $data);
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
        ]);

        try {
            //code...
            $categoria = Categoria::find($id);

            $cat = Categoria::findOrFail($id)->update([
                'nome' => $request->nome,
            ]);
            $this->loggerData(" Editou a categoria  de id, nome ($categoria->id, $categoria->nome) para ($request->nome)");

            return redirect()->back()->with('categoria.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('categoria.update.error', 1);
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
            $categoria = Categoria::findOrFail($id);

            Categoria::findOrFail($id)->delete();
            $this->loggerData(" Eliminou a categoria  de id, nome ($categoria->id, $categoria->nome) ");
            return redirect()->back()->with('categoria.destroy.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('categoria.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            //code...
            $categoria = Categoria::findOrFail($id);
            Categoria::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou a categoria  de id, nome ($categoria->id, $categoria->nome) ");
            return redirect()->back()->with('categoria.purge.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('categoria.purge.error', 1);
        }
    }
}