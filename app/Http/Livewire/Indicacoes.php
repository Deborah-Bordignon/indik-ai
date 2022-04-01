<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Fornecedor;
use App\Models\Indicacao;
use Livewire\WithPagination;


class Indicacoes extends Component
{
    public function render()
    {
        return view('livewire.indicacoes');
    }

    public function select_create()
    {
        //Instancia a tabela Indicacao e Fornecedor
        $indicacao = new Indicacao;
        $fornecedor = new Fornecedor;

        $fornecedor = Fornecedor::where('telefone', $request->telefone)->get();

        if(count($fornecedor) == 0)
        {
            echo 'Fornecedor Não existe';
        }else{
            echo 'Fornecedor existe';
        }

        // $indicacao->
        // $indicacao->
        // $indicacao->

        // $indicacao->save();
        // return redirect('/');

    }


}
