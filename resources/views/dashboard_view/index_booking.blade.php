@extends('dashboard_layouts.index')

@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
        <a href="create/booking" class="btn btn-primary me-md-2" type="button">Add New</a>
    </div>
    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Passenger</th>

                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $booking)


                <tr>
                
                    <th>{{ $booking->booking_name }}</th>
                    <td>{{ $booking->booking_email }}</td>
                    <td>{{ $booking->booking_mobile }}</td>
                    <td>{{ $booking->booking_passenger }}</td>
                    {{-- {{ route('visitors.edit', $visitor->id) }}
                    --}}
                    <td><a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-success">EDIT</a></td>
                    {{-- <td>
                        <form action="{{ action('VisitorController@destroy') }}" method="post">
                            --}}
                    <td>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="post">
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
