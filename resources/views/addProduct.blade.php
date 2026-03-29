@extends("layout")

@section("sadrzajStranice")

    <form method="POST" action="/admin/add-product">
        @csrf

        @if($errors->any())
            <p style="color:red">
                {{ $errors->first() }}
            </p>
        @endif

        <table class="table">

            <tr>
                <th>Naziv</th>
                <td>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </td>
            </tr>

            <tr>
                <th>Opis</th>
                <td>
                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                </td>
            </tr>

            <tr>
                <th>Količina</th>
                <td>
                    <input type="number" name="amount" class="form-control" value="{{ old('amount') }}">
                </td>
            </tr>

            <tr>
                <th>Cijena</th>
                <td>
                    <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}">
                </td>
            </tr>

            <tr>
                <th>Slika</th>
                <td>
                    <input type="text" name="image" class="form-control" value="{{ old('image') }}">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">
                        Dodaj proizvod
                    </button>
                </td>
            </tr>

        </table>

    </form>

@endsection
