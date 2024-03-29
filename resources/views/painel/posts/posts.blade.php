@extends('layouts.painel.base')

@section('content')
    
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol style="display:flex;justify-content:center;" class="breadcrumb">
          <li class="breadcrumb-item">
            <h1>Posts</h1>
          </li>
        </ol>

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
      @endif

        <div class="row">
          <div class="col-md-12">
              <a href="{{url('/painel/posts/create')}}"><button class="btn btn-primary" >Adicionar Post</button></a>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Posts Cadastrados</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>Descricao</th>
                    <th>Foto</th>
                    <th>Opções</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Titulo</th>
                    <th>Descricao</th>
                    <th>Foto</th>
                    <th>Opções</th>
                  </tr>
                </tfoot>
                <tbody>
                  @if(!empty($posts))
                  @foreach ($posts as $post)
                  <tr>
                      
                      <td>{{$post->title}}</td>
                      <td>{{$post->description}}</td>
                      <td><img style="height:40%" src="{{url($post->photo)}}" alt=""></td>
                      <td> 
                      <a href="{{url('/painel/posts/edit/'. $post->id)}}"><button class="btn btn-warning">Alterar</button></a>
                      <a href="{{url('/painel/posts/delete/'. $post->id)}}"><button class="btn btn-danger">Remover</button></a>
                      </td>
                      
                  </tr>
                  @endforeach
                      
                  @endif

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>

@endsection