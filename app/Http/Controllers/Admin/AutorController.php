<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class AutorController extends Controller
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
        $data['autores'] = Autor::all();
        $this->loggerData("Listou autores");
        return view('admin.autor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.autor.create.index');
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
            'nacionalidade' => 'required|string|max:255',
        ]);

        try {
            //code...

            # code...

            $autor = Autor::create([
                'nome' => $request->nome,
                'nacionalidade' => $request->nacionalidade,
            ]);
            $this->loggerData(" Cadastrou o autor  de nome " . $request->nome . ", nacionalidade $request->nacionalidade, id: " . $autor->id);
            return redirect()->back()->with('autor.create.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('autor.create.error', 1);
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
        $data["autor"] = Autor::find($id);
        return view('admin.autor.edit.index', $data);
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
            'nacionalidade' => 'required|string|max:255',
        ]);

        try {
            //code...
            $autor = Autor::find($id);

            $cat = Autor::findOrFail($id)->update([
                'nome' => $request->nome,
                'nacionalidade' => $request->nacionalidade,
            ]);
            $this->loggerData(" Editou o autor  de id, nome, nacionalidade ($autor->id, $autor->nome, $autor->nacionalidade) para ($request->nome, $request->nacionalidade)");

            return redirect()->back()->with('autor.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('autor.update.error', 1);
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
            $autor = Autor::findOrFail($id);

            Autor::findOrFail($id)->delete();
            $this->loggerData(" Eliminou o autor  de id, nome, nacionalidade ($autor->id,$autor->nome, $autor->nacionalidade)");
            return redirect()->back()->with('autor.destroy.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('autor.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            //code...
            $autor = Autor::findOrFail($id);
            Autor::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou o autor  de id, nome, nacionalidade ($autor->id,$autor->nome, $autor->nacionalidade) ");
            return redirect()->back()->with('autor.purge.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            $this->loggerDataError($th->getMessage());
            return redirect()->back()->with('autor.purge.error', 1);
        }
    }
}