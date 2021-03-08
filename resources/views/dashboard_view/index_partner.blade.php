
@extends('dashboard_layouts.index')

@section('content')
    
    <div class="pull-right">
        {{-- {{ route('partners.create_partner') }} --}}
        <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
        <a href="create/partner" class="btn btn-primary me-md-2" type="button">Add New</a>
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
            @foreach ($partner as $partner)


                <tr>
                    <th></th>
                    <td>{{ $partner->partner_email }}</td>
                    {{-- {{ route('visitors.edit',$visitor->id)}} --}}
                    <td><a href="{{ route('partners.edit',$partner->id)}}" class="btn btn-success">EDIT</a></td>
                  {{-- <td>  <form action="{{ action('VisitorController@destroy') }}" method="post"> --}}
                  <td>  <form action="{{ route('partners.destroy', $partner->id) }}" method="post">
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