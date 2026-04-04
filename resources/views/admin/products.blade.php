@extends("layout")

@section("titl")
    Products
@endsection


@section("naslovStranice")

    <div class="container mt-4">

        <h1>Products</h1>

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
            <th scope="col">Amount</th>
            <th>Action</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
      @foreach($products as $product)

          <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->amount }}</td>
              <td> <a class="btn btn-primary" href="{{route('editProizvoda' , $product->id) }}"> Edit</a>
                  <a class="btn btn-danger" href="{{route("izbrisiProduct" ,$product->id) }}">Delete</a></td>

          </tr>


      @endforeach
        </tbody>

    </table>

@endsection
