<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded= [];

	public function profileImage(){
		$imagePath=($this->image) ?  $this->image : 'profile/z55DIrOcXowkQDT2AirkH0DrklSLNQLGzUk9s1C9.jpeg';
		return '/instagram/public/storage/' . $imagePath;
	}

	public function followers(){
      return $this->belongsToMany(User::class);
	}

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
