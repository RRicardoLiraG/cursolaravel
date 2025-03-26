@extends('layout')

@section('content')
    <div style='text-align:center;'>
        <h1 style='text-align:center;'>Resta</h1>

        <form action="resta" method="post">
            @csrf
            <label for="numero1">Número 1:</label><br>
            <input type="number" id="numero1" name="numero1" required>
            <br>
            <br>
            <label for="numero2">Número 2:</label><br>
            <input type="number" id="numero2" name="numero2" required><br><br>
            <button type="submit">Resta</button>
            <button type="reset" id="resetButton">Limpiar</button>
        </form>

        @if (isset($resultado))
            <div id="resultado">
                <p>El resultado de la resta es:{{ $resultado }}</p>
            </div>
        @endif
    </div>

    <script>
        // Obtener el botón reset
        document.getElementById('resetButton').addEventListener('click', function() {
            document.getElementById('resultado').style.display = 'none';
        });
    </script>
@endsection
