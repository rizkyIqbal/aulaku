<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/logincok.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <section class="konten">
            <img src="{{ URL::asset('images/aulaku.png'); }}" alt="">
            <p class="p">Aula.ku yang membantu anda
                untuk mempermudah pemesanan
                tempat untuk acara anda.</p>
        </section>
        <section class="form login">
            <header>Aula.ku</header>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your Email address"></input>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password"></input>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Login"></input>
                </div>
                <div class="link">
                    Don't have account?
                    <a href="{{ route('register') }}">Signup now!</a>
                </div>
            </form>
        </section>
    </div>
</body>

</html>