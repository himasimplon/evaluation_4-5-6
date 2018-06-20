@extends('layouts.default.blade') 


@section('content')
<section class="container">
	<div class="row">
		<div class="col-sm-9 col-sm-12 text-center">	
	  		<h1>Détail de chambre</h1>
		</div>
		<div class="col-sm-12 col-sm-12 text-center">
		  	<table class="table">
		  		<div></div>
		  		
					  		
					<div class="row">
						<div class="row" style="width: 100%">
	  								@foreach ($room as $room)
					  			<p>name : {{$room ->name}}</p> 
					  			<p> price : {{$room ->price}}€/nuit</p> 
					  			<p>floor : {{$room ->floor}}</p> 
					  			<p> bed_type : {{$room -> bed_type}}</p> 
					  			<p> bathroom_type : {{$room -> bathroom_type}}</p>
					  			<p> view: {{$room ->view}}</p>
					  			<p> access : {{$room -> reduced_mobility_access}}</p>
					  			<p> area : {{$room -> area}}</p>
					  			 
	  						</div>
					</div>
							@endforeach  			
			</table>	

		</div>
	</div>
</section>





