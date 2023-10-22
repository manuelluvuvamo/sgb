<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Rules\IsValidPassword;
use App\Models\User;
use App\Models\Logger;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

    public function __construct()
    {

        $this->Logger = new Logger();
    }
    public function loggerData($mensagem)
    {

        $this->Logger->Log('info', $mensagem);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['users'] = User::get();

    if (Auth::user()->perfil != "Administrador"){

        $data['users'] = User::where('users.id',Auth::user()->id)
        ->get();

    }


        $this->loggerData("Listou utilizadores");
        return view('admin.user.index', $data);
    }

    public function loggerDataError($mensagem)
    {

        $this->Logger->Log('error', $mensagem);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.user.create.index');
    }
    public function perfil(){
        $id=Auth::user()->id;
        $data["user"] = User::where('users.id', $id)->get()->first();
        $data['edit'] = true;
        return view('admin.user.perfil.index',$data);
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
            'name' => 'required|string|max:255|unique:users',
            // 'genero' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'perfil' => 'required|string|max:255',
            'password' => [
                'required', Rules\Password::defaults(),
                'confirmed',
            ],
        ], [
                'password.confirmed' => 'A confirmação da senha não corresponde.',
                'password.required' => 'A senha é um campo obrigatório.',
                'password.min' => 'A Senha deve ter no mínimo 8 caracteres',
                'name.unique' => 'O nome de usuário que introduziu já está em uso!',
                'email.unique' => 'O Email que introduziu já está em uso!',
            ]);

        try {
            //code...


            if ($request->hasFile('profile_photo_path') && $request->file('profile_photo_path')->isValid()) {

                $upload = $this->upload_img($request);


                $user = User::create([
                    'name' => $request->name,
                    'primeiro_nome' => $request->primeiro_nome,
                    'sobrenome' => $request->sobrenome,
                    // 'genero' => $request->genero,
                    'email' => $request->email,
                    'perfil' => $request->perfil,
                    'telefone' => $request->telefone,
                    'profile_photo_path' => $upload,
                    'password' => Hash::make($request->password),

                ]);
                $this->loggerData(" Cadastrou o utilizador " . $request->name . ", id: " . $user->id);
                return redirect()->back()->with('user.create.success', 1);

            } else {
                # code...




                $user = User::create([
                    'name' => $request->name,
                    'primeiro_nome' => $request->primeiro_nome,
                    'sobrenome' => $request->sobrenome,
                    // 'genero' => $request->genero,
                    'email' => $request->email,
                    'perfil' => $request->perfil,
                    'telefone' => $request->telefone,
                    'password' => Hash::make($request->password),

                ]);

                $this->loggerData(" Cadastrou o utilizador " . $request->name . ", id: " . $user->id);
                return redirect()->back()->with('user.create.success', 1);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('user.create.error', 1);
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
        $data["user"] = User::where('users.id', $id)->get()->first();
        $data['edit'] = true;


        return view('admin.user.edit.index', $data);
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

        $u = User::find($id);
        $username = User::where('name', $request->name)->where('id', '!=', $id)->get();
        //dd($username);
        if ($username->count() > 0) {
            # code...
            $validator = $request->validate([
                'name' => ['required', 'string', 'max:255', 'unique:users'],
            ], [
                    'name.unique' => 'O nome de usuário enviado já pertence à alguém',

                ]);
        }
        $useremail = User::where('email', $request->email)->where('id', '!=', $id)->get();
        if ($useremail->count() > 0) {
            # code...
            $validator = $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ], [
                    'email.unique' => 'O email enviado já pertence à alguém',

                ]);
        }




        if (isset($request->password)) {
            # code...
            $request->validate([

                'password' => [
                    'required', Rules\Password::defaults(),
                    'confirmed',

                ],
            ], [

                    'password.confirmed' => 'A confirmação da senha não corresponde.',
                    'password.required' => 'A senha é um campo obrigatório.',
                    'password.min' => 'A Senha deve ter no mínimo 8 caracteres',
                ]);


        }



        $request->validate([
            'name' => 'required|string|max:255',
            // 'genero' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'perfil' => 'required|string|max:255',

        ]);

        // dd($request);

        try {
            //code...
            $user = User::find($id);
            if ($request->hasFile('profile_photo_path') && $request->file('profile_photo_path')->isValid()) {

                $upload = $this->upload_img($request);

                if (isset($user->profile_photo_path)) {
                    # code...
                    $path = public_path($user->profile_photo_path);

                    if (is_dir($path)) {
                        # code...
                        unlink($path);
                    }
                }




                $user = User::findOrFail($id)->update([
                    'name' => $request->name,
                    'primeiro_nome' => $request->primeiro_nome,
                    'sobrenome' => $request->sobrenome,
                    // 'genero' => $request->genero,
                    'email' => $request->email,
                    'perfil' => $request->perfil,
                    'telefone' => $request->telefone,
                    'profile_photo_path' => $upload,

                ]);


                $this->loggerData(" Editou o utilizador  de id, nome, gênero, email, nível, telefone ($u->id, $u->name, $u->genero, $u->email, $u->perfil, $u->telefone) para ($request->name, $request->genero, $request->email, $request->perfil, $request->telefone)");

                if (isset($request->password)) {

                    $user = User::findOrFail($id);

                    if (Hash::check($request->currentPassword, $user->password)) {
                        # code...
                        $usr = User::findOrFail($id)->update([
                            'password' => Hash::make($request->password),

                        ]);

                        /*  Auth::login($user); */

                        $this->loggerData(" Alterou a sua senha.");
                        /* return redirect()->back()->with('user.update.pass.success',1); */
                    } elseif (Auth::user()->perfil == "Administrador") {
                        # code...
                        $usr = User::findOrFail($id)->update([
                            'password' => Hash::make($request->password),

                        ]);

                        /*  Auth::login($user); */

                        $this->loggerData(" Alterou a sua senha.");
                    } else {
                        return redirect()->back()->with('user.update.pass.error', 1);
                    }



                }

                return redirect()->back()->with('user.update.success', 1);

            } else {
                # code...




                $user = User::findOrFail($id)->update([
                    'name' => $request->name,
                    'primeiro_nome' => $request->primeiro_nome,
                    'sobrenome' => $request->sobrenome,
                    // 'genero' => $request->genero,
                    'email' => $request->email,
                    'perfil' => $request->perfil,
                    'telefone' => $request->telefone,


                ]);
                $this->loggerData(" Editou o utilizador  de id, nome, gênero, email, nível, telefone ($u->id, $u->name, $u->gen, $u->email, $u->perfil, $u->telefone) para ($request->name, $request->gen, $request->email, $request->perfil, $request->telefone)");
                if (isset($request->password)) {

                    $user = User::findOrFail($id);

                    if (Hash::check($request->currentPassword, $user->password)) {
                        # code...
                        $usr = User::findOrFail($id)->update([
                            'password' => Hash::make($request->password),

                        ]);

                        /*  Auth::login($user); */

                        $this->loggerData(" Alterou a sua senha.");
                        /* return redirect()->back()->with('user.update.pass.success',1); */
                    } elseif (Auth::user()->perfil == "Administrador") {
                        # code...
                        $usr = User::findOrFail($id)->update([
                            'password' => Hash::make($request->password),

                        ]);

                        /*  Auth::login($user); */

                        $this->loggerData(" Alterou a sua senha.");
                    } else {
                        return redirect()->back()->with('user.update.pass.error', 1);
                    }



                }
                return redirect()->back()->with('user.update.success', 1);
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('user.update.error', 1);
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
            $user = User::findOrFail($id);
            if (isset($user->profile_photo_path) && is_dir($user->profile_photo_path)) {
                # code...
                unlink($user->profile_photo_path);
            }

            User::findOrFail($id)->delete();
            $this->loggerData(" Eliminou o utilizador  de id, nome, gênero, email, nível, telefone ($user->id, $user->name, $user->genero, $user->email, $user->perfil, $user->telefone)");
            return redirect()->back()->with('user.destroy.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('user.destroy.error', 1);
        }
    }

    public function purge($id)
    {
        //
        try {
            //code...
            $user = User::findOrFail($id);
            if (isset($user->profile_photo_path)) {
                # code...
                $path = public_path($user->profile_photo_path);
                unlink($path);
            }

            User::findOrFail($id)->forceDelete();
            $this->loggerData(" Purgou o utilizador  de id, nome, gênero, email, nível, telefone ($user->id, $user->name, $user->genero, $user->email, $user->perfil, $user->telefone)");
            return redirect()->back()->with('user.purge.success', 1);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('user.purge.error', 1);
        }
    }




    public function upload_img(Request $request)
    {

        # code...
        $name = uniqid(date('HisYmd'));
        $image = $request->file('profile_photo_path');
        // Recupera a extensão do arquivo
        $extension = $request->profile_photo_path->extension();
        $nameFile = "{$name}.{$extension}";
        $destinationPath = public_path('/images/user');
        $image->move($destinationPath, $nameFile);
        $upload = '/images/user/' . $nameFile;

        // Verifica se NÃO deu certo o upload ( Redireciona de volta )
        if (!$upload) {
            return redirect()
                ->back()
                ->with('error', 'Falha ao fazer upload')
                ->withInput();
        } else {

            return $upload;

        }
    }

}
