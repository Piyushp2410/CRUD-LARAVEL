@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-5 shadow text-dark">
                <ul class="navbar-link">
                    <li><a href="/addblogs">Add blogs</a></li>
                    <li><a href="/manageblogs">Manage blogs</a></li>
                </ul>
            </div>

            <div class="col-md-7 ms-5 h-50 shadow p-5 text-dark">
                <h4>Edit Blogs Here</h4>

                {{-- seccess message using session --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        <span class="text-dark">{{ session('success') }}</span>
                    </div>
                @endif

                {{-- validation error message  --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" value="{{ $editblogs->title }}"
                            class="form-label text-success">Edit title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                            placeholder="Blogs title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-success">Edit Blogs
                            Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $editblogs->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="updatelogs" value="updateblogs" class="btn btn-lg btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
