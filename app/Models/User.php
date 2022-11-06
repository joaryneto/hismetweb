<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use stdClass;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sistema',
        'name',
        'cpf',
        'email',
        'username',
        'numero_telefone',
        'igreja_classe_id',
        'isVerified',
        'password',
        'password_temporario',
        'permissao',
        'foto',
        'isVerified'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public static function usuarioAutenticado()
    {
        return session()->get('usuario');
    }

    public static function GetClientes(){

        $dados = [];

        $empresas = DB::connection('medicina')
        ->select('SELECT razao,logoppra FROM empresas where logoppra != 1 limit 24');

        foreach($empresas as $p){

            $dados[] = [
                'razao' => $p->razao,
                'logoppra' => base64_encode($p->logoppra)
            ];
        }
        
        return json_decode(json_encode((object) $dados), FALSE);

    }
}
