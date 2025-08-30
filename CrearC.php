<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Crear Cuenta <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="#6cd085"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ball-football"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 7l4.76 3.45l-1.76 5.55h-6l-1.76 -5.55z" /><path d="M12 7v-4m3 13l2.5 3m-.74 -8.55l3.74 -1.45m-11.44 7.05l-2.56 2.95m.74 -8.55l-3.74 -1.45" /></svg></h1>
    </header>

    <nav>
        <ul> 
            <li> 
                <a href ="#">Categorias</a>
                <ul>
                    <li><a href="#">Año</a></li>
                    <li><a href="#">País</a></li>
                    <li><a href="#">Likes</a></li>
                    <li><a href="#">Comentarios</a></li>
                </ul>
            </li>
            <li><a href ="InicioSesion.php">Inicio de Sesion</a></li>
            <li><a href ="Pagina.php">Menu Principal</a></li>
        </ul>
    </nav>

    <main>
        <form action="Pagina.php" class="Formulario">
            <input type="text" name="Name" placeholder="Ingresa el nombre...">
            <input type="text" name="LastName" placeholder="Ingresa el apellido...">
            <input type="date" name="Birthday">
            <input type="password" name="Password" placeholder="Ingresa la contraseña...">
            <input type="password" name="PasswordVer" placeholder="Verifica la contraseña...">

            <label for="nationality">Selecciona tu nacionalidad:</label>
            <select name="nationality" id="nationality" size="3">
                <option value="Mexico">México</option>
                <option value="USA">Estados Unidos</option>
                <option value="Canada">Canadá</option>
            </select>

            <button>Registrarte</button>
        </form>
    </main>

    <footer>
        <p class="Resaltado">© 2025 Mi Pagina de Mundiales | MiPaginadeMundiales@gmail.com | 815678921</p>
    </footer>
</body>

</html>