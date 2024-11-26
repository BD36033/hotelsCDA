<?php
/* Smarty version 4.3.4, created on 2024-11-13 14:09:10
  from 'C:\laragon\www\hotels\src\Site1\mod_paymenttypes\vue\paymenttypesFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6734b306822d51_41360834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85432f9eb3e436d1c391ded39ddc48e6ad02508' => 
    array (
      0 => 'C:\\laragon\\www\\hotels\\src\\Site1\\mod_paymenttypes\\vue\\paymenttypesFicheVue.tpl',
      1 => 1731506937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6734b306822d51_41360834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\hotels\\src\\Site1\\include\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['titreVue']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

</head>
<body>


<!-- Left Panel -->


<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><!-- Info --></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#index.php">Accueil</a></li>
                        <li><a href="#CODE"><!-- Libelle --></a></li>
                        <li class="active"><!-- Libelle --></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>
                        <form action="index.php" method="POST">
                            <input type="hidden" name="gestion" value="paymenttypes">
                            <input type="hidden" name="action" value=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
>
                            
                            <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                <input type="hidden" name="Payment" value="<?php echo $_smarty_tpl->tpl_vars['unPaiementtype']->value->getPayment();?>
">
                            <?php }?>
                            
                            <div class="card-body card-block">
                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                    <div class="form-group section-form">
                                        <label for="form-control-label">
                                            Identifiant :
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               value="<?php echo $_smarty_tpl->tpl_vars['unPaiementtype']->value->getPayment();?>
" 
                                               <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>

                                               disabled>
                                    </div>
                                <?php }?>
                                
                                <div class="form-group section-form">
                                    <label for="form-control-label">
                                        Description :
                                    </label>
                                    <input type="text"
                                           name="Description"
                                           class="form-control"
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['unPaiementtype']->value))) {
echo $_smarty_tpl->tpl_vars['unPaiementtype']->value->getDescription();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnlyTwo']->value;?>

                                           required>
                                </div>
                            </div>
                            <div class="card-body card-block">
                                <div class="col-md-6"><input type='button' class="btn btn-submit" value='Retour'
                                                             onclick='location.href = "index.php?gestion=paymenttypes"'></div>
                                <div class="col-md-6 ">                                
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                                    <input type="submit"
                                           class="btn btn-outline-custom-two"
                                           name="btn_valider"
                                           value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                                        <?php }?>       
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
