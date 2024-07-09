<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="listaprod.php" method="get">

    <label for="Produto">Produto</label>
    <select id="Produto" name="Produto">
    <option value="Calça">Calça</option>
    <option value="Camisa">Camisa</option>
    <option value="Blusa">Blusa</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Short">Short</option>
    <option value="Camiseta">Camiseta</option>
    </select>
    <br>

    <label for="Marca">Marca</label>
    <select id="Marca" name="Marca">
    <option value="Adidas">Adidas</option>
    <option value="Monclear">Monclear</option>
    <option value="Valentino">Valentino</option>
    <option value="Loewe">Loewe</option>
    <option value="Nike">Nike</option>
    <option value="Prada">Prada</option>
    </select>
    <br>

    <label for="Tamanho">Tamanho</label>
    <input type="number" name="Tamanho" id="Tamanho">
    <br>

    <label for="Preço">Preço</label>
    <input type="number" min="1" step="any" />
    <br>

    <label for="Cor">Cor</label>
    <input type="text" name="Cor" id="Cor">
    <br>

    <label for="Gênero">Gênero</label>
    <select name="Gênero" id="Gênero">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Unisex">Unisex</option>
    </select>
    <br>

    <label for="Data de compra">Data de compra</label>
    <input type="date" name="Data" id="Data">
  </select>
    
    <input type="submit" name="enviar" id="enviar">
</form>
</body>
</html>