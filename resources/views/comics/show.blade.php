@extends('layouts.plantilla')

@section('title', '')
    
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid text-white">
        <a class="navbar-brand" href="index">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>
            Marvel Comics
        </a>

    </div>
</nav>
    <div class="bg-white text-white">
        <div class="container bg-dark">
            <div class="row  ">
                <p hidden>
                    {{$fecha = substr($objeto->dates[0]->date, 0, 10);}}
                </p>
                <div class="col col-lg-6" style="padding-left: 200px">
                    <img src="https://picsum.photos/id/237/200/300" alt="....">
                </div>
                <div class="col col-lg-6">
                    <h1>{{$objeto->title}}</h1>
                    <p>
                        Volumen: #  <br><br>
                        {{$fecha}}  <br> <br>
                        {{$objeto->pageCount}} páginas

                    </p>
                </div>
            </div>
            <br>
            <div class="row" style="padding-left:190px">
                <p>Sumary</p>
                <p>bevuberbrvueirveuibvbeuvuie 1331</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum laboriosam distinctio sapiente, consequatur placeat quaerat natus velit quidem deleniti cumque unde consectetur perspiciatis labore aliquid excepturi voluptatem neque. Similique, amet.
                </p>
            </div>
            <div class="d-fljustify-content-lg-end" style="padding-left:190px">
                <p>Personajes</p>
                <div class="row row-cols-auto">
                    <div class="col">
                        <img src="https://picsum.photos/id/237/200/300" alt="...." class="rounded-circle" height="150" width="150">

                    </div>
                    <div class="col">
                        <img src="https://picsum.photos/id/237/200/300" alt="...." class="rounded-circle" height="150" width="150">

                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection