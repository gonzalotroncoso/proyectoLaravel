	@csrf 
	<div class="form-group">
					<label for="title">Titulo</label>
					<input class="form-control bg-light shadow-sm border-0"  
					type="text"
					name="title"
					value="{{old('title',$project->title)}}">
	</div>
	<div class="form-group">
					<label for="description">Descripción</label>
					<textarea class="form-control bg-light shadow-sm border-0" 
					 name="description" >{{old('description',$project->description)}}</textarea><br>
	</div>
	<div class="form-group">
					<label for="url">url</label>
					<input class="form-control bg-light shadow-sm border-0" 
					 type="text" name="url" value="{{old('url',$project->url)}}"><br>
	</div>

	<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>
	<a class="btn btn-link btn-block" href="{{route('projects.index')}}">Cancelar</a>