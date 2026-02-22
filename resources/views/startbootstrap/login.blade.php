@extends('startbootstrap.model')
@section('body')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="col-md-10 mx-auto col-lg-5">
                <form action="/login" method="POST" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email"
                            placeholder="name@example.com">
                        <label for="floatingInput">E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="senhas"
                            placeholder="Password">
                        <label for="floatingPassword">Senha </label>
                    </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                    <hr class="my-4">
                    
                </form>
            </div>
        </div>
    </div>
@endsection
