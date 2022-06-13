@extends('layouts.frontend')

@section('title', 'Cart')

@section('content')

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>
        <tr>
            <td data-th="Product">
                <div class="row">
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr>
                    <td data-th="Medicine">
                        <dic class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('img/'.$details['photo'].'.jpg') }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                        <h4 class="nomargin">{{$details['name'] }}</h4>
                        <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </td>
            <td data-th="Price">Rp. {{$details['price'] }}</td>
            <td data-th="Quantity">{{ $details['quantity'] }} </td>
            <td data-th="Subtotal" class="text-center">Rp. {{ $details['price'] * $details['quantity'] }} </td>
            <td class="actions" data-th="">
                <a clas="btn btn-info btn-sm update-cart" data-id="{{ $t->id }}"
                href="{{route('transaction.show',$t->id }}">View</a>
            </td>
        </tr>
            @endforeach
        @endif



        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td class="hidden-xs"></td>
            <td class="hidden-xs"><a href="{{ route('submitcheckout') }} " class="btn btn-danger"> Finish<i class="fa fa-angle-right"></i></td>
            <td class="hidden-xs text-center"><strong>Total Rp. {{ $total }}</strong>
        </tr>
        </tfoot>
    </table>

@endsection