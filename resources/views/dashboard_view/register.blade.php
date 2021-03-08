@extends('dashboard_layouts.index')

@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
       

    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i
                class="fas fa-backward "></i> </a>
                <a href="create" class="btn btn-primary me-md-2" type="button">Add New</a>
    </div>
    <table class="table table-striped">
        <thead  class="table-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
               <tr>
                    <th>{{ $user->name }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->usertype }}</td>
                    <td><a href="/dashboard/admin/register/{{ $user->id }}" class="btn btn-success">EDIT</a></td>
                    <td><a href="/dashboard/admin/delete/{{ $user->id }}" class="btn btn-danger">DELETE</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>





@endsection
