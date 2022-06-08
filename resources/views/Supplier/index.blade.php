@extends('layouts.conquer2')
@section('title')
  Supplier
@endsection
@section('content')
@section('javascript')
<script>
  function getEditForm(id)
  {
    $.ajax({
      type:'POST',
      url:'{{route("supplier.getEditForm")}}',
      data:{'_token' : '<?php echo csrf_token() ?>',
        'id':id
      },
    success: function(data) {
      $('#modalContent').html(data.msg)
    }
    });
  }
  </script>
  @endsection


<div class="container">
<a href="#modalCreate" data-toggle='modal'class='btn btn-info'> + Supplier Baru (modal)</a>

<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" 
            data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title">Add New Supplier</h4>
        </div>
          <div class="modal-body">
            <form role="form" method='POST' action="{{route('supplier.store')}}">
              @csrf
              <div class="form-body">
                <div class="form-group">
                  <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3"
                    id='address' name='address'></textarea>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="{{url('supplier.store')}}" class="btn btn-default">Cancel</a>
                  </div>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>
</div>
           
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Created At</th>
        <th> </th>
      </tr>
    </thead>
    
    <tbody>
    @foreach($data as $li)
      <tr>

        <td>{{$li->id}}</td>
        <td id='td_name_{{$li->id}}'>{{$li->name}}</td>
        <td id='td_address_{{$li->id}}'>{{$li->address}}</td>
        <td><a href="{{ url('supplier/'.$li->id.'/edit')}}"
              class='btn btn-xs btn-info'>edit</a>

        <td>{{ $li->id }}</td>
        <td>{{ $li-> name }}</td>
        <td>{{ $li->address }}</td>
        <td>{{ $li->created_at }}</td>
        <td> <a href="{{ url('supplier/'.$li->id.'/edit')}}" class='btn btn-xs btn-info'>edit</a>
        
        
@can('delete-permission', $li)
          <form method='POST' action="{{ url('supplier/'.$li->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class='btn btn-danger btn-xs'/>
          </form>
          @endcan
        </td>

        <td> <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs'
          onclick="getEditForm({{$li->id}})"> +Edit A</a></td>
          <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" id='modalContent'>
              </div>
            </div>
          </div>

    @endforeach
@endsection