
<div class="container-fluid">
    <h3 class="text-center">Pesquisa de Clientes</h3>
    <hr>
    <form class="form-horizontal" action="<?php echo base_url('cliente/listaprovisoria')?>" method="post">

        <div class="form-inline">
            <label for="" class="col-sm-1">Pesquisar Por: </label>
            <div class="radio col-lg-offset-1">
                <label><input type="radio" name="optradio">Nome</label>
            </div>
            <div class="radio col-lg-offset-1">
                <label><input type="radio" name="optradio">Código entidade</label>
            </div>
            <div class="radio col-lg-offset-1">
                <label><input type="radio" name="optradio">Telefone</label>
            </div>
        </div>
        <div class="form-group">

            <div class="col-sm-12">
                <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="Digite o cliente que deseja pesquisar">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-0 col-sm-6">
                <button type="submit" class="btn btn-info">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>

            </div>
            <div class="col-sm-offset-2 col-sm-3">
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-cloud-upload"></span>  Cadastrar novo
                </button>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-folder-open"></span>   Listar todos
                </button>
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




