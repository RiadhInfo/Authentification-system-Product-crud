@extends('adminlte::page')

@section('title', 'Ajouter produit')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter produit</h1>
@stop

@section('content')
    <form action="{{route('products.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputName">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nom du produit" name="name" value="{{old('name')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputWidth">Largeur</label>
                        <input type="numeric" class="form-control @error('width') is-invalid @enderror" id="exampleInputWidth" placeholder="Largeur du bois" name="width" value="{{old('width')}}">
                        @error('width') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputHeight">Hauteur</label>
                        <input type="numeric" class="form-control @error('height') is-invalid @enderror" id="exampleInputHeight" placeholder="Hauteur du bois" name="height"  value="{{old('height')}}">
                        @error('height') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Type</label>
                        <input type="text" class="form-control" id="exampleInputType" placeholder="Type du bois" name="type" value="{{old('type')}}">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="{{route('products.index')}}" class="btn btn-default">
                        Annuler
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop