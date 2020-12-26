


@extends('Dashboard.layout.master')




@section('content')
    <!-- Main content -->
    <section class="content">
{{--        @include('dashboard.layouts.messages')--}}
{{--        {{route('dashboard.posts.store')}}--}}
        <form method="post" action="{{route('project.update',$project->id)}}" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Project Title</label>
                                <input type="text"  name="title" value="{{$project->title}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription"> Project Describe</label>
                                <textarea id="inputDescription" name="Describe" class="form-control" rows="4">
                            {{$project->Describe}}

                                </textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Update" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
