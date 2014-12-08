<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../css_net/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css_net/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css_net/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script src="../js_net/jquery.min.js"></script>
        <script src="../js_net/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>
</head>

 <body class="skin-blue">
<aside class="normal-side">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Estados Financieros de la Empresa
          <small> / Cartera de Clientes</small>
        </h1>
         <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Charts</a></li>
            <li class="active">Morris</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-4">
     <div class="box box-solid">
        <div class="box-header"><!--------- TITULO DEL PANEL ------------>
            <h3 class="box-title">Estado de Resultado</h3>
        </div><!--------- CIERRE DEL TITULO DEL PANEL ------------>
        <div class="box-body"><!----ESTADO DE RESULTADO-->
            <div class="box"> <!----Ingresos-->
                    <div class="box-header" data-toggle="tooltip" title="" data-original-title="Cuentas utilizadas para contener la información de ingresos referentes al giro de la empresa">
                        <h3 class="box-title">Ingresos</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div><!----Fin del Titulo-->
                    <div class="box-body">
                    <table width="560" border="0">
  <tr>
    <td width="25px"> <button class="btn btn-primary btn-xs"><i class="fa fa-refresh"></i></button></td>
    <td width="25px"> <button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
    <td>Ventas Netas</td>
    <td width="125px">$ 1,0000,0000.00</td>
  </tr>
</table>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                       Total de Ingresos
                    </div><!-- /.box-footer-->
            </div><!---Fn de Ingresos--->
            <div class="box"> <!----Costos-->
                    <div class="box-header" data-toggle="tooltip" title="" data-original-title="Cuentas que contienen la información de los costos incurridos ya sea en la compra o en la elaboración de los productos vendidos">
                        <h3 class="box-title">Costos</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div><!----Fin del Titulo-->
                    <div class="box-body">
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                       Total de Costos
                    </div><!-- /.box-footer-->
            </div><!---Fn de Costos--->
            <div class="box"> <!----Gastos-->
                    <div class="box-header" data-toggle="tooltip" title="" data-original-title="Cuentas que contienen todos los saldos de los pagos reaizados por parte de la Empresa por sus operaciones">
                        <h3 class="box-title">Gastos</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div><!----Fin del Titulo-->
                    <div class="box-body">
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                       Total de Gastos
                    </div><!-- /.box-footer-->
            </div><!---Fn de Gastos--->
            <div class="box"> <!----Otros Ingresos-->
                    <div class="box-header" data-toggle="tooltip" title="" data-original-title="Cuentas utilizadas para contener la información de ingresos no vienen de operaciones hechas por el giro de la empresa">
                        <h3 class="box-title">Otros Ingresos</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div><!----Fin del Titulo-->
                    <div class="box-body">
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                       Total de Otros Ingresos
                    </div><!-- /.box-footer-->
            </div><!---Fin de Otros Ingresos--->
            <div class="box"> <!---- Otros Gastos-->
                    <div class="box-header" data-toggle="tooltip" title="" data-original-title="Son todos los egresos de la empresa producidos por causas que no son parte del giro de operaciones de la empresa">
                        <h3 class="box-title"> Otros Gastos</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-success btn-xs"><i class="fa fa-plus"></i></button>
                            <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div><!----Fin del Titulo-->
                    <div class="box-body">
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                       Total de Otros Gastos
                    </div><!-- /.box-footer-->
            </div><!---Fn de Otros Gastos--->
            <label class="form-control"> (-)Reserva Legal</label>
            <label class="form-control"> (-)Impuesto Sobre la Renta</label>
            <label class="form-control">(=) Utilidad Neta</label>
          </div><!----Fin del Cuerpo del Panel-->    
          <div class="box-footer" align="right">
           <button type="button" class="btn btn-primary">Guardar</button>
           <button type="button" class="btn btn-danger">Cancelar</button>
          </div>
       </div> <!----Fin del Panel/Estado de Resultado-->    
       </div> <!-- Cierre de la Columna-->
       </div><!--Fin de la Fila PRINCIPAL-->
    </section>
   </aside>
 </div>
</body>
</html>>>>>>>>>>>>>>>>>