<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Auth;
use App\User;
use App\Categories;
// use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Posts::all();
        return view('dashboard',['posts'=>$posts]);
    }
    public function profile()
    {
        $user=Auth::user();
        return view('user.show',['user'=>$user]);
    }
    public function profileid(Request $request)
    {
        $user=User::findorfail($request->id);
        return view('user.show',['user'=>$user]);
    }
    public function group()
    {
        $category=Categories::all();
        return view('categories.show',['category'=>$category]);
    }
    public function groupid(Request $request)
    {
        $category=Categories::findorfail($request->id);
        return view('dashboard', ['category' => $category,'posts'=>$category->posts]);

    }
     public function chatbot()
    {
        return view('chatbot');
    }
     public function news()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://newsapi.org/v2/everything?q=Health&pageSize=100&apiKey=9954a562c4124486afc2234966d0132d');
        $response=json_decode((string)$res->getBody());
        $news=$response->articles;
        return view('news',['news'=>$news]);
    }
}
