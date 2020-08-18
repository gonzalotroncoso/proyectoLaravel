<?php 

function setActive($routeNmae){
	return request()->routeis($routeNmae)? 'active':'';
}
	
 ?>