<?php
     if(isset($_POST['submit']))
 {    
     include_once('config.php');
     $nome = $_POST['nome'];
    $email = $_POST['e-mail'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    $result = mysqli_query($conexao, "INSERT INTO
    usuarios(nome, e-mail, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')");
 }
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/65f22fe718.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Technology</title>
</head>
<body>
    <header style="background-image: url('img/fundo-da-parede-azul_833908-525.jpg')">
        <div class="container">
            <nav>
                <a href="index.html">
                    <img src="img/logo.png" width="250" alt="Logo">
                </a>
                <ul class="ul">
                    <a href="index.html">Ínicio</a>
                    <a href="sobre.html">Sobre</a>
                    <a href="servicos.html">Serviços</a>
                    <a class="btn" href="contato.html">Contato</a>
                <div class="close-icon" onclick="closeMenu()">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                </div>
                </ul>
                <div class="menu-icon" onclick="openMenu()">
                    <i class="fa fa-bars"></i>

                </div>
            </nav>

            <section class="banner">
                <div class="banner-text">
                    <h1>Fale conosco!</h1>
                    <p>Entre em contato com nossa equipe, e eles retornarão rapidamente para ajudá-lo a transformar sua ideia em realidade.</p>
                </div>
            </section>
        </div>
    </header>
         <section class="contacto">
            <div class="container">
    <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20688.898120807276!2d-46.686137340427!3d-23.557126218815934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5786970ecb73%3A0x624618982a7bc4b5!2sDiscover%20Technology%20Inform%C3%A1tica%20Ltda.!5e0!3m2!1ses!2sbr!4v1728393435056!5m2!1ses!2sbr" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
            <div class="contacto-info">
                <div class="left-side">
                    <div>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>R. Teodoro Sampaio, 399/407 - Pinheiros, São Paulo - SP, 05405-000</p>
                </div>
                    <div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>contatotechnology@gmail.com | suportetechnology@contato.br</p>
                </div>
                    <div>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>(11) 93445-4545 | (11) 4545-3421 </p>
                </div>
                </div>
                
                <div class="right-side">
                    <form method="POST" action="config.php">
                        <input type="text" id="text" name="nome"  placeholder="Nome" required>
                        <input type="e-mail" id="e-mail" placeholder="E-mail" required>
                        <input type="Assunto" id="assunto" placeholder="Assunto" required>
                        <textarea cols="30" id="mensagem" rows="10" placeholder="Sua mensagem" required></textarea>
                        <button class="btn">Enviar Mensagem</button>
                  
                    
                    </form>
                </div>
            </div>
         </section>   



            <footer class="footer">
                <div class="container">
                    <div class="links">
                        <a href="https://www.linkedin.com/in/alexia-soliman-02b01522a/"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                        <a href="https://www.instagram.com/alexiasoliman/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://github.com/alexiasoliman/"> <i class="fa fa-github" aria-hidden="true"></i></a>
                    </div>
                    <p>Desenvolvido por Alexia Soliman</p>
                </div>
                
            </footer>
            <script src="js/main.js"> </script>
</body>
</html>