<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="IMG/">

</head>

<body>
    <header>
        <h1>🛍️ Catálogo de Produtos</h1>
    </header>

    <main>
        <div class="container">
            <?php include 'produtos.php'; ?>

            <?php foreach ($produtos as $produto): ?>
                <div class="card">
                    <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                    <h2><?php echo $produto['nome']; ?></h2>
                    <p class="descricao"><?php echo $produto['descricao']; ?></p>
                    <p class="preco">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <button>Comprar</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <br><br><br><br>
    <footer>
        <p>© 2025 - Pietro Informática</p>
    </footer>
</body>

</html>