<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class LandingPageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function hayPedia()
    {
        return view('hayPedia');
    }

    public function hayTalk()
    {
        return view('hayTalk');
    }    

    public function blog()
    {
        return view('blog');
    }    
}