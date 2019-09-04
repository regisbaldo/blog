@extends('layouts.painel.base')

@section('content')
    
<div class="container-fluid">

      <form action="{{url('painel/posts/update/'.$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Titulo do Post:</label>
          <input type="text" class="form-control" id="title" value="{{$post->title}}" aria-describedby="emailHelp" name="title">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Descricao:</label>
            <textarea name="description" class="form-control">{{$post->description}}</textarea>
           
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Foto:</label>
            <img style="display:block" src="{{url($post->photo)}}" alt="">
            <input type="file"  id="photo"  name="photo">
          </div>


          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        
      </div>

@endsection