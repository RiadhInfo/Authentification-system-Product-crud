@extends('adminlte::page')

@section('title', 'Ajouter utilisateur')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter utilisateur</h1>
@stop

@section('content')
    <form action="{{route('users.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputName">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nom utilisateur" name="name" value="{{old('name')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail">Adress mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Adresse mail" name="email" value="{{old('email')}}">
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Mot de passe</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Mot de passe" name="password">
                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Confirmer mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Confirmer mot de passe" name="password_confirmation">
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <a href="{{route('users.index')}}" class="btn btn-default">
                        Annuler
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop