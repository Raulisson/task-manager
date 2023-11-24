<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}" >

    <title>Registrar</title>

</head>
<body>
    <div class="max-container">
    <div class="register-container">
    <form method="POST" action="{{ route('register') }}">
    @csrf
    
    <div>
        <label for="name">Nome</label>
        <input id="name" type="text" name="name" value="" required autofocus>
    </div>

    <div>
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" value="" required>
    </div>

    <div>
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirmar Senha</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <button type="submit">Registrar</button>
    </div>
    @error('password')
            <span role="alert">{{ $message }}</span>
        @enderror
</form>
</div>
</div>
</body>
</html>