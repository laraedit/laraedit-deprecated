<?php

namespace LaraEdit\Http\Controllers;

use Illuminate\Http\Request;
use LaraEdit\Http\Requests;
use LaraEdit\Http\Controllers\Controller;

class InstallController extends Controller
{

	public function __construct()
	{
		$this->middleware('installed');
	}

    public function getInstall()
    {
    	return view('install.start');
    }

}
