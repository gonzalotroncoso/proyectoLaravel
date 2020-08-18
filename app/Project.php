<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded=[];//podemos deshabiliar la protecion siempre y cuando no utilicemos request()->all()


}
