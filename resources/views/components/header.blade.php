<header>

    <h1>Videogames</h1>

    @auth

    <div class="container-user">
        Benvenuto {{ Auth::user()->name }}
    </div>
    
    <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>

    @else

    <h2>REGISTER</h2>
    <form action="{{ route('register') }}" method="POST">
        
        @method('POST')
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation">
        <input class="btn btn-primary" type="submit" value="REGISTRATI">

    </form>

    <br><br>

    <h2>LOGIN</h2>
    <form action="{{ route('login') }}" method="POST">

        @method('POST')
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input class="btn btn-primary" type="submit" value="LOGIN">

    </form>
    @endauth

</header>