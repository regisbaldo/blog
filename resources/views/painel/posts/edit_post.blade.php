@extends('layouts.painel.base')

@section('content')
    
<div class="container-fluid">

      <form action="{{url('painel/posts/store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Titulo do Post:</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Descricao:</label>
            <textarea name="description" class="form-control"></textarea>
           
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Foto:</label>
            <input type="file"  id="photo"  name="photo">
          </div>


          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        
      </div>

@endsection