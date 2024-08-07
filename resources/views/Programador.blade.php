@extends('layouts.app')

@section('content')


<style lang="scss" scoped>
.list-group-item{
  position: relative;
  &:hover{
    background-color: #efffef;
    .botones{
      opacity: 1;
    }
  }
  .botones{
    position: absolute;
    right: 10px;
    bottom: 10px;
    opacity: 0;
    transition: .5s;

  }
}
</style>

<div class="container">

  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif

  <div class="row">
    <div class="col-md-4 mb-4">

      <div class="card">
        <div class="card-header">Mis roles asignados</div>
          <div class="card-body p-2">
            @foreach(Auth::user()->roles as $rol)
              <span class="badge badge-primary"><i class="fa fa-check"></i> {{ $rol->name }}</span>
            @endforeach
          </div><!-- /.card-body -->
        </div><!-- /.card -->

      </div><!-- /.col -->
    </div><!-- /.row -->

   <template>
 <div>
<div class="row">
      <div class="col-md-4 mb-2">
        <div class="card">
          <div class="card-header">

<div class="container">
<div class=" mx-auto my-12 p-8 bg-white w-1/3 border border-gray-300
rounded-lg shadow-lg">

<h1 class="text-4x4 text-center font-bold">Formulario</h1>

<form class="mt-4" method="POST" action="" enctype="multipart/form-data">
@csrf

<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Introduzca nombre del video:"
id="nombre" name="nombre">

<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Seleccion la categoria:"
id="categoria" name="categoria">

<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Seleccione la subcategoria:"
id="subcategoria" name="subcategoria">

<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Seleccione Framework:"
id="framework" name="framework">

<input type="file" accept="image/*" value="Subir imagen" class="border border-gray-200 rounded-md bg-gray-200 w-full
text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Foto"
id="foto" name="foto">

<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Introduzca enlace o link:"
id="enlace" name="enlace">
 

 <button class="btn btn-outline-primary" type="submit">Agregar</button>
 
           

</form>
</div>

</div><!-- /.container -->
</div><!-- /.container -->

</div>

</div><!-- /.container -->
</div>

<h1>SLIDER - CARRUSEL DE registros</h1>

@if ($registros->count())
<div class="container-fluid">
  <div class="row">

      @foreach ($registros as $registro)  
        <div class="post-slide">
          <div class="post-img">
          <img src="{{asset($registro->foto )}}" class="img-fluid" width="200px">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">{{ $registro->titulo }}</a>
            </h3>
            <p class="post-description">
              @if (strlen($registro->descripcion) >160)
              {{ substr ( $registro->descripcion, 0, 160) }} ...
              @else
              {{ $registro->descripcion }}
              @endif 
            </p>
            <p>
                @for ($i = 1; $i <=$registro->puntos; $i++)
                  <i class="zmdi zmdi-star zmdi-hc-lg" style="color: #f5c518"></i>
                @endfor

                @for ($a = 1; $a <= (10 - $registro->puntos); $a++)
                  <i class="zmdi zmdi-star-outline zmdi-hc-lg"></i> 
                @endfor
            </p>
            <span class="post-date"><i class="fa fa-clock-o"></i>
              {{ $registro->year }}
            </span>
            <a href="#" class="read-more">Ver registro</a>
          </div>
        </div>
      @endforeach
      
  </div>
</div>
<script src="js/transform.js"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(function() {
    $("#news-slider").owlCarousel({
        items :4,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[580,2],
        itemsMobile : [400,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});
        </script>
@else
  <h2>No hay registros</h2>        
@endif




   

@endsection
 