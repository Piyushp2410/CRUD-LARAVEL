@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-5 shadow text-dark">
                <ul class="navbar-link">
                    <li><a href="/addblogs">Add blogs</a></li>
                    <li><a href="/manageblogs">Manage blogs</a></li>
                </ul>
            </div>

            <div class="col-md-8 ms-5 h-50 shadow p-5 text-dark">
                <h4>Manage Blogs Here</h4>

                {{-- seccess message using session --}}
                @if (session('del'))
                    <div class="alert alert-danger">
                        <span class="text-dark">{{ session('del') }}</span>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-primary">
                        <span class="text-dark">{{ session('success') }}</span>
                    </div>
                @endif

                <form method="POST">
                    @csrf
                    <div class="mb-3">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Discriptios</th>
                                    <th scope="col">Added Date</th>
                                    <th scope="col">Update Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>{{ $row->updated_at }}</td>
                                        <td><a href='{{ URL('/manageblogs/' . $row->id) }}'><span
                                                    class="btn btn-danger btn-sm bi bi-trash test-white"></span></a> | <a
                                                href='{{ URL('/editblogs/' . $row->id) }}'><span
                                                    class="btn btn-primary btn-sm bi bi-pencil test-white"></span></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    @endsection
