@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{-- Tab navigation --}}
            <div class="col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#idea" aria-controls="idea" role="tab" data-toggle="tab">
                            Idea's
                        </a>
                    </li>

                    <li role="presentation">
                        <a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">
                            TODO items
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Tab content --}}
            <div class="col-md-12">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="idea">
                        <div style="margin-top: 10px;">
                           <div style="padding: 7px 0;">
                               <a href="" class="btn btn-primary">Add idea</a>

                               <div class="pull-right">
                                   <form action="" method="" class="form-inline">
                                       <input type="text" name="search" placeholder="Search" class="form-control">
                                       <button class="btn btn-danger">
                                           <span class="fa fa-search"></span>
                                       </button>
                                   </form>
                               </div>
                           </div>

                            <table class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User:</th>
                                        <th>Title:</th>
                                        <th>Group:</th>
                                        <th>Actions:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ideas as $idea)
                                        <tr>
                                            <td><code>#I{{ $idea->id }}</code></td>
                                            <td>Kieran Claessen</td>
                                            <td>{{ $idea->title }}</td>
                                            <td><span class="label label-warning">Hacking</span></td>
                                            <td>
                                                <a href="" class="label label-info">Edit</a>
                                                <a href="" class="label label-info">Show</a>
                                                <a href="" class="label label-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- Pagination --}}
                            {{ $ideas->render() }}
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="todo">

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

