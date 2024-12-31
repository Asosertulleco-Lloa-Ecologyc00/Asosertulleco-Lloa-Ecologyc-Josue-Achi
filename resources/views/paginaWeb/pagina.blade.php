@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<div class="carrusel">
  <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        @foreach($inicio as $item)
          <div class="carousel-item {{$item->class}}">
            <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" alt="{{$item->title}}">
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
      <div id="mision-vision"></div>
  </div>
</div>
<div class="mis-vis">
  <section class="mision">
      <h3>MISIÓN</h3>
      <p>{{$Mision->name}}</p>
      <img src="{{asset('imagen/'.$Mision->image)}}" alt="" width="200px" height="150px">
  </section>
  <section class="vision">
      <h3>VISIÓN</h3>
      <p>{{$Vision->name}}</p>
      <img src="{{asset('imagen/'.$Vision->image)}}" alt="">
  </section>
</div>
<hr id="servicios">
<div class="servicios">
  @foreach($servicios as $item)
  <div class="section-serv">
      <h3>{{$item->title}}</h3>
      <p>{{$item->description}}</p>
      <img src="{{'imagen/'.$item->image}}" alt="">
      <a href="{{$item->contact}}">{{$item->contact}}</a>
  </div>
  @endforeach
</div>
@endsection