@extends('app')
@section('title', 'Home')

@section('conteudo')
<!-- div pai  -->
<div class="container principal">
      
      <h1 class="fst-italic text-center">Categorias!!<img
          src="imagens/img04.png" width="65" alt=""> </h1>
  
      <!-- acordion  -->
      <div class="accordion accordion-flush" id="accordionFlushExample">
  
  
        <!-- acordion 1  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
              Alimentícia
            </button>
          </h2>

          @if (count($alimenticias) === 0)
          <p>Não há indicações a exibir.</p>
          @else
          <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              @foreach($alimenticias as $alimenticia)
              <!-- card  -->
              <div class="col-sm-6">
                <div class="card m-4">
                  <div class="card-body">
                    <h5 class="card-title">   </h5>
                    <p class="card-cat">{{$alimenticia->categoria}}</p>
                    <p class="card-cat">Telefone</p>
                    <p class="card-cat">{{$alimenticia->estado}} | {{$alimenticia->cidade}}</p>
                    <p class="card-text">{{$alimenticia->comentario}}</p>
                    <p class="card-user">Indicado por: Nome pessoa que indicou</p>
                     <!-- Avaliação estrelas  -->
                    <div class="row">
                      <div class="feedback col-6">
                        <div class="rating">
                          <input type="radio" name="rating" id="rating-5">
                          <label for="rating-5"></label>
                          <input type="radio" name="rating" id="rating-4">
                          <label for="rating-4"></label>
                          <input type="radio" name="rating" id="rating-3">
                          <label for="rating-3"></label>
                          <input type="radio" name="rating" id="rating-2">
                          <label for="rating-2"></label>
                          <input type="radio" name="rating" id="rating-1">
                          <label for="rating-1"></label>
                        </div>
                      </div>
                      <div class="col-6 text-end">
                        <i class="fa-solid fa-star"></i> 0 <br>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 2 <br>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 5 <br>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 8 <br>
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"> </i> 15 <br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @endif

        </div>
  
        <!-- acordion 2  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
              Cabelereiro
            </button>
          </h2>
          <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              <div class="col-sm-6">
                <div class="card m-4">
                  <div class="card-body">
                    <h5 class="card-title">Nome empresa Indicada</h5>
                    <p class="card-cat">Categoria serviço</p>
                    <p class="card-cat">Telefone</p>
                    <p class="card-cat">Cidade</p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptate rem
                      dolorum soluta praesentium consequuntur natus illo aliquid mollitia obcaecati ut animi aut,
                      illum at aliquam. Voluptas facilis libero minima.</p>
                    <p class="card-user">Indicado por: Nome pessoa que indicou</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- acordion 3  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
              Colocar de box
            </button>
          </h2>
          <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              
            </div>
          </div>
        </div>
  
        <!-- acordion 4  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
              Contador
            </button>
          </h2>
          <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->


             
            </div>
          </div>
        </div>
  
        <!-- acordion 5  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading5">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
              Designer
            </button>
          </h2>
          <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card -->
              




            </div>
          </div>
        </div>
  
        <!-- acordion 6  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading6">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
              Eletricista
            </button>
          </h2>
          <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              

            </div>
          </div>
        </div>
  
        <!-- acordion 7  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading7">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
              Escola
            </button>
          </h2>
          <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
             



            </div>
          </div>
        </div>
  
        <!-- acordion 8 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading8">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
              Limpeza de piscina 
            </button>
          </h2>
          <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              





            </div>
          </div>
        </div>
  
        <!-- acordion 9  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading9">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
              Marido de aluguel ( Faz tudo )
            </button>
          </h2>
          <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              





            </div>
          </div>
        </div>
  
        <!-- acordion 10  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading10">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
              Pedreiro
            </button>
          </h2>
          <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              




            </div>
          </div>
        </div>
  
        <!-- acordion 11  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading11">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
              Pintor
            </button>
          </h2>
          <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              


            </div>
          </div>
        </div>
  
        <!-- acordion 12  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading12">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
             Técnico de informática
            </button>
          </h2>
          <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              



            </div>
          </div>
        </div>
  
        <!-- acordion 13  -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading13">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
              Outros
            </button>
          </h2>
          <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <!-- card  -->
              





            </div>
          </div>
        </div>
  
      </div>
    </div>




    <script>
      function getEstado(uf)
      {
        var url = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' +uf;
        var estado = '';
        
        return estado;
      }

   
    </script>
    @endsection