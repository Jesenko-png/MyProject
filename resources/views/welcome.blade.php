@extends("layout")

@section("naslovStranice")
    <h1>Glavna Stranica</h1>
@endsection

@section("sadrzajStranice")
    <p>Trenutno vrijeme je {{ $trenutnoVrijeme }}</p>
    @if($sat >= 0 && $sat <= 12)
        <p>Dobro jutro!</p>
    @else
        <p>Dobar dan!</p>
    @endif
@endsection

@section("titl")
    Pocetna stranica
@endsection
