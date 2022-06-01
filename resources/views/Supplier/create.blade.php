@extends('layouts.conquer2')
@section('content')
<form method="POST" action="{{route('supplier.store')}}">
    @csrf
  <div class="form-body">
      <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Text">
    <small class="form-text text-muted">Isikan nama Supplier Anda.</small>
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Text">
    <small class="form-text text-muted">Isikan Alamat Supplier Anda.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="cancel">Cancel</button>
</form>
@endsection