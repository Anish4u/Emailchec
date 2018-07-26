@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')
<div class="content-wrapper "style="margin-top:  50px">

    <section class="content">

        <div class="row">
          <div class="col-md-11">

                          <div class="box box-primary">
                              <div class="box-header">
                                  <h3 class="box-title">Email Accounts</h3>
<!-- <button  routerlink="addemailaccounts" >Compose Mail</button> -->
<button type="button" class="pull-right btn btn-danger" onclick="window.location='{{ url("addemailaccounts") }}'">Connect New Account</button>
                                    <!-- <a href="addemailaccounts" style="margin:15px" class="pull-right">Connect New Account</a> -->
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                  <div class="table-responsive">
                                      <table id="userTable" class="table table-bordered table-hover " width="100%">
                                          <thead>
                                              <tr class="table-Info">
                                                  <th width="10px">#</th>
                                                  <th width="50px">Name</th>
                                                  <th width="50px">From Email </th>
                                                  <th>Type</th>
                                                  <th >Status</th>
                                                  <th >Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            @foreach($emailaccounts as  $value)
                                                  <tr>
                                                      <td>{{ $value->id }}</td>
                                                      <td>{{ $value->from_name }}</td>
                                                      <td>{{ $value->from_mail }}</td>
                                                      <td>{{ $value->mail_server_type }}</td>

                                                <td>Active</td>
                                                <td>
                                                  <form action="/emailaccounts/{{ $value->id }}" method="post">
                                                        {{ method_field('delete') }}
                                                        {{csrf_field()}}
                                                        <a class=" btn  btn-default 	glyphicon glyphicon-edit" href=" /emailaccounts/{{ $value->id }}/edit "> </a>
                                                        &nbsp;&nbsp;<button class=" btn   .icon .icon-edit-sign btn-small glyphicon glyphicon-trash" type="submit"></button>
                                                  </form>
                                                  </td>
                                                </tr>
                                          @endforeach

                                          </tbody>
                                      </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
          </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
