@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')
<div class="content-wrapper "style="margin-top:  50px">

    <section class="content">

        <div class="row">
          <div class="col-md-11">

                          <div class="box box-primary">
                              <div class="box-header">
                                  <h3 class="box-title">Email </h3>
                                    <button type="button" class="pull-right btn btn-danger" onclick="window.location='{{ url("compose") }}'">Compose Mail</button>
                              </div>
                              <div class="box-body">
                                <div class="table-responsive">
                                    <table id="userTable" class="table table-striped table-bordered" width="100%">
                                          <thead>
                                                  <tr class="table-Info" >
                                                      <th  style="width:  20%">Date</th>
                                                      <th  style="width:  40%">Recipient</th>
                                                      <th  style="width:  30%">Subject</th>
                                                      <th style="width:  10%">Action</th>
                                                  </tr>
                                            </thead>
                                                  <tbody>
                                                    @foreach($emails as $value)
                                                      <tr>
                                                          <td>{{$value->created_at->diffForHumans()}}</td>
                                                          <td>	{{$value->mail_to}}</td>
                                                          <td>{{$value->mail_sub}}</td>
                                                          <td>
                                                             <form action="/emailldelete/{{ $value->id }}" method="post">
                                                                      {{ method_field('delete') }}
                                                                      {{csrf_field()}}
                                                                      <button class="  btn  btn-large glyphicon glyphicon-trash" type="submit"></button>
                                                                </form>
                                                      </tr>
                                                      @endforeach
                                                    </tbody>
                                      </table>
                                    </div>
                              </div>
                          </div>
                      </div>
        </div>
      </section>
  </div>
@endsection
