
    <div class="container-fluid">
        <h3 class="text-center">Cadastro de Softhouses</h3>
        <hr>
        <form class="form-horizontal" action="<?php echo base_url('chamado/cadastrado')?>" method="post">

            <div class="form-group">
                <label for="" class="col-sm-2">Nome</label>
                <div class="col-sm-5">
                    <input type="text" value="" class="form-control" id="login" name="login" placeholder="Nome da Softhouse" >
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Telefone</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="Fone">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Cidade</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="cidade">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Contato da Softhouse</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="Contato">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="entrar" value="entrar" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
                </div>
    <div class="alert">
        <?php if($alerta !=null) { ?>
            <div class="alert<?php echo $alerta['class'];?>">
                <?php echo $alerta['mensagem'];?>
            </div>
        <?php }?>
    </div>
            </div>

        </form>




