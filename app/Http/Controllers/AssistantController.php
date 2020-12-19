<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistantController extends Controller
{
    public function addassistant(){


    	return  view('assistant.createassistant');
    }
    public function viewassistant(){


    	return  view('assistant.viewassistant');
    }
}
