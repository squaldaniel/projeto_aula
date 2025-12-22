@extends('startbootstrap.model')
@section('title', 'Criação de conta')
@section('subtitle', 'Aqui você criar a sua conta')
@section('body')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Por favor, corrija os erros abaixo:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Criar Conta</h3>
                                </div>
                                <div class="card-body">
                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="usermail" name="usermail" type="email"
                                                placeholder="name@example.com" required />
                                            <label for="usermail">Endereço de Email</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="userpasse" name="userpasse"
                                                        type="password" placeholder="Escolha uma senha" required />
                                                    <label for="userpasse">Passe </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="userpasseconfirma"
                                                        name="userpasseconfirma" type="password"
                                                        placeholder="repita a senha" required />
                                                    <label for="userpasseconfirma">Confirme o passe</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><input type="submit" class="btn btn-success btn-block"
                                                    value="Criar" onclick="validatePassword()"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function validatePassword(event) {
            // Previne o envio automático ao clicar no botão (já que o botão é submit, mas vamos controlar manualmente)
            event.preventDefault();

            const senha = document.getElementById('userpasse').value.trim();
            const confirmacao = document.getElementById('userpasseconfirma').value.trim();
            const email = document.getElementById('usermail').value.trim();

            // Validação básica de e-mail (opcional, mas recomendada)
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email || !emailRegex.test(email)) {
                alert('Por favor, insira um endereço de e-mail válido.');
                return;
            }

            if (!senha || !confirmacao) {
                alert('Por favor, preencha ambas as senhas.');
                return;
            }

            if (senha !== confirmacao) {
                alert('As senhas não coincidem. Verifique e tente novamente.');
                return;
            }

            if (senha.length < 6) {
                alert('A senha deve ter pelo menos 6 caracteres.');
                return;
            }

            // Se tudo estiver OK, submete o formulário
            document.querySelector('form').submit();
        }
    </script>
@endsection
