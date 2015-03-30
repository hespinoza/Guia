<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Directorio Comparaonline - Nuevo Contacto</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="http://www.comparaonline.cl/assets/favicon-9ffeae5a10a5c86a081d5208da7c9566.ico">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>"><img src="http://blog.comparaonline.cl/wp-content/themes/blog-servicios/images/layout/comparaonline_logo.png" width="127" height="33" ></a>
            
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a><i class="fa fa-user fa-fw"></i> <?=$this->session->userdata('username')?></a>
                        </li>
                        <li class="divider"></li>
                        <li><?=anchor(base_url().'login/logout_ci', 'Desloguear')?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?=base_url()?>"><i class="fa fa-edit fa-fw"></i> Todos</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'corp'?>"><i class="fa fa-edit fa-fw"></i> Corp</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'chile'?>"><i class="fa fa-edit fa-fw"></i> Chile</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'brasil'?>"><i class="fa fa-edit fa-fw"></i> Brasil</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'colombia'?>"><i class="fa fa-edit fa-fw"></i> Colombia</a>
                        </li>
                       
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nuevo Contacto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Complete todos los campos solicitados
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                        <?=form_open(base_url().'submit_usuario/insertar_comentarios','role="form"');
//aqui se procesar� nuestro formulario, controlador comentarios, funci�n insertar_comentarios
//creamos los arrays que compondran nuestro formulario
//primer array con el input que se llamar� nombre y ser� donde introduciremos el mismo
 
    $nombre = array(
        'name' => 'nombre',
        'id' => 'nombre',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('nombre') // con esto al procesar el formulario de forma incorrecta quedar� guardado el dato que le hab�amos puesto
    );
 
//el segundo array(campo email)
 
    $apellido = array(
        'name' => 'apellido',
        'id' => 'apellido',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('apellido')
    );
 
//el tercero...(campo asunto)
    $correo = array(
        'name' => 'correo',
        'type' => 'email',
        'id' => 'correo',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('correo')
    );
 
 $cargo = array(
        'name' => 'cargo',
        'id' => 'cargo',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('cargo')
    );
    $skype = array(
        'name' => 'skype',
        'id' => 'skype',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('skype')
    );
    
$anexo = array(
        'name' => 'anexo',
        'id' => 'anexo',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('anexo')
    );

$directo = array(
        'name' => 'directo',
        'id' => 'directo',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('directo')
    );

    $opciones_pais = array(
                  'none' => '',
                  'corp' => 'Corp',
                  'chile' => 'Chile',
                  'brasil' => 'Brasil',
                  'colombia' => 'Colombia',
                );
//el cuarto...(campo mensaje)
    $pais = array(
        'name' => 'pais',
        'id' => 'pais',
        'size' => '50',
        'class' => 'form-control',
        'value' => set_value('pais')
    );
    
 
//el bot�n submit de nuestro formulario
    $submit = array(
        'name' => 'submit',
        'class' => 'btn btn-primary',
        'id' => 'submit',
        'value' => 'Registrar Contacto',
        'title' => 'Registrar Contacto'
    );
    ?>
<?php
echo form_fieldset('');
?>
            
                
                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Nombre: '); ?></label>
                        <?php echo form_input($nombre); ?>
                        <?php echo form_error('nombre'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Apellido: '); ?></label>
                        <?php echo form_input($apellido); ?>
                        <?php echo form_error('apellido'); ?>
                        </div>
                    </div>
                    
                        
                 
                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Cargo: '); ?></label>
                        <?php echo form_input($cargo); ?>
                        <?php echo form_error('cargo'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Pais: '); ?></label>
                        <?php echo form_dropdown('pais', $opciones_pais, 'none', 'class="form-control" id="pais"'); ?>
                        <p class="help-block"><?php echo form_error('pais'); ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                        <label><?php echo form_label('Correo: '); ?></label>
                        <?php echo form_input($correo); ?>
                        <?php echo form_error('correo'); ?>
                        </div>
                        <div class="col-md-6">
                        <label><?php echo form_label('Skype: '); ?></label>
                        <?php echo form_input($skype); ?>
                        <?php echo form_error('skype'); ?>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6">
                        <label><?php echo form_label('Anexo: '); ?></label>
                        <?php echo form_input($anexo); ?>
                        <?php echo form_error('anexo'); ?>
                    </div>
                    <div class="col-md-6">
                        <label><?php echo form_label('Directo: '); ?></label>
                        <?php echo form_input($directo); ?>
                        <?php echo form_error('directo'); ?>
                    </div>
                    
                    </div> 
                    <div class="row-fluid">
                        <hr>
                    </div> 
                    <div class="form-group">
                    <div class="col-md-6">
                        <?php echo form_submit($submit); ?>
                    </div>
                    </div>          
            <?php
                echo form_close();
            ?>
        
        <?php
               echo form_fieldset_close();
       ?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                </div>
                </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    <!-- /#wrapper -->
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>