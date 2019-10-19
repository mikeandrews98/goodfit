<?php

namespace App\Http\Controllers;

use Auth;
use App\Candidato;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagaController extends Controller
{
    public function paginaVagas(){
        $usuario = Auth::user();
        $candidato = DB::table('tbCandidato')->where('codUsuario', $usuario->codUsuario)->first();

        $vagas = DB::table('tbVaga')
            ->selectRaw(
                'COUNT(tbAdicionalCurriculo.codAdicional) AS Habilidades',
                'tbVaga.codVaga',
                'tbVaga.descricaoVaga',
                'tbVaga.salarioVaga',
                'tbVaga.cargaHorariaVaga',
                'tbVaga.quantidadeVaga',
                'tbEmpresa.nomeFantasiaEmpresa',
                'tbProfissao.nomeProfissao',
                'tbEndereco.cepEndereco',
                'tbEndereco.logradouroEndereco',
                'tbEndereco.complementoEndereco',
                'tbEndereco.numeroEndereco',
                'tbEndereco.bairroEndereco',
                'tbEndereco.zonaEndereco',
                'tbEndereco.cidadeEndereco',
                'tbEndereco.estadoEndereco',
                'tbRegimeContratacao.nomeRegimeContratacao'
            )
            ->join(
                'tbEmpresa',
                'tbVaga.codEmpresa', '=', 'tbEmpresa.codEmpresa')
            ->join(
                'tbProfissao',
                'tbVaga.codProfissao', '=', 'tbProfissao.codProfissao')
            ->join(
                'tbEndereco',
                'tbVaga.codEndereco', '=', 'tbEndereco.codEndereco')
            ->join(
                'tbRegimeContratacao',
                'tbVaga.codRegimeContratacao', '=', 'tbRegimeContratacao.codRegimeContratacao')
            ->join(
                'tbRequisitoVaga',
                'tbVaga.codVaga', '=', 'tbRequisitoVaga.codVaga')
            ->join(
                'tbAdicionalCurriculo',
                'tbRequisitoVaga.codAdicional', '=', 'tbAdicionalCurriculo.codAdicional')
            ->join(
                'tbCategoria',
                'tbProfissao.codCategoria', '=', 'tbCategoria.codCategoria')
            ->join(
                'tbCargoCurriculo',
                'tbCategoria.codCategoria', '=', 'tbCargoCurriculo.codCategoria')
            ->whereNotIn('tbVaga.codVaga', function($query3){
              $query3 = DB::table('tbVaga')
                  ->select('tbVaga.codVaga')
                  ->join(
                      'tbRequisitoVaga',
                      'tbVaga.codVaga ', '=', 'tbRequisitoVaga.codVaga')
                  ->whereNotIn('tbRequisitoVaga.codAdicional', function($query2){
                    $query2 = DB::table('tbAdicionalCurriculo')
                        ->select('tbAdicionalCurriculo.codAdicional')
                        ->where('tbAdicionalCurriculo.codCurriculo', '=', 2)
                        ->where('tbRequisitoVaga.obrigatoriedadeRequisitoVaga' = 1)
                        ->whereIn('tbVaga.codVaga', function($query1){
                          DB::table('tbVaga')
                          ->select('tbVaga.codVaga')
                          ->join(
                              'tbRequisitoVaga',
                              'tbRequisitoVaga.codVaga', '=', 'tbRequisitoVaga.codVaga')
                          ->join(
                              'tbAdicionalCurriculo',
                              'tbRequisitoVaga.codAdicional', '=', 'tbAdicionalCurriculo.codAdicional')
                          ->where('tbVaga.quantidadeVaga', '>', 0)
                        })
                  })

            })
            ->orderBy('tbVaga.codVaga', 'ASC')
            ->orderBy('Habilidades', 'DESC')
            ->get();

        foreach ($vagas as $vaga){
            $requisitos = DB::table('tbRequisitoVaga')
                ->select(
                    'tbRequisitoVaga.obrigatoriedadeRequisitoVaga',
                    'tbAdicional.imagemAdicional',
                    'tbAdicional.nomeAdicional'
                )
                ->join('tbAdicional', 'tbRequisitoVaga.codAdicional',  '=', 'tbAdicional.codAdicional')
                ->where('tbRequisitoVaga.codVaga', '=', $vaga->codVaga)
                ->orderBy('tbAdicional.nomeAdicional', 'ASC')
                ->get();

            $vaga->requisitos = $requisitos;
        }

        foreach ($vagas as $vaga){
            $beneficios = DB::table('tbBeneficio')
                ->select('tbBeneficio.nomeBeneficio')
                ->where('tbBeneficio.codVaga', '=', $vaga->codVaga)
                ->orderBy('tbBeneficio.nomeBeneficio', 'ASC')
                ->get();
            $vaga->beneficios = $beneficios;
        }

        $dados = [
            'vagas'     => $vagas,
            'candidato' => $candidato
        ];

        return view('vagas', $dados)->with('usuario', $usuario);
    }
}
