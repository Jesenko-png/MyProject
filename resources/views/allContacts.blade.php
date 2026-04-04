@extends("layout")

@section("titl")
    Products
@endsection


@section("naslovStranice")

    <div class="container mt-4">

        <h1>Contacts</h1>

    </div>

@endsection


@section("sadrzajStranice")
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th>Action</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($allContacts as $contact)

            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->message }}</td>
                <td> <a class="btn btn-primary"> Edit</a>
                    <a class="btn btn-danger" href="/admin/delete-contact/{{ $contact->id }}">Delete</a></td>

            </tr>


        @endforeach
        </tbody>

    </table>

@endsection


