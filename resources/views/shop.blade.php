@extends("layout")

@section("sadrzajStranice")
    @foreach($allProducts as $product)
        <p>Ime: {{$product->name}}</p>
        <p>Opis: {{$product->description}}</p>
        <p>Količina: {{$product->amount}}</p>
        <p>Cijena: {{$product->price}}</p>

    @endforeach
@endsection

@section("titl")
    Prodavnica
@endsection
