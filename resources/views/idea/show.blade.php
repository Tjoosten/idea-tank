@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(count($idea) === 0)
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        No idea found under this ID.
                    </div>
                </div>
            @else
                {{-- Idea description --}}
                <div class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong><code>#{{ $idea->id }}</code> {{ $idea->title }}</strong>
                        </div>

                        <div class="panel-body">
                            {{ $idea->description }}
                        </div>
                    </div>
                </div>

                {{-- Idea information--}}
                <div class="col-md-3">
                    <ul class="list-group">
                        <li class="list-group-item text-muted">Idea information:</li>

                        {{-- Information items --}}
                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Author:</strong>
                            </span>
                            <span class="label label-info">Kieran Claessens</span>
                        </li>

                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Group:</strong>
                            </span>
                            <span class="label label-danger">Hacking</span>
                        </li>

                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Created at:</strong>
                            </span>
                            <span class="label label-success">
                                {{ date('d-m-Y', strtotime($idea->created_at)) }}
                            </span>
                        </li>

                        <li class="list-group-item text-right">
                            <span class="pull-left">
                                <strong>Updated at;</strong>
                            </span>
                            <span class="label label-success">
                                {{ date('d-m-Y', strtotime($idea->updated_at)) }}
                            </span>
                        </li>

                    </ul>
                </div>

                {{-- Idea comment --}}
            @endif
        </div>
    </div>
@endsection