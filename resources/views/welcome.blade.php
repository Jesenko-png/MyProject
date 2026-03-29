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
<form method="post" action="/send-contact">
    @if($errors->any)
        <p>Greska : {{ $errors->first() }}</p>
    @endif
    @csrf
    <input type="email" name="email" placeholder="Unesite vasu email stranicu">
    <input type="text" name="subject" placeholder="Unesite naslov poruke">
    <textarea name="description"></textarea>
    <button type="submit">Posalji poruku</button>
</form>

@endsection

@section("titl")
    Pocetna stranica
@endsection
