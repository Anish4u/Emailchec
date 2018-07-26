@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')

<div class="content-wrapper "style="margin-top:  50px">

  <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
                <h3>Send Mail</h3>
                  <div class="box-body">
                  <form method="post" action="tracker" >
                     {{ csrf_field() }}
                     <input type="email" name="mail_to" placeholder="To:"style=" margin: 0px;width: 1100.975px;height: 35px;" required>
                      <br/>
                      <!-- <input type="email" name="mail_from" placeholder="From:"style=" margin: 0px;width: 1100.975px;height: 40px;" required> -->

                       <!-- From is to be selected from EmailAxxount Created  -->

                             <div class="form-group">
                                  <label>From:</label><br>
                                  <select class="form-control"  name="mail_from"   style=" margin: 0px;width: 1100.975px;height: 35px;"  tabindex="-1" aria-hidden="true">
                                      <?php foreach ($emailfrom as $ef): ?>
                                        <!-- <option  selected>anish.sasidharan@zapelabs.com</option> -->
                                      <option >{{$ef->from_mail}}</option>
                                      <?php endforeach; ?>
                                 </select>
                        </div>
                    <input type="text" name="mail_sub" placeholder="Subject :"style=" margin: 0px;width:1100.975px;height: 35px;" required>
                      <hr>
                    <textarea  name="mail_body" id="editor"style=" margin: 0px;width:1399.4px;height: 330px;" ></textarea>
                    <br>
                    <button type="submit" class="btn btn-info btn-md">
                    <span class="glyphicon glyphicon-send"></span> Send Email
                    </button>
                  </form>
         <!-- body:<textarea name="mail_body" rows="2" cols="40" ></textarea> -->
                <script type="text/javascript" src="{{ URL::asset('js/ckeditor.js') }}"></script>
              </div>
            </div>
    </div>
    </div>
  </div>
    </section>
    </div>

   @endsection
