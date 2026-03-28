@extends("layout")

@section("naslovStranice")
    <h1>Glavna Stranica</h1>
@endsection

@section("sadrzajStranice")
    <p>Trenutno vrijeme je {{ $trenutnoVrijeme }}</p>
    @if($sat >= 0 && $sat <= 12)
        <p>Dobro jutro!</p>
    @else
        <p>Dobar dan!</p>s
    @endif

    <h1>Last 6 products:</h1>
    @foreach($products as $product)
        {{$product->name}}
        {{$product->description}}<br>
    @endforeach


@endsection

@section("titl")
    Pocetna stranica
@endsection
