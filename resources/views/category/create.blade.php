@extends('layouts.conquer2')
@section('content')
<form method="POST" action="{{route('kategori_obat.store')}}">
    @csrf
  <div class="form-body">
      <div class="form-group">
    <label>Name Category</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Text">
    <small class="form-text text-muted">Isikan Nama Kategori</small>
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Text">
    <small class="form-text text-muted">Isikan Deskripsi</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="cancel">Cancel</button>
</form>
@endsection