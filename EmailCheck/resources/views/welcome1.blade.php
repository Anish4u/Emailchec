<?php
 ?>
 <html>

<head>


  <script type="text/javascript" src="{{ URL::asset('js/ckeditor.js') }}"></script>
    <script type="text/css"  src="{{ URL::asset('css/bootstrap.min.css') }}"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

</head>
<style>
body {
  padding:5px;
  max-width:1800px;
  margin: auto;

}
</style>
<body>
      <h1 align="center">Mail send</h1>
      <hr>
         <div class='row'>
          <div class='col-md-12'>
            <div class='col-md-1'>
            </div>
            <div class="col-md-10">
                <table class="table table-bordered">
                  <form method="post" action="tracker" >
                     {{ csrf_field() }}

                     <input type="text" name="mail_to" placeholder="To:"style=" margin: 0px;width: 1800.975px;height: 40px;" required>
                      <br/>
                      <input type="text" name="mail_from" placeholder="From:"style=" margin: 0px;width: 1800.975px;height: 40px;" required>
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

         <!-- body:<textarea name="mail_body" rows="2" cols="40" ></textarea> -->
   <script>
   ClassicEditor
   .create( document.querySelector( '#editor' ) )
   .catch( error => {
     console.error( error );
   } );
   </script>
</body>
 </html>
