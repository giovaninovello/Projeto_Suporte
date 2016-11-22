
    <div class="container-fluid">
        <h3 class="text-center">Abertura de Chamados</h3>
        <hr>
        <form class="form-horizontal" action="<?php echo base_url('chamado/cadastrado')?>" method="post">

            <div class="form-group">
                <label for="" class="col-sm-2">Laboratorio</label>
                <div class="col-sm-5">
                    <input type="text" value="" class="form-control" id="login" name="login" placeholder="Nome do Laboratorio" >
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Código da entidade</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="Codigo da entidade">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Telefone</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="Telefone">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Contato do Laboratorio</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="Nome">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Cidade</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="cidade">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Consultor Responsavel pela Area de atuacao</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="consultor">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Tipo</label>
                <div class="col-sm-5">
                    <select class="form-control">
                        <option>Integracao</option>
                        <option>Suporte</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Descricao do Suporte a ser feito</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control"  value="" id="senha" name="senha" placeholder="descricao"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="entrar" value="entrar" class="btn btn-primary">Cadastrar Chamado</button>
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




