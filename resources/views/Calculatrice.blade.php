<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: 'Calibri' sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        form {
            display: inline-block;
            text-align: left;
        }
        input, select, button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
        }
        .resultat {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Calculatrice d'Adam</h1>
    
    <form action="{{ route('calculer') }}" method="POST">
    @csrf
        <label for="nombre1">Nombre 1 :</label>
        <input type="number" name="nombre1" id="nombre1" required step="any">
        <br>

        <label for="operation">Opération :</label>
        <select name="operation" id="operation" required>
            <option value="addition">Addition</option>
            <option value="soustraction">Soustraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <br>

        <label for="nombre2">Nombre 2 :</label>
        <input type="number" name="nombre2" id="nombre2" required step="any">
        <br>
        <button type="submit">Calculer</button>
    </form>

    @if (isset($resultat))
        <div class="resultat">
            <h2>Résultat : {{ $resultat }}</h2>
        </div>
    @endif
</body>
</html>