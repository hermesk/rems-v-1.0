@extends('layouts.app')
@section('title','Property Size')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <div class="card-header">Property Size
				<a class="nav-link" href="{{route('size.create')}}">+Add</a>
             </div>
				<table>
					<thead>
					<tr>
						<th width="20%">Size</th>
				        <th width="20%">Location id</th>
				    
				  </tr>
				</thead>
				<tbody>

				  @foreach($sizes as $size)
				 <tr>
				 	<td><a href="{{route('size.show',['size'=>$size])}}">{{$size->name}}</a></td>
				 	<td>
				 	{{$size->location->name}}
				 	</td>
				 
				 </tr>
				    @endforeach
				    </tbody>
				</table>
            </div>
        </div>
    </div>
</div>
@endsection
