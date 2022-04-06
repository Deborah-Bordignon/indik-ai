<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Indicacao;
use App\Models\Cliente;
use Illuminate\Http\Request;

class IndicacaoController extends Controller
{
    public function select_create(Request $request)
    {
        //Instancia a tabela Indicacao e Fornecedor
        $indicacao = new Indicacao;
        $fornecedor = new Fornecedor;
        $cliente = new Cliente;

        $consulta_fornecedor = Fornecedor::where('telefone', $request->telefone)->get();
        $consulta_cliente = Cliente::where('email', $request->email)->get();

       
        if(count($consulta_fornecedor) == 0)
        {
            $fornecedor->telefone = $request-> telefone;
            $fornecedor->empresa_indicada = $request-> empresa_indicada;
            $fornecedor->save(); 
            $fornecedor_id = $fornecedor->id;           
        }else
        {
            $fornecedor_id = $consulta_fornecedor->first()->id;
        }
        
        if(count($consulta_cliente) == 0)
        {
            $cliente->email = $request-> email;
            $cliente->nome = $request-> nome;
            $cliente->save();   
            $cliente_id = $cliente->id;         
        }else
        {
            $cliente_id = $consulta_cliente->first()->id;
        }


            $indicacao->id_cliente = $cliente_id;
            $indicacao->id_fornecedor = $fornecedor_id;
            $indicacao->comentario = $request-> comentario;
            $indicacao->categoria = $request-> categoria;
            $indicacao->cidade = $request-> cidade;
            $indicacao->estado = $request-> estado;
            $indicacao->save();

            return redirect('/');

    }

    public function show_categorias()
    {
        $alimenticias = Indicacao::where('categoria', 'Alimentícia')->get();
        $cabelereiros = Indicacao::where('categoria', 'Cabelereiro')->get();
        $colocador_de_boxs = Indicacao::where('categoria', 'Colocador_de_box')->get();
        $contadores = Indicacao::where('categoria', 'Contador')->get();
        $designers = Indicacao::where('categoria', 'Designer')->get();
        $eletricistas = Indicacao::where('categoria', 'Eletricista')->get();
        $escolas = Indicacao::where('categoria', 'Escola')->get();
        $limpeza_piscinas = Indicacao::where('categoria', 'Limpeza_piscina')->get();
        $marido_alugueis = Indicacao::where('categoria', 'Marido_aluguel')->get();
        $pedreiros = Indicacao::where('categoria', 'Pedreiro')->get();
        $pintores = Indicacao::where('categoria', 'Pintor')->get();
        $tecnicos_informatica = Indicacao::where('categoria', 'Técnico_informática')->get();
        $outros = Indicacao::where('categoria', 'Outro')->get();

       $parametros = [
        'alimenticias' => $alimenticias, 
        'cabelereiros' => $cabelereiros,
        'colocador_de_boxs' => $colocador_de_boxs, 
        'contadores' => $contadores,
        'designers' => $designers, 
        'eletricistas' => $eletricistas,
        'escolas' => $escolas, 
        'limpeza_piscinas' => $limpeza_piscinas,
        'marido_alugueis' => $marido_alugueis,
        'pedreiros' => $pedreiros, 
        'pintores' => $pintores,
        'tecnicos_informatica' => $tecnicos_informatica,
        'outros' => $outros
       ];

       return view('indicacoes', $parametros); 
    }
}
