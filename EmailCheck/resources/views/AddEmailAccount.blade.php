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
                                            <!-- <div class="col-md-2">
                                            </div> -->
                                            <div class="col-md-12">
                                              <h3 class="text-center">
                                              Add New Email Account
                                              </h3>
                                              <form role="form" action="/addmailaccount"  method='post'>
                                                {{ csrf_field() }}
                                                <div class="box-body">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >From Name</label>
                                                            <input type="text" name="fromname" class="form-control " required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >Username</label>
                                                            <input type="email" name="usernmame" class="form-control" required>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <label class="form-control-placeholder" >From Email</label>
                                                          <input type="email" name="fromemail" class="form-control" required>

                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-placeholder" >Password</label>
                                                            <input type="password" name="upassword" class="form-control" required>
                                                        </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <div class="form-group col-md-12">
                                                            <label class="form-control-placeholder" > Choose Your Email Service Provider</label><br>
                                                            <select class="form-control"  name="hostname_type"   style=" margin: 0px;width: 350.975px;height: 35px;"  tabindex="-1" aria-hidden="true">
                                                              @foreach($mailserver as $value)

                                                            <option  selected value="{{$value->id}}"> {{$value->mail_service_provider}}</option>
                                                                <!-- <option >Gmail/Gsuite</option>
                                                                <option >Office 365</option>
                                                                <option >Outlook.com / Hotmail.com / Live.com</option>
                                                                <option >Yahoo Mail</option> -->


                                                                @endforeach
                                                           </select>
                                                        </div>
                                                      </div>
                                                        <!-- <div class="col-md-12">
                                                        <div class="form-group col-md-7">
                                                            <label class="form-control-placeholder" > Email Service Provider</label>
                                                            <input type="text" name="hostname" class="form-control" style=" margin: 0px;width:530px;height: 40px;" value="{{$value->mail_server_type}}"required>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <label class="form-control-placeholder" >Port</label>
                                                            <input type="text" name="portnumber" class="form-control"  style=" margin: 0px;width:200px;height: 35px;" value="{{$value->port}}" required>
                                                        </div>
                                                        <div class="form-group col-md-1">
                                                        </div>
                                                        <div class="form-group col-md-1">
                                                            <label class="form-control-placeholder" >Encryption</label>
                                                            <input type="text" name="secure" class="form-control" style=" margin: 0px;width:150px;height: 35px;" value="{{$value->secure}}" required>
                                                        </div> -->
                                                   <div class="col-md-12"> <mailservice>check</mailservice> </div>
                                                        <div class="form-group">
                                                            <button type="Submit" class="btn btn-primary btn-block">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              </form>
                                            </div>

                                          </div>
                                        </div>

                                      <!-- /.row -->
                                  </section>
                                  <!-- /.content -->
                              </div>



@endsection
