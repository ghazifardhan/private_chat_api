<?php

namespace App\V1\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class WelcomeController extends BaseController{

  public function api()
  {
    $res['api_name'] = "Private Chat";
    $res['api_ver'] = "1.0";
    return response($res);
  }

}
