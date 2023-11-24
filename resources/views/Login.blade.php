<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >

    <title>Login</title>
    
</head>
<body>
    <div class="login-container">
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <a href="/"><img class="logo" src="{{ asset('img/task.png') }}" alt="logo"></a>
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
        @error('email')
            <span role="alert">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" required>
        @error('password')
            <span role="alert">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit">Entrar</button>
    </div>

    <div>
        <h1 hide></h1>
    </div>
    
    <div>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Lembre-se de mim</label>
    </div>

    <div>
        <h1 hide></h1>
    </div>
    <div class="registrar">
        <a href="{{ route('register') }}">Registre-se</a>
    </div>
</form>
</div>
</body>
</html>