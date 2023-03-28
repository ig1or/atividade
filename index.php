<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Red+Hat+Display:wght@300&display=swap" rel="stylesheet">
    <script src="assets/js/script.js"></script>  
    <?php
        $aviso = isset($_GET['aviso']) ? $_GET['aviso'] : ""; 

        switch ($aviso) {
            case 'sucesso':
                $msg = "Proposta Enviada com Sucesso!";
                alert($msg);
                break;
            default:
                # code...
                break;
        }
        function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    ?>
</head>
    <body>
    <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
</audio>
        <nav class="menu">
            <ul>
                <li id="item">Página inicial</li>
                <li><a href='pages/contatos/index.php'>Contatos</a></li>
                <li><a href='pages/cidades/index.php'>Cidades</a></li>
                <li><a href='pages/hobbies/index.php'>Hobbies</a></li>
                <li><a href='pages/contatoHobbies/index.php'>Contato & Hobbies</a></li>
            </ul>
        </nav>
        <section>
            <div class="row">
                <div class="col-6">
                    <h1 style="color:red">Currículo: Igor Conaco</h1>
                    <p>Sou técnico de informática. Adoro lecionar programação web. Tenho experiência com banco de dados, etc...</p>
                    <h2>Meus Conhecimentos</h2>
                    <ul>
                        <li>HTML</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>SQL</li>
                        <li>Cozinhar</li>
                        <li>Contar histórias infantis</li>
                    </ul>
                    <h2>Experiências Profissionais</h2>
                    <ol>
                        <li><a href="http://ifc.edu.br">Professora efetiva IFC 2014 - atual</a></li>
                        <li> Analista de Sistemas Senior 2011 - 2014</li>
                        <li> Analista de Sistemas Pleno 2009 - 2011</li>
                        <li> Analista de Sistemas Junior 2006 - 2009</li>
                    </ol>
                    <table class="dados">
                        <tr>
                            <th>Nome</th>
                            <th>Relação</th>
                            <th>Contato</th>
                        </tr>
                        <tr>
                            <td>Maria</td>
                            <td>Chefe</td>
                            <td>maria@mail.com</td>
                        </tr>
                        <tr>
                            <td>João</td>
                            <td>Colega</td>
                            <td>joão@mail.com</td>
                        </tr>
                        <tr>
                            <td>Pedro</td>
                            <td>Colega</td>
                            <td>joão@mail.com</td>
                        </tr>
                    </table>
                
        <footer>
            <div class="row">
                <div class="col-12">
                    <p>Feito por webdesign Marcela@Milk</p>
                </div>
            </div>
        </footer>
    </body>
</html>