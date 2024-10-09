<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <?php
    session_start();
    $url = 'https://fakestoreapi.com/products';

    $item = file_get_contents($url);
    $dados = json_decode($item, true);
    if($item === FALSE){
    $objetos = json_decode($dados, true);
    }
    if ($dados === NULL) {
    echo('Erro ao decodificar o JSON.');
    }
    //print_r($dados);
    $electronics = array_filter($dados, function($dados) {
        return $dados['category'] === 'electronics';
      });
      $electronics = array_values($electronics);

if (count($electronics) >= 6) {
    $product1 = $electronics[0];
    $product2 = $electronics[1];
    $product3 = $electronics[2];
    $product4 = $electronics[3];
    $product5 = $electronics[4];
    $product6 = $electronics[5];
} else {
    echo '<p>Número insuficiente de produtos eletrônicos disponíveis.</p>';
}
    ?>
    <style>
        #navbar{
            margin-bottom:20px;
        }
        .title{
            display:flex;
            justify-content:center;
            margin-bottom:50px;
        }
        .col{
            margin:-120px;
            margin-bottom:50px;
            margin-left:50px;
        }
        .titulo-produto{
            font-size:18px;
            max-width: 60ch;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .produto-imagem{
            height:120px;
            width:120px;
            align-self:center;
        }
        .card{
            padding:10px;
        }
        .preço{
            font-size: 18px;
            border: none;
            border-radius: 20px;
            background-color: #4ddbff;
            font-weight: 500;
            color: white;
            width:100px;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar" style="whidth:100%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Area do usuario</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrar.php">cadastrar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['email'];?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="minhaConta.php">Minha conta</a></li>
            <li><a class="dropdown-item" href="cadastrar.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="loja.php">Loja</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1 class="title">Produtos em promoção</h1>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <div style="width: 18rem;">
  <div class="card-body">
    <?php
    if ($product1) {
    echo '<div class="card">';
    echo '<img class="produto-imagem" src="' . $product1['image'] . '" alt="' . $product1['title'] . '" />';
    echo '<h2 class="titulo-produto">' . $product1['title'] . '</h2>';
    echo '<p class="preço">R$ ' . $product1['price'] . '.99</p>';
    echo '</div>';
} else {
    echo '<p>Nenhum produto encontrado.</p>';
}
    ?>
  </div>
</div>
    </div>
    <div class="col">
      <div style="width: 18rem;">
  <div class="card-body">
    <?php
    if ($product2) {
    echo '<div class="card">';
    echo '<img class="produto-imagem" src="' . $product2['image'] . '" alt="' . $product2['title'] . '" />';
    echo '<h2 class="titulo-produto">' . $product2['title'] . '</h2>';
    echo '<p class="preço">R$ ' . $product2['price'] . '.99</p>';
    echo '</div>';
} else {
    echo '<p>Nenhum produto encontrado.</p>';
}
    ?>
  </div>
</div>
    </div>
    <div class="col">
      <div style="width: 18rem;">
  <div class="card-body">
    <?php
    if ($product3) {
    echo '<div class="card">';
    echo '<img class="produto-imagem" src="' . $product3['image'] . '" alt="' . $product3['title'] . '" />';
    echo '<h2 class="titulo-produto">' . $product3['title'] . '</h2>';
    echo '<p class="preço">R$ ' . $product3['price'] . '.99</p>';
    echo '</div>';
} else {
    echo '<p>Nenhum produto encontrado.</p>';
}
    ?>
  </div>
</div>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <div style="width: 18rem;">
  <div class="card-body">
    <?php
    if ($product4) {
    echo '<div class="card">';
    echo '<img class="produto-imagem" src="' . $product4['image'] . '" alt="' . $product4['title'] . '" />';
    echo '<h2 class="titulo-produto">' . $product4['title'] . '</h2>';
    echo '<p class="preço">R$ ' . $product4['price'] . '.99</p>';
    echo '</div>';
} else {
    echo '<p>Nenhum produto encontrado.</p>';
}
    ?>
  </div>
</div>
    </div>
    <div class="col">
      <div style="width: 18rem;">
  <div class="card-body">
    <?php
    if ($product5) {
    echo '<div class="card">';
    echo '<img class="produto-imagem" src="' . $product5['image'] . '" alt="' . $product5['title'] . '" />';
    echo '<h2 class="titulo-produto">' . $product5['title'] . '</h2>';
    echo '<p class="preço">R$ ' . $product5['price'] . '.99</p>';
    echo '</div>';
} else {
    echo '<p>Nenhum produto encontrado.</p>';
}
    ?>
  </div>
</div>
    </div>
    <div class="col">
      <div style="width: 18rem;">
  <div class="card-body">
    <?php
    if ($product6) {
    echo '<div class="card">';
    echo '<img class="produto-imagem" src="' . $product6['image'] . '" alt="' . $product6['title'] . '" />';
    echo '<h2 class="titulo-produto">' . $product6['title'] . '</h2>';
    echo '<p class="preço">R$ ' . $product6['price'] . '</p>';
    echo '</div>';
} else {
    echo '<p>Nenhum produto encontrado.</p>';
}
    ?>
  </div>
</div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>