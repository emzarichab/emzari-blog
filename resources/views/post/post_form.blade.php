@extends('layouts.master')

@section('title')
    Emzari Blog
@endsection

@section('content')
    <div class="container-fluid">
        <form method="post" action="{{ route('post.createform') }}" enctype="multipart/form-data">
            <div class="row">
                <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                    <h1>Create Post</h1>
                    <div class="col-md-5">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="id_title" name="title" required
                                   aria-describedby="title" placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="name">Image</label>
                            <input type="file" name="image" class="btn btn-default" id="importFile" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="id_description" rows="15" name="description" required placeholder="Description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create post</button>
                    </div>
                </main>
            </div>
        </form>
    </div>
@endsection