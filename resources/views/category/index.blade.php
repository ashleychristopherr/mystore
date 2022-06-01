@extends('layouts.conquer2')
@section('title')
  Daftar Kategori Obat
@endsection
@section('content')
<h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Name</th>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    
    <tbody>
    @foreach($datas as $li)
      <tr>
        <td>{{ $li->id }}</td>
        <td>{{ $li->name }}</td>
        <td>{{ $li->description }}</td>
        <td></td>
        <td> <a href="{{ url('kategori_obat/'.$li->id.'/edit')}}" class='btn btn-xs btn-info'>edit</a></td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection
