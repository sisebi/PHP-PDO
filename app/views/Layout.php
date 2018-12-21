<!--<!DOCTYPE html>-->
<html lang="<?= $this->getIdioma() ?>" >
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="icon" href="<?php echo _CAMINHO_IMG_; ?>logo.ico" >
        <?= $this->getHead() ?>
        <title><?= $this->getTitulo() ?></title>
    </head>
    <header>
        <div class="container" >
            https://blogs.oracle.com/opal/installing-xampp-for-php-and-oracle-database
            <br>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="Home" type="button" class="btn btn-secondary">Home</a>
                <a href="Cadastro" type="button" class="btn btn-secondary">Cadastro</a>
                <a href="Endereco" type="button" class="btn btn-secondary">Endereco</a>
            </div>
            <?= $this->getHeader() ?>
        </div>
    </header>

    <body>
        <div class="container" >
            <?= $this->getBody() ?>
        </div>
    </body>

    <footer>
        <?= $this->getFooter() ?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

