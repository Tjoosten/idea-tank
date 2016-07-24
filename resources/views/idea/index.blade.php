@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(count($ideas) > 0)
                    <div class="panel panel-default">
                        {{-- Panel heading --}}
                        <div class="panel-heading">
                            Ideas:

                            <a class="pull-right label label-success" href="{{ route('idea.create') }}">
                                <span class="fa fa-plus"></span> Add idea
                            </a>
                        </div>

                        {{-- Panel body --}}
                        <ul class="list-group">

                            @foreach($ideas as $idea)
                                <li class="list-group-item">
                                    <strong>{{ $idea->title }}</strong> </br>

                                    <span class="text-muted">
                                        <small> Created at: {{ $idea->created_at }}</small>

                                        <div class="pull-right">
                                            <a href="" class="label label-primary">Show</a>
                                            <a href="" class="label label-info">Edit</a>
                                            <a href="{{ route('idea.destroy', $idea->id) }}" class="label label-danger">Delete</a>
                                        </div>
                                    </span>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                @else
                    <div class="alert alert-danger">
                        No ideas found.
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection