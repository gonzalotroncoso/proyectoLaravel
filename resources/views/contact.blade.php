@extends('layuot')
@section('title','Contacto')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-12-col-sm-10 col-lg-6 mx-auto">
		@include('partials.notification')			
			
			<form class="bg-white shadow rounded py-3 px-4" 
			 	method="POST" 
			 	action ="{{route('messages.store')}}"
			 >
			 <h1 class="display-4">{{__('Contact')}}</h1>
			 <hr>
				@csrf<!-- Hay q ponerlo sino no se puede enviar el formulario -->
				<div class="form-group">
					<label for="name">Nombre</label>
					<input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0  @enderror "
						id="name" 
						name="name" 				
						value="{{old('name')}}" 
					>
					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="email">Email</label>
						<input class="form-control bg-light shadow-sm  @error('email') is-invalid @else border-0  @enderror "
						type="email" 
						name="email" 
						value="{{old('email')}}">
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="subject">Asunto</label>
						<input class="form-control bg-light shadow-sm  @error('subject') is-invalid @else border-0  @enderror "
						name="subject" 
						value="{{old('subject')}}">
					@error('subject')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="content">Mensaje</label>
						<textarea class="form-control bg-light shadow-sm  @error('content') is-invalid @else border-0  @enderror "
						 name="content" 
						 value="{{old('content')}}"></textarea>
					@error('content')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror	
				</div>
				<button class="btn btn-primary btn-lg btn-block">Enviar</button>
			</form>			
		</div>
	</div>
	
</div>
@endsection

