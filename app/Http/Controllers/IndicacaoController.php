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
        $alimenticias = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Alimentícia')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $cabelereiros = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Cabelereiro')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $colocador_de_boxs = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Colocador_de_box')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $contadores = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Contador')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $designers = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Designer')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $eletricistas = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Eletricista')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $escolas = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Escola')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $limpeza_piscinas = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Limpeza_piscina')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $marido_alugueis = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Marido_aluguel')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $pedreiros = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Pedreiro')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);
        
        $pintores = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Pintor')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $tecnicos_informatica = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Técnico_informática')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

        $outros = Indicacao::join('clientes', 'clientes.id', '=','indicacaos.id_cliente')
        ->join('fornecedors', 'fornecedors.id', '=','indicacaos.id_fornecedor')->where('categoria', 'Outro')->get(['indicacaos.*', 'fornecedors.telefone','fornecedors.empresa_indicada','clientes.nome']);

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
