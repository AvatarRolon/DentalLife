<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AbonoController extends Controller
{
    //
    public function index()
    {   
      return "index";   
    }
    
    public function create()
    {
       return "create";
    }

    public function store()
    {
        return "store";
    }

    public function show($id)
    {
    	return "show";
    }

    public function edit($id)
    {
        return "edit";
    }

    public function update()
    {
    	return "update";
    }

    public function destroy($id)
    {
    	return "destroy";
    }
}
