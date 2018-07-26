@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')

<div class="content-wrapper "style="margin-top:  50px">
                                  <!-- Content Header (Page header) -->


                                  <!-- Main content -->
                                  <section class="content">

Add
                                <div class="row">
                                        <div class="col-md-12 box box-primary">
                                          <div class="row">
                                            <div class="col-md-2">
                                            </div>
                                            <div class="col-md-8">
                                              <h3 class="text-center">
                                              Edit Email Account
                                              </h3>
                                              <form role="form" action="{{'/emailaccounts/'.$emailacc->id}}"  method='post'>

                                                                    {{ method_field('patch') }}
                                                                    {{csrf_field()}}




                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >From Name</label>
                                                            <input type="text" name="fromname" class="form-control" value="{{$emailacc->from_name}}">

                                                        </div>
                                                        <div class="form-group">
                                                          <label class="form-control-placeholder" >From Email</label>
                                                          <input type="text" name="fromemail" class="form-control"  value="{{$emailacc->from_mail}}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >Username</label>
                                                            <input type="text" name="usernmame" class="form-control" value="{{$emailacc->username}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >Password</label>
                                                            <input type="password" name="upassword" class="form-control" value="{{$emailacc->password}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >Host</label>
                                                            <input type="text" name="hostname" class="form-control" value="{{$emailacc->mail_server_type}}" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >Port</label>
                                                            <input type="text" name="portnumber" class="form-control" value="{{$emailacc->port}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >Encryption</label>
                                                            <input type="text" name="secure" class="form-control" value="{{$emailacc->secure}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="Submit" class="btn btn-primary btn-block">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              </form>
                                            </div>
                                            <div class="col-md-2">
                                            </div>
                                          </div>
                                        </div>

                                      <!-- /.row -->
                                  </section>
                                  <!-- /.content -->
                              </div>
@endsection
