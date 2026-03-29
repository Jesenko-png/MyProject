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

    <div class="container">

        @foreach($products as $product)

            <div class="card mb-3">

                <div class="card-body">

                    <h5 class="card-title">{{ $product->name }}</h5>

                    <p class="card-text">{{ $product->description }}</p>

                    <p>Price: {{ $product->price }} €</p>

                    <p>Amount: {{ $product->amount }}</p>

                </div>

            </div>

        @endforeach

    </div>

@endsection
