<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alunos;

class AlunosController extends Controller
{
    private $objAlunos;
    
    public function __construct(){
        $this->objAlunos=new Aluno();
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $alunos=$this->objAlunos->all();
        return view('dashboard', 'alunos');
    }

    public function __invoke(Request $request)
    {

    }
}
