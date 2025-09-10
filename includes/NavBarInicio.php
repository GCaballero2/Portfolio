<nav class="navbar navbar-expand-lg navbar-dark fixed-top border-bottom">
  <div class="container">
    <!-- Logo / Inicio -->
    <a class="navbar-brand d-flex align-items-center" href="#" id="logoInicio">
      <img src="img/LOGO.jpg?v=2" alt="Logo Seralis" class="logo-navbar me-2">
      Seralis
    </a>

    <!-- Botón de colapso en móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenido de la navbar -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <!-- Enlaces -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php" id="linkInicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registrar Consulta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="QuienesSomos.php">Quiénes Somos</a>
        </li>
      </ul>
		<!-- Dropdown de login -->
		<div class="dropdown">
		  <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			<i class="fas fa-user-circle fa-lg me-1"></i>
			Ingresar
		  </a>
		  <div class="dropdown-menu dropdown-menu-end p-3" style="min-width: 250px;">
			<form method="post" action="login.php">
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="loginEmail" name="email" placeholder="demo">
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="loginPassword" name="password" placeholder="demo">
                </div>
                <button type="submit" class="btn btn-acento w-100">Iniciar Sesión</button>
                <div class="text-center mt-2">
                    <a href="#crear-cuenta">Crear cuenta</a>
                </div>
            </form>
		  </div>
		</div>
      </div>
    </div>
  </div>
</nav>

<body>