@extends('master')

@section('content')
 
   
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h1>Many To Many</h1>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered" border="1">
                <tr>
                    <th>SL</th>
                    <th>Post</th>
                    <th>Total Comments</th>
                </tr>
                <tbody>
                    @forelse ($products as $product)                        
                    <tr>
                        <td>{{ $product->id }}</td>
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
