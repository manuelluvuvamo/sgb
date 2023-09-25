<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Logs;
use App\Models\LogProfessor;
use Illuminate\Support\Facades\DB;

class Logger extends Model
{
    public function log($level,$descricao)
    {

        if(Auth::user())
        {
           Logs::create([
                'id_user' => Auth::user()->id,
                'desc' => $descricao,
                'level' => $level,
                'endereco' => $_SERVER['REMOTE_ADDR'],
                'dispositivo' =>  $_SERVER['HTTP_USER_AGENT'],
            ]);
            $descricao = Auth::user()->name.'-'.$descricao;

        }
        else{
            $descricao = 'erro'.'-'.$descricao;
        }


    Log::channel('logUser')->$level($descricao);

    }
    
    public  function LogsForSearch($datatime, $user)
    {
    //$datatime=null;
    //$user=null;
        $response['logs'] =DB::table('logs')
        ->join('users', 'logs.id_user', '=', 'users.id')
        ->select('logs.*','users.name');
        if($datatime !="null")
            $response['logs']->whereYear('logs.created_at', '=', $datatime);
        
        if($user !="null")
            $response['logs']->where([['users.name', '=', $user]]);
        
        
          return  $response['logs']->get();
        }
}
