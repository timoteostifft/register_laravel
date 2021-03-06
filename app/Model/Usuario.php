<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use DB;

class Usuario extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limite){
        $sql = self::where("id",">",2)
        ->select([
            "id",
            "nome",
            "email",
            "data_cadastro"
        ])
        ->limit($limite);

        return $sql;
    }

    public static function cadastrar(Request $reques){
        // DB::enableQueryLog();
        
        return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($reques->input('senha')),
            "data_cadastro" => new Carbon(),
        ]);

        // dd(DB::getQueryLog());
    }
}
