@extends('dashboard_layouts.index')

@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
        <a href="create/jurny" class="btn btn-primary me-md-2" type="button">Add New</a>
    </div>
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Date</th>
                <th scope="col">Break</th>
                <th scope="col">Arrival time</th>
                <th scope="col">Driver name</th>
                <th scope="col">price</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">Display</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jurny as $jurny)


                <tr>

                    <th>{{ $jurny->from }}</th>
                    <td>{{ $jurny->to }}</td>
                    <td>{{ $jurny->date }}</td>
                    <td>{{ $jurny->break }}</td>
                    <td>{{ $jurny->arrival_time }}</td>
                    <td>{{ $jurny->driver_name }}</td>
                    <td>{{ $jurny->price }}</td>
                    {{-- {{ route('visitors.edit', $visitor->id) }} --}}
                    <td><a href="{{ route('jurnys.edit', $jurny->id) }}" class="btn btn-success">EDIT</a></td>
                    {{-- <td>
                        <form action="{{ action('VisitorController@destroy') }}" method="post"> --}}
                    <td>
                        <form action="{{ route('jurnys.destroy', $jurny->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                    </td>
                    {{-- <td> <button type="submit" class="btn btn-success">Display</button></td> --}}
                    <td><a class="btn btn-primary" href="{{ route('jurnys.show',$jurny->id) }}">Show</a></td>
                 
                    </form>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
