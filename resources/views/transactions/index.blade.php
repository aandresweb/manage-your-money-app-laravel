<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <index-transactions-component 
            logout-route="{{ route('auth.logout') }}"
            areas-route="{{ route('areas.index') }}"
            transactions-route="{{ route('transactions.index') }}"
        />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>