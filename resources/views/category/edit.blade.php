@extends('layouts.conquer2')
@section('content')
<form role="form"method='POST' action="{{url('kategori_obat/'.$datas->id)}}">
    @csrf
    @method("PUT")
  <div class="form-body">
      <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" id='name' name='name' value="{{$datsa->name}}">
  </div>
  <div class="form-group">
    <label>Address</label>
    <textarea class="form-control" rows="3" id="description" name="description"> {{$datas->description}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="cancel">Cancel</button>
</form>
@endsection 

