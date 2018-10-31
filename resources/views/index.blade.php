@extends('layout.app')
@section('main-content')

<div class="col col-md-12">
        <h4 class="page-header"><a href="../../dashboard.php">Dashboard</a>/Pastes</h4>
        </div>
        <div class="col col-md-12">
            <a data-toggle="modal" href="{{ URL::to('/create') }}"title="add" class="btn btn-primary add-button main-color"><i class="glyphicon glyphicon-plus"></i> New Paste</a>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control " onkeyup="myFunction()" id="search" placeholder="Search">
                </div>
            </form>
            <hr />
        </div>

        <div class="col col-md-12">
        <table class="table table-bordered table-striped" id="myTable">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Operation</th>
                  </tr>
                </thead>
                <tbody>
            @foreach($pastes as $paste)
                  <tr id="hide" >
                    <td>{{$paste->title}}</td>
                    <td>{{$paste->content}}</td>
                    <td>{{$paste->created_at}}</td>
                    <td>
                        <a  data-toggle="modal" href="#view{{$paste->id}}" title="Edit"><i class="glyphicon glyphicon-eye-open"></i></a>

                        <a data-toggle="modal" href='#tags{{$paste->id}}' title="tags"><i id="ps" class="glyphicon glyphicon-user"></i></a>
                    </td>



                  <!--delete position moodal-->
                  <div class="modal fade" data-backdrop="static" id="view{{$paste->id}}">
                      <div class="modal-dialog"  style="border-radius:0px">
                          <div class="modal-content">
                              <div class="modal-header custom-modal-header-danger">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">{{$paste->title}}</h4>
                              </div>
                              <div class="modal-body">

                                  <textarea name="" class="form-control" id="" cols="30" rows="10">
                                      {{$paste->content}}
                                  </textarea>

                              </div>
                          </div>
                      </div>
                  </div>

                      <div class="modal fade" data-backdrop="static" id="tags{{$paste->id}}">
                      <div class="modal-dialog modal-sm"  style="border-radius:0px">
                          <div class="modal-content">
                              <div class="modal-header custom-modal-header-danger">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Tagged Users</h4>
                              </div>
                              <div class="modal-body">

                                    <ul>
                                   @foreach($paste->tags as $user )
                                        <li>{{$user->name}}</li>
                                   @endforeach
                                   </ul>

                              </div>
                          </div>
                      </div>
                  </div>





                  <!--end-->

                 </tr>

            @endforeach
            {{$pastes->links()}}
                </tbody>
            </table>
        </div>


@endsection