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
            <div class="col-md-5">
                <div class="box box-solid">
                    <div class="box-header"><!--------- TITULO DEL PANEL ------------>
                        <h3 class="box-title">Agregar a Catálogo</h3>
                    </div><!--------- CIERRE DEL TITULO DEL PANEL ------------>
                    <div class="box-body"><!--------- CUERPO DEL PANEL ------------>
                        <div class="row"><!--fila-->
                            
                            <div class="col-xs-8">
                                <label>Nombre de la Cuenta</label>
                                <input type="text" width="100%" class="form-control" placeholder="Ingreso nombre de la cuenta">
                            </div>
                            
                            <div class="col-xs-4">
                                    <label>Saldo</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" placeholder="Saldo de la cuenta">
                                    </div>
                            </div>
                        </div> <!-- CIERRE DE FILA-->
                        
                        <div class="row"><!--fila-->
                            
                            <div class="col-xs-4">
                                <label>Tipo de Cuenta</label>
                                <select class="form-control">
                                    <option>[Seleccione]</option>
                                    <option>Activo</option>
                                    <option>Pasivo</option>
                                    <option>Patrimonio</option>
                                </select>
                            </div>
                            
                            <div class="col-xs-8">
                                    <label>Usado como</label>
                                    <select class="form-control">
                                        <option>[Seleccione]</option>
                                        <option>Cuenta de Efectivo</option>
                                        <option>Cuenta de Deudores</option>
                                        <option>Cuenta de Inventario</option>                                    
                                        <option>Cuenta de Proveedores</option>
                                    </select>
                            </div>
                        </div> <!-- CIERRE DE FILA-->
                    </div><!--------- CIERRE DEL CUERPO DEL PANEL ------------>       
                    <div class="box-footer">               
                        <button type="button" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>
                    </div>
                </div><!--------- CIERRE DEL PANEL ------------>
           </div> <!--------- CIERRE DE LA COLUMNA ------------>
        </div><!--------- CIERRE DEL FILA ------------>
    </section><!-- /.content -->
</aside>
</body>
</html>