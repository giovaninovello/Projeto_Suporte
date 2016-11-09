<div class="login">
    <div class="container-fluid">
        <form class="form-horizontal" action="<?php echo base_url('login/entrar')?>" method="post">
            <div class="alert">
                <?php if($alerta !=null) { ?>
                    <div class="alert-danger<?php echo $alerta['class'];?>">
                        <?php echo $alerta['mensagem'];?>
                    </div>
                <?php }?>
            </div>
            <img src="<?=base_url('assets/img/dasa.png')?>"  alt="">

            <div class="form-group">
                <label for="inputEmail3">Email</label>
                <div class="">
                    <input type="email"value="email" class="form-control" id="email" placeholder="email@email.com.br" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control"  value="senha" id="senha" placeholder="minhasenha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">

                </div>
            </div>
                    <br>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="entrar" value="entrar" class="btn btn-primary">Entrar</button>
                </div>
            </div>
                </div>
            </div>
        </form>
    



