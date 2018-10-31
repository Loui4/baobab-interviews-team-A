@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="{{ route('paste.store') }}" method="post">
                                <div class="form-group">

                                    @csrf
                                    <label for="">title</label>
                                    <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="form-group">
                                    <label for="">contents</label>
                                    <textarea class="form-control" name="content" id="" rows="3"></textarea>
                                </div>
                                @foreach($users as $user)
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="user[]" id="" value="{{$user->id}}">
                                            {{$user->name}}
                                        </label>
                                    </div>
                                @endforeach

                                <button class="btn btn-primary" type="submit">submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




























