@extends('layouts.app')


@section('content')
	
		@foreach($exercises as $exercise)
			<div class ='container'>
				<div class = list-group> <a href="cards/{{$exercise->id}}">{{ $exercise->name }}</a>
				<ul>		
					<li class="list-group-item">id: {{$exercise->id}}</li>
					<li class="list-group-item">Description: {{$exercise->description}}</li>
					<li class="list-group-item">Image Id: {{$exercise->image_id}}</li>
					<li class="list-group-item">Type: {{$exercise->type}}</li>
				</ul>
			 </div>
			</div>
		@endforeach
		
		
				
@endsection