

<div class="admin-login">
    <div class="container">
        <div class="login-form">
            <div class="login-heading">
                <h4>Login</h4>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@gmail.com">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*************">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="admin-login-btn" type="submit">Login</button>
                </div>
                <div class="fotget-pass">

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            </form>
        </div>
    </div>
</div>
<style type="text/css">
.container {
    width: 300px;
    margin-top: 100px;
}

.admin-login {
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-form {
    background: #f2f2f2;
}

.login-form input {
    width: 100%;
    height: 40px;
    margin: 10px 0;
}

.login-form {
    background: #f2f2f2;
    padding: 30px;
}

.login-form label {
    color: #606060;
    margin-bottom: ;
}

.login-heading h4 {
    text-align: center;
    font-size: 30px;
    font-weight: 700;
    color: #535353;
    margin: 15px 0;
}

.admin-login-btn {
    border: none;
    background: black;
    color: white;
    padding: 8px 20px;
    border-radius: .5rem;
    margin-top: 20px;
    cursor: pointer;
}

.invalid-feedback {
    color: #11111;
    background: orange;
    padding: 2px;
}
</style>