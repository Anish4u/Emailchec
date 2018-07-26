<?php

namespace App\Http\Controllers;

use App\emailreport;
use App\CreateEmailcheck;
use Illuminate\Http\Request;
use App\Emailcheck;

class EmailreportController extends Controller
{
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
    public function store(Request $request,id $id,count $count ,Emailcheck $emailc)
    {
      $e=emailreport::find(1);
      dd($e);
dd("email count send");

      //  if user opens mail :find the email_id ,  then insert the count as well as emailchecks_id

      $emailc=$emailcheck::find(1);
      $emailc->emailreport->emailchecks_id=$Emailcheck->id;
      //count ++
      dd($emailc);
      // else (new email)
      // emailreport::create();
          emailreport::create(['count'=> request('count'),
            'emailchecks_id'=>$emailc->id
                ]);

//if emailcheckid==id then increase the count

    //   return view('index');
    // return response(file_get_contents(public_path('./img/image.jppg')))
    // ->header('content-type', 'image/jpg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\emailreport  $emailreport
     * @return \Illuminate\Http\Response
     */
    public function show(emailreport $emailreport,id  $id)
    {
          $emailcheck=Emailcheck::find($id);
          dd($emailcheck);
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\emailreport  $emailreport
     * @return \Illuminate\Http\Response
     */
    public function edit(emailreport $emailreport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\emailreport  $emailreport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, emailreport $emailreport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\emailreport  $emailreport
     * @return \Illuminate\Http\Response
     */
    public function destroy(emailreport $emailreport)
    {
        //
    }
}
