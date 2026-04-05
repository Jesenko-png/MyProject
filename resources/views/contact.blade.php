@extends("layout")

@section("sadrzajStranice")
    <div class="container mt-5">
        <form method="post" action="{{route("sendContact")}}">
    @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email adresa</label>
                <input type="email" class="form-control" name="email" placeholder="ime@email.com">
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Naslov poruke">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Poruka</label>
                <textarea class="form-control" name="description" rows="5" placeholder="Unesite poruku"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Pošalji</button>

        </form>
    </div>
@endsection

@section("titl")
    Kontakt
@endsection

