@extends('template.main')
@section('content')
<form action="/pokemons" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">img</label>
      <input type="file" class="form-control" name="img">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">level</label>
        <input type="text" class="form-control" name="level">
      </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection