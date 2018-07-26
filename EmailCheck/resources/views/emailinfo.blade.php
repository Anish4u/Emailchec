@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')
<div class="content-wrapper "style="margin-top:  50px">
  <section class="content">

          <div class="jumbotron text-center">
              <h2>send on {{$fe->updated_at }}</h2>
              <p>
                  <strong>Sub:</strong> {{$fe->mail_sub}}<br>
                  <strong>count:</strong> {{ $fe->counts }}<br>
                      <strong>from:</strong> {{$fe->mail_from }}
                      <br>
                <strong>to:</strong> {{$fe->mail_to }}<br>
              </p>
          </div>
    
  </section>
</div>
@endsection
