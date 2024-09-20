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

            <div class="col-md-7 ms-5 shadow p-5 text-dark">Welcome to dashboard of Laravel</div>
        </div>
    </div>


@endsection
