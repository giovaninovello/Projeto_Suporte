<div class="login">
    <div class="container-fluid">
        <form class="form-horizontal" action="<?php echo base_url('conta/entrar')?>" method="post">
            <div class="alert">
                <?php if($alerta !=null) { ?>
                    <div class="alert<?php echo $alerta['class'];?>">
                        <?php echo $alerta['mensagem'];?>
                    </div>
                <?php }?>
            </div>
            <img src="<?=base_url('assets/img/dasa.png')?>"  alt="">
            <br><br>
            <div class="form-group">
                <label for="" class="col-sm-2">Login</label>
                <div class="col-sm-10">
                    <input type="text" value="login" class="form-control" id="login" name="login" placeholder="Login" >
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control"  value="senha" id="senha" name="senha" placeholder="Senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="entrar" value="entrar" class="btn btn-primary">Entrar</button>
                </div>
            </div>
                </div>
            </div>
        </form>




