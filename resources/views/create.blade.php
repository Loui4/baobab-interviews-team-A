@extends('layout.app')
@section('main-content')
<div class="col col-md-12">
      <h4 class="page-header"><a href="{{ URL::to('/dashboard') }}">Dashboard</a>/<a href="{{ URL::to('/paste') }}">Paste</a>/Create</h4>
  </div>

  <div class="col col-md-12">

      <form action="{{route('paste.store')}}"  class="form-horizontal" method="post">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-3" for="email">Title:</label>
            <div class="col-md-5">
              <input type="text" name="title" class="form-control" name="title" placeholder="name">
            </div>

          </div>

          <div class="form-group">
            <label class="control-label col-md-3" for="pwd">Content</label>
            <div class="col-md-5">
                <textarea name="content" class="form-control" name="content"placeholder="" rows="5"></textarea>
            </div>

          </div>

           <div id="tag" class="form-group">
            <label class="control-label col-md-3" for="email">Tag:</label>
            <div class="col-md-5">
                    <select id="mySelect" name ='select' class="form-control">
                     <option name="yes">--</option>
                     <option id="hide" name="yes">Yes</option>
                     <option name="no">No</option>
                    </select>

            </div>
            <div class="col-md-4">
                <p class="input-error"></p>
            </div>
          </div>
           <div class="form-group" id="users" style="display: none;">
            <label class="control-label col-md-3" for="pwd">Users:</label>

           @foreach($users as $user)
            <div class="col-md-5">
               <input type="checkbox" name="user[]" value="{{$user->id}}" > {{$user->name}} <br>
            </div>
           @endforeach
            <div class="col-md-4">
            </div>
          </div>

           <div class="form-group">
            <div class="col-md-offset-3 col-md-10">
              <button  type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>


      </form>
  </div>
<script>
$(document).ready(function(){
$('#mySelect').change(function(){ 
    var value = $(this).val();

    if(value=="Yes"){
      $("#tag").hide();
      $("#users").show();
    }
});
 
    // $("#show").click(function(){
    //     $("p").show();
    // });
});
</script>
@endsection