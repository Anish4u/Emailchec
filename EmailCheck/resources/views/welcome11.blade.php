CREATE TABLE public.invoice_fact (
    gstin varchar(15) NULL,
    fp varchar(15) NULL,
    gt  varchar(15) NULL,
    cur_gt varchar(15) NULL,
    nil varchar(15) NULL,
    exp  varchar(15) NULL,
    expa  varchar(15) NULL,
    at varchar(15) NULL,
    ata varchar(15) NULL,
    txpd varchar(15) NULL,
    txpda varchar(15) NULL,
    gst_username varchar(50) NULL,
    expt_amt varchar NULL,
    nil_amt varchar NULL,
    ngsup_amt varchar NULL,
    sply_ty varchar NULL,
    qty varchar NULL,
    hsn_sc varchar NULL,
    uqc varchar NULL,
    sec_nm varchar NULL,
    ttl_rec varchar NULL,
    ttl_tax varchar NULL,
    ttl_sgst varchar NULL,
    ttl_cgst varchar NULL,
    ttl_val varchar NULL,
    ttl_cess varchar NULL,
    ttl_doc_issued varchar NULL,
    ttl_doc_cancelled varchar NULL,
    net_doc_issued varchar NULL,
    ttl_expt_amt varchar NULL,
    ttl_ngsup_amt varchar NULL,
    ttl_nilsup_amt varchar NULL,
    state_cd int4 NULL,
    ctin varchar(15) NULL,
    ret_period varchar NULL,
    cfs varchar NULL,
    flag varchar(10) NULL,
    updby varchar(5) NULL,
    chksum varchar(64) NULL,
    inum varchar(16) NULL,
    idt varchar NULL,
    val int4 NULL,
    pos varchar(2) NULL,
    rchrg varchar(5) NULL,
    etin varchar(20) NULL,
    inv_typ_id varchar(15) NULL,
    cflag varchar(5) NULL,
    opd date NULL,
    diff_percent int4 NULL,
    num int4 NULL,
    rt int4 NULL,
    txval int4 NULL,
    iamt int4 NULL,
    camt int4 NULL,
    samt int4 NULL,
    csamt int4 NULL,
    "index" int4 NULL,
    typ varchar NULL,
    ttl_igst varchar NULL,
    id serial NOT NULL,
    inv_typ varchar(5) NULL,
    ntty varchar(5) NULL,
    nt_num varchar NULL,
    nt_dt varchar NULL,
    rsn varchar NULL,
    p_gst varchar(2) NULL,
    exp_type varchar(5) NULL,
    sbpcode varchar NULL,
    sbdt varchar(15) NULL,
    sbnum varchar(15) NULL,
    desc varchar(100) NULL,
    oinum varchar(100) NULL,
    oidt varchar(100) NULL,
    omon varchar(100) NULL,
    typ varchar(100) NULL,
    uqc varchar(100) NULL,
    ont_num varchar(100) NULL,
    ont_dt varchar(100) NULL,
    ntty varchar(100) NULL,
    nt_num varchar(100) NULL,
    nt_dt varchar(100) NULL,
    doc_num varchar(100) NULL,
    from varchar(100) NULL,
    to varchar(100) NULL,
    totnum varchar(100) NULL,
    cancel varchar(100) NULL,
    net_issue varchar(100) NULL,
    doc_issue varchar(100) NULL,
    ad_amt varchar NULL
)
WITH (
    OIDS=FALSE
) ;


@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')


  <!-- <script type="text/javascript" src="{{ URL::asset('js/ckeditor.js') }}"></script>
    <script type="text/css"  src="{{ URL::asset('css/bootstrap.min.css') }}"></script> -->


<!-- </head>
<style>
body {
  padding:5px;
  max-width:1800px;
  margin: auto;

}
</style>
<body> -->
<div class="content-wrapper "style="margin-top:  50px">

  <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
        <div class="box-header">
          <h1 align="center">Mail send</h1>

              <div class="box-body">
                  <div class="table-responsive">

                  <form method="post" action="tracker" >
                     {{ csrf_field() }}

                     <input type="text" name="mail_to" placeholder="To:"style=" margin: 0px;width: 1800.975px;height: 40px;" required>
                      <br/>
                    <input type="text" name="mail_sub" placeholder="Subject :"style=" margin: 0px;width:1800.975px;height: 40px;" required>
                      <br>
                    <textarea  name="mail_body" id="editor"style=" margin: 0px;width:1399.4px;height: 330px;" ></textarea>
                    <hr>
                    <button type="submit" class="btn btn-info btn-md">
                    <span class="glyphicon glyphicon-send"></span> Send Email
                    </button>
                  </form>
                </table>
                </div>
           		</div>
   	         </div>
           </div>
         </div>
       </div>
     </section>
   </div>


         <!-- body:<textarea name="mail_body" rows="2" cols="40" ></textarea> -->
   <script>
   ClassicEditor
   .create( document.querySelector( '#editor' ) )
   .catch( error => {
     console.error( error );
   } );
   </script>

  @endsection
