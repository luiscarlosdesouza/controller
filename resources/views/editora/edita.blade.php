@extends('layouts.master')

@section('title', 'Edita Editora')

@section('page-header-content', 'Edição da editora')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/editoras">
            <span class="glyphicon glyphicon-th-list"></span> Editoras
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/editoras/{{$editora->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('patch')}}
        <div class="form-group">
          <label for="nome">Nome</label>
          <input value="{{$editora->nome}}"type="text" class="form-control" name="nome" id="nome" >
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input value="{{"$editora->email"}}"  type="text" class="form-control" name="email" id="email">
        </div>
        <button class="btn btn-primary">Atualizar</button>
      </form>
    </div>
  </div>
@endsection
