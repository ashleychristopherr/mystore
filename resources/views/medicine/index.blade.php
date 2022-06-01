@extends('layouts.conquer2')
@section('title')
  Daftar Kategori Obat
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  div{
    border:1px solid black;
  }
</style>
<body>
<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>

<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div>



<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Name</th>
        <th>Form</th>
        <th>Formula</th>
        <th>Description</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Category Id</th>
        <th> </th>
      </tr>
    </thead>
    
    <tbody>
    @foreach($listdata as $li)
      <tr>
        <td>{{ $li->id }}</td>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->faskes_tk1 }}</td>
        <td>{{ $li->faskes_tk2 }}</td>
        <td>{{ $li->faskes_tk3 }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
        <td>{{ $li->category_id }}</td>


        <td>
        <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}"data-toggle="modal">{{ $li->id }}</a> 

        <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">{{$li->generic_name}}</h4>
             </div>
              <div class="modal-body">
              <img src="{{ asset('img/'.$li->img.'.jpg')}}" height='200px' />
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </td>
      </tr>
      @endforeach
      </tbody>
    </div>
</table>
</div>





@foreach($listdata as $li)
<table>
    <div class="col-sm-3 col-md-6 col-lg-4" >
      <div class="row" style="text-align:center;">
        <img src = "{{ asset('img/'.$li->img.'.jpg') }}" />
      </div>
      <div class="row" style="text-align:center;">
      {{ $li->generic_name }} 
      {{ $li->form }}
      </div>
    </div>
    </table>
  @endforeach

</body>
</html>
@endsection