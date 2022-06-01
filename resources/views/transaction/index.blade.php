@extends('layouts.conquer2')
@section('javascript')

<li >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#" onclick="getDetailData()">
  <i class="icon-bulb"></a></i>
</li>

<div id="getDetailData"></div>
</div>


<script>

    function getDetailData(id) {
        $.ajax({
            type:'POST',
            url:'{{route("transaction.showAjax")}}',
            data:'_token= <?php echo csrf_token() ?> &id='+id,
            success:function(data) {
                $("#msg").html(data.msg);
        }
    });
        
}
</script>
@endsection
@section('transaksiDetail')

<h2>Transaksi</h2>
  <p>Transaksi</p>            
  <table class="table table-hover">
    <thead>
      <tr>
      <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaksi</th>
        <th>Action</th>
      </tr>
    </thead>
    
    <tbody>
    @foreach($data as $li)
      <tr>
        <td>{{ $li->id }}</td>
        <td>{{ $li->buyer->name }}</td>
        <td>{{ $li->user->name }}</td>
        <td>{{ $li->transaction_date}}</td>

        <td><a class="btn btn-default" data-toogle="modal" href="#basic"
            onclick="getDetailData({{$li->id}});">Lihat Rincian Pembelian</a>


            </td>


      </tr>
      @endforeach
    </tbody>
</table>
@endsection

