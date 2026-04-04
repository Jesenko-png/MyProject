    @extends("layout")

    @section("sadrzajStranice")

        <h2>Edit product</h2>

        <form  method="post" action="{{route("updateProizvoda", $singleProduct->id) }}">
            @csrf

            Name:
            <input type="text" name="name" value="{{$singleProduct->name}}">

            Description:
            <input type="text" name="description" value="{{$singleProduct->description}}">

            Amount:
            <input type="number" name="amount" value="{{$singleProduct->amount}}">

            Price:

            <input type="number" name="price" value="{{$singleProduct->price}}">

            Image:
            <input type="text" name="image" value="{{$singleProduct->image}}">

            <button class="btn btn-primary" type="submit">Edit</button>
        </form>

    @endsection
