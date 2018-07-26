<?php

namespace App\Http\Controllers;
use App\Mail\emailtracker;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Http\Request;
use App\Emailcheck;
use App\emailreport;
use App\EmailAcounts;
use App\mailserver;
use DB;
use App\Quotation;
class EmailcheckController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
     $emailfrom=EmailAcounts::all();
      return view('Compose',compact('emailfrom'));
   }
   public function index1()
   {
          return view('Compose');
   }
   public function emails()
   {
     $emails=Emailcheck::all();
     return view('Emails',compact('emails'));
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
  public function addemail()
  {
     $mailserver=mailserver::all();
     // $em=mailserver::where('mail_service_provider','=',$mail_service_provider )->get();
      return view('AddEmailAccount',compact('mailserver'));
  }

  public function display()
  {
    // $emailch=Emailcheck::all();
    // $emailre=emailreport::latest()->get();
    $emailre=DB::table('emailreports')
          ->join('emailchecks','emailreports.emailchecks_id','emailchecks.id')
          ->select('emailreports.*','emailchecks.mail_to','emailchecks.mail_sub','emailchecks.updated_at')
          ->get();

    // dd($all);
    // $books = App\Book::with(['author', 'publisher'])->get();
    return view('Feeds',compact('emailre'));
  }
  public function showemaildetail()

  {
// dd($e);
    $fe=DB::table('emailreports')
          ->join('emailchecks','emailreports.emailchecks_id','emailchecks.id')
          ->select('emailreports.*','emailchecks.mail_to','emailchecks.mail_sub','emailchecks.mail_from','emailchecks.updated_at')
          ->first();
          // // dd($fe);
          // // $fe=DB::find(2);
          // dd($fe);
          return view('emailinfo',compact('fe'));

  }
   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request, Emailcheck $ti)
   {
    $mail_to=request('mail_to');
    $mail_body = request('mail_body');
    $mail_sub=request('mail_sub');
     // $mail_from=request('anish.sasidharan@zapelabs.com');
    $mail_from=request('mail_from');
    $em=EmailAcounts::where('from_mail',$mail_from)->get();
    foreach ($em as $em) {
// dd($em->from_mail);
    $newEmailCheck= Emailcheck::create(['mail_to'=> request('mail_to'),
    'mail_from'=>request('mail_from'),
    'mail_sub'=>request('mail_sub'),
    'mail_body'=>request('mail_body')
               ]);

               // dd($mail_body);                                  // Set mailer to use SMTP
     $id =$newEmailCheck->id;
     $image_code_to_be_inserted = "<img src='http://127.0.0.1:8000/welcome/" . $id . "'>";
     $mail_bodym = $mail_body . $image_code_to_be_inserted;
     $row=emailreport::create(['emailchecks_id'=>$id]);
  //   if(from_mail=email_acounts.from_mail)
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = $em->mail_server_type;       //"smtp.zoho.com";//emailacounts.mail_server_type
        $mail->SMTPAuth = true;
        $mail->Username =  $em->username;//'anish.sasidharan@zapelabs.com';//emailacounts.username
        $mail->Password =$em->password;//emailacounts.password
        $mail->SMTPSecure =$em->secure;//'tls';//emailacounts.secure
        $mail->Port = $em->port;//emailacounts.port
        $mail->setFrom($em->from_mail, $em->from_name);//('anish.sasidharan@zapelabs.com', 'Mailer'); //'emailacounts.from_mail'
        $mail->addAddress($mail_to);
        $mail->isHTML(true);
        $mail->Subject= $mail_sub;
        $mail->Body = $mail_bodym;
        $mail->send();
        echo 'Message has been sent';
        }
         catch (Exception $e) {
                      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                            }
                          }

 return redirect('/emails');

   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */


   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit()
   {
     $e=Emailcheck::find($id);
     // $id=EmailCheck::all();
    return view('trackercheck',compact('e'));
   }




   public function edit1($id)
   {
        $emailc=emailreport::where('emailchecks_id',$id)->increment('counts');
        return view('welcome1');
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
     $emailacc = Emailcheck::findOrFail($id);
       $emailacc->delete();
       return redirect('/emails');
   }//


}
