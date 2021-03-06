<navbar class="navbar navbar-expand-md navbar-dark bg-dark header">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/img/logo.jpg" height="50"> FinSmart
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION["EmpresaID"])) : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/comitentes">
                                <i class="bi bi-arrow-left-right"></i> Movimiento de Comitentes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/movimientos">
                                <i class="bi bi-journal-text"></i></i> Estado de Cuenta Corriente
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/cartera">
                                <i class="bi bi-wallet2"></i> Cartera
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/financiar">
                                <i class="bi bi-percent"></i> Financiar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">
                                <i class="bi bi-power"></i> Salir
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/login">
                                <i class="bi bi-power"></i> Entrar
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </navbar>