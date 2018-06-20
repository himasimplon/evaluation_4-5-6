@extends('layouts.app') 


@section('content')
<section class="container">
	<div class="row ">
		<div ="col-md-12"></div>	
  			<h1>Nos listes de Chambres</h1>
	</div>
	
	  		<table class="table">
	  			<head>
	  			 <tr>
				 	<th> name  </th>
				  	<th> type  </th>
				  	<th>Floor  </th>
				  	<th>bed_type  </th>
				  	<th>bathroom_type  </th>
				  	<th>view  </th>
				  	<th>is_suite  </th>
				  	<th>price  </th>
				  	<th>access  </th>
 					<th>area </th>
 				 </tr>
 				</head>
 				<body>
 						
	  			<tr>
  					
					  	<td >{{$room ->name}}</td>

					  	<td> @if ($room ['is_suite'] == 1) suite
							 @else standard
						  	@endif
					   </td>

					
					  	<td >{{$room ->floor}}</td>
					
					  	<td>
							@if ($room ['bed_type_id'] == 1) Single
						
							@elseif ($room ['bed_type_id'] ==2) Queen size
											
							@else King Size		
																
							@endif
						</td>
					
					  	<td>{{$room ->view}}</td>

					  	<td>{{$room ->bathroom_type}}</td>
					
					  	<td >{{$room ->is_suite}}</td>
					
					  	<td>{{$room ->price}}</td>
					
					  	<td>
						@if ($room ['reduced_mobility_access'] == 1) oui
						
						@else non	
						
						@endif
						</td>
					
					  	<td>{{$room ->area}}</td>
					
					
	  					<td><a href="{{action('RoomController@show', $room['id'])}}" class="btn btn-view">{{$room ['name']}}</a></td>
	  				
 				</tr>
 				
	
  			</body>
		</table>
		
	</div>
</section>
@endsection