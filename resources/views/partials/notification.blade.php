	@if (session('status'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">

	{{session('status')}}<br>
	
	<button type="button" 
			class="close"
			data-dismiss="alert"
			aria-label="Close">
			<span aria-hidden="true">&times;</span> 		
	</button>
</div>
 @endif