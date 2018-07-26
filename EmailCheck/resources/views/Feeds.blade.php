@extends('layouts.app')
@include('layouts.EmailSidebar')
@section('content')
<div class="content-wrapper "style="margin-top:  50px">

  <section class="content">

      <div class="row">
        <div class="col-md-12">
                  <div class="box-body">
                      <div class="table-responsive">
                          <table id="userTable" class="table table-striped table-bordered" width="100%">
                                        <thead>
                                            <tr class="table-Info">
                                              <th>#</th>
                                                <th>Mail To</th>
                                                <th>Subject</th>
                                                <th >Delivered</th>
                                                <th>Counts</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($emailre as $fe)
                                            <tr>
                                                <td>{{$fe->id}}</td>
                                                <td onclick="fetchEmaildetail()">{{$fe->mail_to}} </td>
                                                <td>{{$fe->mail_sub}}</td>
                                                <td> {{$fe->created_at}}</td>
                                                <td>{{$fe->counts}}</td>
                                                  <td>

  <a class="btn btn-small btn-success" href="/showemaildetail/{{$fe->id}}">view</a>
                      </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                            </table>
                          </div>
                      </div>
            </div>
          </div>
        </div>
    </div>
    <script type="text/javascript" charset="utf-8">
                                            $(document).ready(function () {
                                                $('#userTable').DataTable();
                                            });
                                            function fetchEmaildetail()
                                            {
                                                window.location.href = "/showemaildetail/{{$fe->id}}";
                                            }
    </script>
  </section>
</div>

@endsection
