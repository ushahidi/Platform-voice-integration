<?php


namespace App\HTTP\Controllers;

Illuminate\Http\Request; 

use App\message;

class Incommingmessage extends controller
{

    public function show($id)
    {
       return Incommingmessage::findOrFail($id);      
    }
}

//for retrieving message input with Thank you as default value
$message = $request ->input('message','Thank you');

if($request ->has('message')){
    echo 'message'.'present';
}
if($request ->has('message','email')){
    echo 'message','email'.'present';
}
if($request ->filled('name')){
    echo 'message'.'filled';
}
