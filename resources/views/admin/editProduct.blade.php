    @extends("layout")

    @section("sadrzajStranice")

        <h2>Edit product</h2>

        <form  method="post" action="{{route("updateProizvoda", $product->id) }}">
            @csrf

            Name:
            <input type="text" name="name" value="{{$product->name}}">

            Description:
            <input type="text" name="description" value="{{$product->description}}">

            Amount:
            <input type="number" name="amount" value="{{$product->amount}}">

            Price:

            <input type="number" name="price" value="{{$product->price}}">

            Image:
            <input type="text" name="image" value="{{$product->image}}">

            <button class="btn btn-primary" type="submit">Edit</button>
        </form>

    @endsection
