
<div class="container-fluid">


    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert"><strong>INTERFACES </strong></div>

        </div>
        <div class="form-horizontal">

            <label for="" class="col-sm-1">Data Inicial</label>
            <div class="container">
                <div class="row">
                    <div class='col-sm-2'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='date' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker();
                        });
                    </script>
                    <div class="col-sm-offset-5">
                        <label for="" class="col-sm-1">Selecione </label>
                        <div class="radio col-lg-offset-2">
                            <label><input type="radio" name="optradio">Cód Entidade</label>
                        </div>
                        <div class="radio col-lg-offset-2">
                            <label><input type="radio" name="optradio">Consultor</label>
                        </div>
                        <div class="radio col-lg-offset-2">
                            <label><input type="radio" name="optradio">Regiao</label>
                        </div>
                    </div>
                </div>
            </div>
            <label for="" class="col-sm-1">Data Final</label>
            <div class="container">
                <div class="row">
                    <div class='col-sm-2'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='date' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker2').datetimepicker();
                        });
                    </script>
                </div>
            </div>


        </div>


        <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-save-file"></span>   Pesquisar
        </button>

        <div class="col-sm-9">
            <input type="text" class="form-control"  value="" id="senha" name="senha" placeholder="Digite aqui sua pesquisa">
        </div>

    </div>


</div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->