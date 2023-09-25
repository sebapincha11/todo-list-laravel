@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4"> 
        <div class="row mx-auto">
            <form action="{{route('categories.store')}}" method="POST">
            @csrf
             @if (session('success'))
                <h6 class="alert alert-success">{{session('success')}}</h6>
            @endif
            @error('name')
                <h6 class="alert alert-danger">{{$message}}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Titulo de la categoria</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color de la categoria</label>
                <input type="color" color="name" class="form-control">
            </div>
              
              <button type="submit" class="btn btn-primary">Crear una nueva categoria</button>
            </form>
            <div>
                @foreach ($categories as $categy )
                <div class="row py-1">
                    <div class="col-md-9 d-flex align-items-center">
                        <a class="d-flex align-items-center gap-2" href="{{route('categories.show', ['category' => $category->id])}}">
                            <span class="color-container" style="background-color: {{$category->color}}">{{$category->name}}</span>
                        </a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$category->id}}">
                            Eliminar
                          </button>
                    </div>
                </div>
                <div class="modal fade" id="{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>    
                @endforeach
            </div>
        </div>
    </div>   
@endsection
