@extends('master')

@section('content')
 
   
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>One To Many</h1>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered" border="1">
                <tr>
                    <th>SL</th>
                    <th>Post</th>
                    <th>Total Comments</th>
                </tr>
                <tbody>
                    @forelse ($comments as $comment)                        
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->post->my_post }}</td>
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
