
@extends("layout")

@section("sadrzajStranice")

    <h2>Edit Contact</h2>

    <form  method="post" action="{{route("updateContact" , $singleContact->id)}}" >
        @csrf

        Name:
        <input type="text" name="email" value="{{$singleContact->email}}">

        Subject:
        <input type="text" name="subject" value="{{$singleContact->subject}}">

        Message:
        <textarea name="message"> {{$singleContact->message}}"</textarea>


        <button class="btn btn-primary" type="submit">Edit</button>
    </form>

@endsection
