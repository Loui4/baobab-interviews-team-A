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

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>no</th>
                                    <th>title</th>
                                    <th>content</th>
                                    <th>tags</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pastes as $paste)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $paste->title }}</td>
                                        <td>{{ $paste->content }}</td>
                                        <td>   @foreach ($paste->tags as $user)
                                                {{ $user->name }}
                                            @endforeach
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
@endsection















