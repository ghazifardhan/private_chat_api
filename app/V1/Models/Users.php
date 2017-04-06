<?php

namespace App\V1\Models;

use App\V1\Models\BaseModel as Model;

class Users extends Model {

  protected $table = 'users';

  protected $fillable = [
    'username',
    'email',
    'password',
    'google_id',
    'remember_token',
    'confirm'
  ];

  protected $validate = [
    'username' => 'required|min:4',
    'email' => 'required',
    'password' => 'required|min:3',
  ]

  protected $message = [
    'username.required' => 'Username requried',
    'username.min' => 'Username min 3 karakter',
    'email.requried' => 'Email required',
    'password.required' => 'Password required',
    'password.min' => 'Password min 3 karakter'
  ];

  public function validata(){
    return $this->validate;
  }

  public function message(){
    return $this->message;
  }

}
