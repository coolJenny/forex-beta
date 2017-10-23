<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MycontController extends Controller
{
    private $myclass;
    public function __construct(\MyClass $myClass)
    {
        $this->myclass = $myClass;
    }

    public function index()
    {
        dd($this->myclass);
    }
}
