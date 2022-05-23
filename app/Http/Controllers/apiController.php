<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\api;

class apiController extends Controller
{
    function delivered(Request $req)
    {
		
        $api= new api;
        $api->event_type=$req->event_type;
        $result=$api->save();
        return ["Result"=>"Guardado"];
        if($result)
        {
            return["Result"=>"Guardado"];
        }
        else{
            return ["Result"=>"Falló"];
        }
    }
}
