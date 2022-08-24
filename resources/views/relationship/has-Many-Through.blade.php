@extends('master')

@section('content')
 
   
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h1>has many through</h1>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered" border="1">
                <tr>
                    <th>SL</th>
                    <th>returned_quantity</th>
                    <th>total_amount</th>
                </tr>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @forelse ($saleReturnedProducts as $saleReturnedProduct)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $saleReturnedProduct->returned_quantity }}</td>
                        <td>{{ $saleReturnedProduct->total_amount }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td>No Data Available</td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</div>
                     
      
@endsection
