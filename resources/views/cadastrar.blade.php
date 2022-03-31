@extends('app')
@section('title', 'Cadastrar indicação')

@section('conteudo')
<div class="container principal">

    <div class="col-md-8 offset-md-2">
      <h1 style="font-family: 'Times New Roman', Times, serif;">Cadastrar Indicações</h1>

      <form name="indicacao" method="POST" action="{{route('add_indicacao')}}">
        @csrf
        <!-- Nome input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="nome">Seu nome:</label>
          <input type="text" id="nome" class="form-control" name="nome" required />
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="email">Email:</label>
          <input type="email" id="email" class="form-control" name="email" required />
        </div>

        <!-- empresa indicada  -->
        <div class="form-outline mb-4">
          <label class="form-label" for="empresa-indicada">Nome Empresa(Serviço) indicado:</label>
          <input type="text" id="empresa-indicada" class="form-control" name="empresa-indicada" required />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="estado">Estado:</label>
          <select name="estado" id="estado" class="form-select">
            <option>Selecione</option>
          </select>
        </div>


        <div class="form-outline mb-4">
          <label class="form-label" for="cidade">Cidade:</label>
          <select name="cidade" id="cidade" class="form-select">
            <option>Selecione</option>
          </select>
        </div>
        

        <!-- Telefone  -->
        <div class="form-outline mb-4">
          <label class="form-label" for="telefone">Telefone:</label>
          <input type="tel" id="telefone" class="form-control" name="telefone" required />
        </div>


        <!-- Categoria  -->
        <div class="form-outline mb-4">
          <label class="form-label" for="selecao">Categoria Serviço:</label>
          <select class="form-select" id="categoria" name="categoria" aria-label="Default select example">
            <option selected>Selecione uma categoria</option>
            <option value="Alimentícia">Alimentícia</option>
            <option value="Cabelereiro">Cabelereiro</option>
            <option value="Colocador de Box">Colocador de Box</option>
            <option value="Contador">Contador</option>
            <option value="Designer">Designer</option>
            <option value="Eletricista">Eletricista</option>
            <option value="Escola">Escola</option>
            <option value="Limpeza piscina">Limpeza piscina</option>
            <option value="Marido de aluguel">Marido de aluguel</option>
            <option value="Pedreiro">Pedreiro</option>
            <option value="Pintor">Pintor</option>
            <option value="Técnico Informática">Técnico Informática</option>
            <option value="Outros">Outros</option>
          </select>
        </div>    

        <!-- indicação  input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="descricao">ÍndiK-Aqui</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="4"
            placeholder="Descreva sobre preço, qualidade, prazo, etc.." required></textarea>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-warning btn-block mb-4">Indicar</button>
        
      </form>
      </form>

    </div>
  </div>

  <script>
    (function(){
      var url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados';
      var select = document.getElementById('estado');
      
      /* Consulta a API com o método fetch e 
      com um laço de repetição incrementa as tags option */
      //1o then() captura os dados, 2o then() trata os dados, catch() tratamento do erro
      fetch(url).then(response => response.json()).then(json => {        
          var options = '<option>Selecione</option>';
          //DESAFIO: inserir abaixo desta linha um código para ordenar
          //em ordem alfabética o objeto json
          json.sort(function(a,b){
            return a.nome < b.nome ? -1 : a.nome > b.nome ? 1:0;

        })
          
          //laço de repetição
          for (let index = 0; index < json.length; index++) {
              options += '<option value="'+json[index].id+'">'+json[index].nome+'</option>';
          }
          select.innerHTML = options;
      }).catch(erro => console.log(erro));
    })();


    (function(){
      document.getElementById('estado').addEventListener('change', (event) => {
        var uf = document.getElementById('estado').value;
        var url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+uf+'/municipios';
        var select = document.getElementById('cidade');

        fetch(url).then(response => response.json()).then(json => {        
            var options = '<option>Selecione</option>';
           

            for (let index = 0; index < json.length; index++) {
                options += '<option value="'+json[index].nome+'">'+json[index].nome+'</option>';
            }
            select.innerHTML = options;
        }).catch(erro => console.log(erro));       

      });
      
    })();
  </script>



  @endsection
