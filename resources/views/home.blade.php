@extends('layuot')

@section('title','Home')


@section('content')
<div class="container">
	<div class="row">		
		<div class="col-12 col-lg-6 ">
			<h1 class="display-4 text-primary">Desarollo Web</h1>			
			<p class="lead text-sexondary">Commodo in sint ex tempor esse sit in et cillum elit ut aliquip nisi. Lorem ipsum in aliquip dolor dolore non minim amet pariatur consequat aute ut. Quis labore in sunt in ad amet non irure ut. Sed ea irure dolor dolor pariatur incididunt laborum ad est aliquip commodo ad non. Culpa aliquip commodo reprehenderit veniam ex et ex sed tempor ut voluptate ut.</p>
			<a class="btn btn-large btn-block btn-primary" href="{{route('contact')}}">Contactame</a>
			<a class="btn btn-large btn-block btn-outline-primary" href="{{route('projects.index')}}">Portafolio</a>
		</div>		
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/img/home.svg" alt="Desarollo Web">
		</div>
	</div>	
</div>
@endsection