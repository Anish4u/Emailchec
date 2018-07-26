<?php

namespace App\Http\Controllers;

use App\EmailAcounts;
use App\mailserver;
use Illuminate\Http\Request;

class EmailAcountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $emailaccounts = EmailAcounts::all();
      return view('EmailAccounts')
        ->with('emailaccounts', $emailaccounts);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EmailAccounts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

              EmailAcounts::create(['from_name'=> request('fromname'),
              'from_mail'=>request('fromemail'),
              'username'=>request('usernmame'),
              'password'=>request('upassword'),
              'mail_server_type'=>request('hostname'),
              'port'=>request('portnumber'),
              'secure'=>request('secure'),
                  ]);



            return Redirect('/emailaccounts')
            ->with('flash','new Email Account created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmailAcounts  $emailAcounts
     * @return \Illuminate\Http\Response
     */
    public function show(EmailAcounts $emailAcounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmailAcounts  $emailAcounts
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailAcounts $emailAcounts,$id)
    {
      $emailacc = EmailAcounts::findOrFail($id); //Get task specified by id

//edit View
   return view('editEmailAccount',compact('emailacc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmailAcounts  $emailAcounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailAcounts $emailAcounts,$id)
    {


     $emailacc= EmailAcounts::findOrFail($id); //Get task specified by id

    $emailacc->from_name  = request('fromname');
    $emailacc->from_mail = request('fromemail');
    $emailacc->username =request('usernmame');
    $emailacc->password=request('upassword');
    $emailacc->mail_server_type=request('hostname');
    $emailacc->port=request('portnumber');
    $emailacc->secure=request('secure');
    $emailacc->save();

     return redirect('/emailaccounts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmailAcounts  $emailAcounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailAcounts $emailAcounts,$id)
    {
      $emailacc = EmailAcounts::findOrFail($id);
        $emailacc->delete();
        return redirect('/emailaccounts');
    }
}
