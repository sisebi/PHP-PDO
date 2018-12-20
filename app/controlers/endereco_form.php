<br>
<div class="container" >
    <br>
    <h1>Cadastro</h1>
    <br>
    <div class = "jumbotron">
        <form action="viaCep" method="POST" role="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cep" placeholder="Digite o cep" >
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Buscar Cep</button>
                </div>
            </div>
            <div class="form-group">
                <label for="rua">Rua</label>
                <input type="text" class="form-control" name="rua" aria-describedby="ruaHelp" placeholder="Sua rua">
                <small id="emailHelp" class="form-text text-muted">Digite seu nome</small>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" placeholder="Sua Cidade">
            </div>
        </form>
    </div>
</div>

