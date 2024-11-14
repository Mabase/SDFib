<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Cadastro de produtos do Pearl Jam</title>
</head>
<body>
    <header>
        <h1>Cadastro de produtos do Pearl Jam</h1>
    </header>
    <main>
        <section class="signup-form">
            <h2>Dados do produto</h2>
            <form action="gravaprod.php" method="post">
                <label for="id">ID:</label>
                <input type="int" id="id" name="id" maxlength="15" minlength="1" required >
                <br/><br/>
                <label for="produto">Produto:</label>
                <input type="text" id="produto" name="produto" size="50" maxlength="50" required>
                <br/><br/>
                <label for="cor">Cor:</label>
                <input type="text" id="cor" name="cor" size="50" maxlength="50" required>
                <br/><br/>
                <label for="tamanho">Tamanho:</label>
                <input type="text" id="tamanho" name="tamanho" size="50" maxlength="50" required>
                <br/><br/>
                <label for="preco">Preço:</label>
                <input type="float" id="preco" name="preco" size="50" maxlength="50" required>
                <br/><br/>
                <label for="fornecedor">Fornecedor:</label>
                <input type="text" id="fornecedor" name="fornecedor" size="50" maxlength="50" required>
                <br/><br/>
                <label for="datavenda">Data da Venda:</label>
                <input type="date" id="datavenda" name="datavenda" required>
                <br/><br/>
                <button type="submit">Próximo</button>
            </form>
        </section>
    </main>
</body>
</html>