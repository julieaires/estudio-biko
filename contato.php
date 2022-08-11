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
                <h2>Fale Conosco</h2>
                <section class="caixa">
                    <fieldset>
                        <legend>Informe os seus dados a seguir:</legend>
            
                        <form action="recebe_dados.php" method="post">
                            <div>
                                <label for="nome">Nome: </label>
                                <input type="text" name="nome" id="nome">
                            </div>
                            <div>
                                <label for="email">Email: </label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div>
                                <label for="cidade">Cidade: </label>
                                <input type="text" name="cidade" id="cidade">
                            </div>
                            <div>
                                <label for="estado">Estado: </label>
                                <select name="estado" id="estado">
                                    <option>Maranhão</option>
                                    <option>Piauí</option>
                                    <option>Belém</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div>
                                <label for="mensagem">Mensagem:</label>
                                <textarea name="mensagem" id="mensagem"></textarea>
                            </div>
                            <div>
                                <button type="submit">Enviar</button>
                                <button type="reset">Limpar</button>
                            </div>
                        </form>
            
                    </fieldset>
                </section>

		<?php
		include("footer.php");
		?>

	</body>

</html>