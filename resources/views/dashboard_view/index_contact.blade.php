@extends('dashboard_layouts.index')

@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="/dashboard/admin" title="Go back"> <i class="fas fa-backward "></i> </a>
    </div>
    <table class="table table-striped ">
        <thead class="table-light ">
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Show</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $contact)


                <tr>

                    <th>{{ $contact->contact_fname }}</th>
                    <th>{{ $contact->contact_lname }}</th>
                    <th>{{ $contact->contact_email }}</th>
                    <th>{{ $contact->contact_subject }}</th>
                    <th>{{ $contact->contact_message }}</th>

                    <td><a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-success">Show</a></td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
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
