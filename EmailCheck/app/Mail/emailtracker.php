<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\EmailCheck;
use Illuminate\Http\Request;

class emailtracker extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $id;
    public function __construct($id)
    {
      $this->id=$id;
       // dd($id,"hello");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      // dd($this->$emid);
         // $eid = EmailCheck::find($request);
         // dd($this->id);

         $id=$this->id;
         // dd($id);
          return $this->view('email')
                      ->with(['myid'=>$id]);
    }
}
