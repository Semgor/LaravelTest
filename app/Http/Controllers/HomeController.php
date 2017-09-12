<?php 
namespace App\Http\Controllers;
use App\Message;
use \Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show all messages.
	 *
	 * @return Response
	 */
	public function index()
	{
           $messages = Message::with('user')->orderBy('id','desc')->get();
           
		return view('home')->with('messages',$messages);
           
	}
        /**
	 * Create new user message.
	 *
	 * @return Response
	 */
        public function store(\App\Http\Requests\CreateMessageRequest $request){
           
            \Auth::user()->messages()->save(new Message($request->all()));
             $messages = Message::with('user')->get();
             
            return redirect('home');
        }

}
