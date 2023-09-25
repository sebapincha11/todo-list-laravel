@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4"> 
        <div class="row mx-auto">
            <form action="{{route('categories.store')}}" method="POST">
            @csrf
             @if (session('success'))
                <h6 class="alert alert-success">{{session('success')}}</h6>
            @endif
            @error('title')
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
        </div>
    </div>   
@endsection
