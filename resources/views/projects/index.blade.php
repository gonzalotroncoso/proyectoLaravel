@extends('layuot')
@section('title','Portafolio')
@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="display-4 mb-0">{{__('Portfolio')}}</h1>	
		@auth
		<a class="btn btn-primary" href="{{route('projects.create')}}">Crear proyecto</a>
		@endauth
	</div>
	
	<p class="lead text-secondary">Proyectos realizados</p>
	<ul class="list-group">		
		@forelse ($projects as $projectItems) 
					<li class="list-group-item border-0 mb-3 shadow-sm"> 
						<a class="d-flex justify-content-between align-items-center text-secondary" 
						 href="{{route('projects.show',$projectItems)}}">
						 	<span class=" font-weight-bold">
						 		{{ $projectItems->title}}
						 	</span>
						 	<span class="text-blacl-50">
						 		{{$projectItems->created_at->format('d/m/Y')}}</a>  
						 	</span>
					</li>
						@empty
				<li class="list-group-item border-0 mb-3 shadow-sm">No hay elementos</li>
		@endforelse
		
		
	</ul>
	{{$projects->links()}}
</div>
@endsection