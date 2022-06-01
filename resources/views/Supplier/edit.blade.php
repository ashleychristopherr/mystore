@extends('layouts.conquer2')
@section('content')
<form role="form"method='POST' action="{{url('supplier/'.$data->id)}}">
    @csrf
    @method("PUT")
  <div class="form-body">
      <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" id='name' name='name' value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label>Address</label>
    <textarea class="form-control" rows="3" id="address" name="address"> {{$data->address}}</textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="cancel">Cancel</button>
</form>
@endsection 

