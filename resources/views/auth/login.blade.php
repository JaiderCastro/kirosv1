@extends('admin.headlogin')

<body>

    <div class="card">
       <h3 class="card__title">Iniciar Sesion En K-iros</h3>

       <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <div>

            <input  type ="email" placeholder="Email"  class="form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  />

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>Usuario de correo o contraseña incorrectas!</strong>
                </span>
            @enderror

        </div>


        <div>

            <input type="password" placeholder="Password" class="form__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        </div>






         <button  type="submit" class="form__button">Entrar</button>


       </form>

       <div class="card__footer">

        <a href="#">¿Olvido su contraseña?</a>

       </div>





    </div>
</body>
