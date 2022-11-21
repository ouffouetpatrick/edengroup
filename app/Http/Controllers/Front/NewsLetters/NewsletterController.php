<?php

namespace App\Http\Controllers\Front\NewsLetters;

use App\Http\Requests\Front\NewsLetters\NewsLettersCreateRequest;
use App\Models\NewsLetters\NewsLetter;
use App\Repositories\NewsLetters\NewsLetterRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    protected $newslettersRepository;

    public function __construct(NewsLetterRepository $newslettersRepository)
    {
        $this->newslettersRepository=$newslettersRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewslettersCreateRequest $request)
    {
        // 
        $inputs['email']=$request->input('email_newletter');
        $inputs['created_at'] = date("d/m/y H:i:s");
        $inputs['updated_at'] = date("d/m/y H:i:s");
        $this->newslettersRepository->insert($inputs);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
