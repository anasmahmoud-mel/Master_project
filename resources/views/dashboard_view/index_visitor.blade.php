@extends('dashboard_layouts.index')

@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
        <a href="create/visitor" class="btn btn-primary me-md-2" type="button">Add New</a>
    </div>
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitor as $visitor)


                <tr>
                    <th>{{ $visitor->login_name }}</th>
                    <td>{{ $visitor->login_email }}</td>
                    {{-- {{ route('visitors.edit', $visitor->id) }}
                    --}}
                    <td><a href="{{ route('visitors.edit', $visitor->id) }}" class="btn btn-success">EDIT</a></td>
                    {{-- <td>
                        <form action="{{ action('VisitorController@destroy') }}" method="post">
                            --}}
                    <td>
                        <form action="{{ route('visitors.destroy', $visitor->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                    </td>
                    </form>

                </tr>
            @endforeach
        </tbody>
    </table>





@endsection
