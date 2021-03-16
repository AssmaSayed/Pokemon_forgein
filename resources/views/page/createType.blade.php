<form action="pokemon" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Pokemon</label>
      <input type="text" class="form-control" name="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>