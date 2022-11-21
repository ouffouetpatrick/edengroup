<?php

namespace App\Http\Controllers\Front\Immobilier;

use App\User;
use App\Http\Requests\Front\Demande\DemandeCreateRequest;
use App\Repositories\Demande\DemandeRepository;
use App\Repositories\Users\UsersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ImmobilierController extends Controller
{
    protected $demandeRepository;
    protected $usersRepository;

    public function __construct(DemandeRepository $demandeRepository, UsersRepository $usersRepository)
    {
        $this->demandeRepository=$demandeRepository;
        $this->usersRepository = $usersRepository;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.immobilier.index');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guest())
        { $id = ""; }
        else{ $id = Auth::User()->id; }
        $users = $this->usersRepository->find_user($id);
        return view('front.immobilier.create',compact('users'));
    }

     public function store(DemandeCreateRequest $request)
    { 
        $inputs = $request->all();
        $request->input('select');
        $inputs['user_id'] = Auth::User()->id;
        $inputs['description'] = $request->input('content');
        $tab = array();
        $value = "";
        foreach ($request->input('select') as $values) {
           $tab[] = $values;
        }
        for ($i=0; $i <count($tab) ; $i++) { 
             $value .= $tab[$i];
             if($i<count($tab)-1){
                $value .= ',';
             }
         } 
        $inputs['libelle'] = $value;
        $this->demandeRepository->store($inputs);
        return redirect()->route('front-immobilier.create')->with('Ok','Votre enregistrement a été effectué avec succès');
    }
}
