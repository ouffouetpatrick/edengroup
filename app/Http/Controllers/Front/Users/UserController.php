<?php

namespace App\Http\Controllers\Front\Users;


use App\User;
use App\Http\Requests\Front\Users\UserCreateRequest; 
use App\Repositories\Users\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        //$this->middleware('userfront')->except(['index','store']);
        $this->usersRepository=$usersRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('front.users.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('front.users.create');
    }

 public function store(UserCreateRequest $request)
    {
        // 
        $inputs = $request->all();
        $inputs['nom']=$request->input('nom');
        $inputs['prenoms']=$request->input('prenoms');
        $inputs['phone_number1']=$request->input('tel1');
        $inputs['phone_number2']=$request->input('tel2');
        $inputs['email']=$request->input('email');
        $inputs['adresse_livraison'] ='';
        $inputs['photo'] ='';
        $inputs['password']=$request->input('password');
        $this->usersRepository->store($inputs);
        return redirect()->route('front-users.create')->with('Ok','Votre enregistrement a été effectué avec succès');
    }
}
