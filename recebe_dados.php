<!DOCTYPE html>
	<html lang="pt-Br">
		<head>
			<meta charset="UTF-8">
			<title>Estúdio Biko - Serviços</title>
			<link rel="stylesheet" href="style.css">
		</head>

	<body>

        <?php
        include("topo.php");
        ?>

        <div class='corpo'>
            <main>
               <h1>Dados informados</h1>
               <?php
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $cidade = $_POST['cidade'];
                    $uf = $_POST['estado'];
                    $msg = $_POST['mensagem'];

                    echo "Nome: " . $nome . "<br>";
                    echo "E-mail:" . $email . "<br>";
                    echo "Cidade:" . $cidade . "<br>";
                    echo "Estado:" . $uf . "<br>";
                    echo "Mensagem:" . $msg . "<br>";
               ?>
            </main>
        </div>

    </body>
</html>