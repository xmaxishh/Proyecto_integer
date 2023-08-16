<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index registro</title>
    <style>
      
@font-face {
  font-family: 'Quicksand';
  src: url(../Quicksand-VariableFont_wght.ttf);
}

body {
    background-image: url('../img/jeremy-lapak-CVvFVQ_-oUg-unsplash.webp');
    font-family: 'Quicksand', calibri, nunito;
    background-size: cover;
    background-position:bottom ;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    max-width: 100vw;
  }
 header img{
    
    margin: 0;
    padding: 0;
    max-height: 10vh;
    width: auto;
    background: none; 
 } 

header {
    max-height: max-content;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #000000;
    gap: 15px;
    }
      @media screen and (max-width: 700px) {
        header {
          height: 100vh;
          display: flex;
          justify-content: row;
        }
      }
    header h1{
      font-size: 27px;
      font-weight: 390;
    }

nav{
  
  display: flex;
  justify-content: space-around;
  align-items: center;
  
  gap: 12px;
  margin: 1.2em;
}
a {
    margin: 2px;
    font-weight: 600;
    display:flex;
    justify-content: center;
    height: 1.4rem;
    align-items: center;
    padding: 10px;
    background-color: #d59234c6;
    color: #fff;
    text-decoration: none;
    opacity: .9;
    border-radius: 12px;
    transition: background-color 150ms ease-out;
}
 a:hover {
    transform:translateY(-5px) ;
    scale: 1.04;
    background-color: #c27101e7;
}

main{
  margin-top:1.5rem;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction:column;
}

form{
  display: flex;
  justify-content: center;
  align-items:center;
  flex-direction: column;
  gap:15px;
  background: hsl(0, 2%, 12%);
  color: white;
  border-radius: 12px; 
  min-width:30vw;
  max-height:auto;
}
form label{
  text-align: left;
  font-size: 20px;
}
.container-btn{
  display:flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.container-btn a{
    max-width: 100%;
    font-weight: 500;
    font-size:20px;
    padding: 10px 20px;
    margin:5px;
    background-color: #c27101e7;
    color: #f3f3f3;
    text-decoration: none;
    border: none;
    border-radius: 12px;
    transition: background-color 0.3s ease;
    cursor:pointer;
}
input[type="submit"]{
    max-width: 100%;
    font-weight: 500;
    font-size:20px;
    padding: 10px 20px;
    margin:5px;
    background-color: #c27101e7;
    color: #f3f3f3;
    text-decoration: none;
    border: none;
    border-radius: 12px;
    transition: background-color 0.3s ease;
    cursor:pointer;
  }
  input[type="submit"]:hover {
    transform:translateY(-2px) ;
    scale: 1.1;
    background-color: #c27101e7;
  }
  input[type="text"]{
    width: 85%;
    height: auto;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius:12px;
    margin-bottom: 10px;
    font-family: 'Quicksand';
  }
  
  input[type="text"]:focus,
  input[type="date"]:focus,
  select:focus {
    border: solid #a4720d 1px;
  }
    

footer {
    position: fixed;
    left: 0;
    width: 100%;
    bottom: 0;
    text-align: center;
    opacity: .9;
    background-color: #000000;
    padding: 15px;
    color: #fff;

}
footer h2{
  font-size: 18px;
  font-weight: 90;
}



  
    </style>
    
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
            <a href="/competencias.php">Competencias</a>
        </nav>
    </header>
 
 
  <main>
    
  <form class="atleta-form" action="php_logica/register_disiplina.php" method="post">
        <label for="seleccion_id">ID de Selección:</label>
        <input type="text" name="seleccion_id" required>
        
        <label for="disciplina">Disciplina:</label>
        <input type="text" name="disciplina" required>
        
        <label for="pais">País:</label>
        <input type="text" name="pais" required>

        <label for="atletas">Atletas (separados por coma):</label>
        <input type="text" name="atletas" required> 
        
        <div class="container-btn">
        <input type="submit" value="Registrar">
        <a class="inicio" href="../index.php">Inicio</a>
        </div>
      
    </form>
    </main>


  <footer>
    &copy; 2023 Registro Deportivo. Todos los derechos reservados.
  </footer>

</body>
</html>

