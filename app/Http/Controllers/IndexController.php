<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{

    /**
     * Index controller.
     */
    public function index()
    {

        // Return the view
        return view('welcome');

    }

}
