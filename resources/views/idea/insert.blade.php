@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="margin-top: -10px;"class="page-header">
                    <h2>Insert new idea</h2>
                </div>

                <form action="{{ route('idea.store') }}" method="POST" class="form-horizontal">
                    {{-- CSRF token --}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title" class="col-md-2 control-label">
                            <div class="pull-left">
                                Title: <span class="text-danger">*</span>
                            </div>
                        </label>
                        <div class="col-md-4">
                            <input type="text" name="title" placeholder="Idea title" id="title" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category" class="col-md-2 control-label">
                            <div class="pull-left">
                                Category: <span class="text-danger">*</span>
                            </div>
                        </label>

                        <div class="col-md-4">
                            <select name="category" class="form-control" id="category">
                                <option value="" selected>-- select category --</option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-md-2 control-label">
                            <div class="pull-left">
                                Description: <span class="text-danger">*</span>
                            </div>
                        </label>

                        <div class="col-md-4">
                            <textarea name="description" class="form-control" placeholder="Idea explanation" id="description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-offset-2">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection