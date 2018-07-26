@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')

<?php
 ?>
 <html>
<head>
  <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
  <!-- <script type="text/javascript" src="{{ URL::asset('js/tinymce.min.js') }}"></script> -->
  <!-- <script type="text/javascript" src="{{ URL::asset('js/jquery.tinymce.min.js') }}"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<h1 align="center">Mail send</h1>
<hr>
     <body>
       <div class='row'>
<div class='col-md-12'>
  <div class='col-md-1'>
  </div>
  <div class="col-md-10">
       <table class="table table-bordered">
         <form method="post" action="tracker">
            {{ csrf_field() }}

       <input type="text" name="mail_to" placeholder="To:"style=" margin: 0px;width: 1494.4px;height: 40px;">
      <br/>

           <input type="text" name="mail_sub" placeholder="Subject :"style=" margin: 0px;width:1494.4px;height: 40px;">
      <br/>

      <textarea name="mail_body" style=" margin: 0px;width:1494.4px;height: 330px;">
      </textarea>
      <br>
      <button type="submit" class="btn btn-info btn-md">
      <span class="glyphicon glyphicon-send"></span> Send Email
      </button>
         </form>
       </table>
         <!-- body:<textarea name="mail_body" rows="2" cols="40" ></textarea> -->
       </div>
       </div>
     </body>
 </html>
