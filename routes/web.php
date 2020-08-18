<?php



//Route::get('/home', 'HomeController@index')->name('home');

Route::view('/','home')->name('home');
Route::view('/quienes-somos','about')->name('about');

Route::get('/portfolio','ProjectController@index')->name('projects.index');

Route::resource('portafolio','ProjectController')
->names('projects')
->parameters(['portafolio'=>'project']);
//Route::get('/portfolio/crear','ProjectController@create')->name('projects.create');
//Route::get('/portfolio/{project}/editar','ProjectController@edit')->name('projects.edit');
//Route::patch('/portfolio/{project}','ProjectController@update')->name('projects.update');
//Route::post('/portfolio','ProjectController@store')->name('projects.store');
//Route::get('/portfolio/{project}','ProjectController@show')->name('projects.show');
//Route::delete('portafolio/{project}','ProjectController@destroy')->name('projects.destroy');

Route::view('/contact','contact')->name('contact');
Route::post('/contact','MessagesController@store')->name('messages.store');

Auth::routes();

 ?>



