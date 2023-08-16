<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Competencia</title>
    <link rel="stylesheet" href="../styles/style-competencia.css">
</head>
<body>

    <header>
        <a style="background:none; " href="index.php"><img  src="../img/deportes-con-balones.png" alt="Disciplinas-deporte"></a>
        <h1>Seleccione la disciplina a la cual desea registrarse:</h1>
        <nav> 
            <a href="pais.php">País</a>
            <a href="disciplina.php">Disciplina</a>
            <a href="atleta.php">Atleta</a>
            <a href="selecciones.php">Selecciones</a>
            <a href="competencias.php">Competencias</a>
        </nav>
    </header>
    <main>
    <form action="procesar_registro .php" method="post">
        <label for="identificador">Identificador único:</label>
        <input type="text" id="identificador" name="identificador" required><br>

        <label for="fecha">Fecha de la competencia:</label>
        <input type="date" id="fecha" name="fecha" min="<?php echo date('Y-m-d'); ?>" required><br>

        <label for="disciplina">Disciplina:</label>
        <input type="text" id="disciplina" name="disciplina" required><br>

        <h2>Selecciones Participantes</h2>
        <p>Ingrese el nombre de las selecciones que participarán en esta competencia, una por línea:</p>
        <textarea id="selecciones" name="selecciones" rows="5" cols="40" required></textarea><br>

        <h2>Puntajes</h2>
        <p>Ingrese los puntajes obtenidos por cada selección, uno por línea en el formato: "Selección: Puntaje".</p>
        <textarea id="puntajes" name="puntajes" rows="5" cols="40"></textarea><br>

        <button type="submit">Registrar Competencia</button>
        </main>
    </form>
</body>
</html>
