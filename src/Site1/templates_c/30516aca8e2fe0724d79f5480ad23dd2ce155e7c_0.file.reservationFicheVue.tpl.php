<?php
/* Smarty version 4.3.4, created on 2024-11-13 14:50:01
  from 'C:\laragon\www\hotels\src\Site1\mod_reservation\vue\reservationFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6734bc99bf9910_99129115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30516aca8e2fe0724d79f5480ad23dd2ce155e7c' => 
    array (
      0 => 'C:\\laragon\\www\\hotels\\src\\Site1\\mod_reservation\\vue\\reservationFicheVue.tpl',
      1 => 1731509389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6734bc99bf9910_99129115 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="right-panel" class="right-panel">

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=reservations">Réservations</a></li>
                        <li class="active"><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>
                        <form action="index.php" method="POST">
                            <input type="hidden" name="gestion" value="reservations">
                            <input type="hidden" name="action" value=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
>
                            
                            <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                <input type="hidden" name="ResNo" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getResNo();?>
">
                            <?php }?>
                            
                            <div class="card-body card-block">
                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                                    <div class="form-group">
                                        <label class="form-control-label">N° Réservation :</label>
                                        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['uneReservation']->value->getResNo();?>
" disabled>
                                    </div>
                                <?php }?>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Nom :</label>
                                    <input type="text" name="LastName" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getLastName();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
 required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Prénom :</label>
                                    <input type="text" name="FirstName" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getFirstName();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
 required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Adresse :</label>
                                    <input type="text" name="Address" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getAddress();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Ville :</label>
                                    <input type="text" name="City" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getCity();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">État :</label>
                                    <input type="text" 
                                           name="State" 
                                           class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getState();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Code Postal :</label>
                                    <input type="text" name="Postal" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getPostal();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Téléphone :</label>
                                    <input type="text" name="Phone" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getPhone();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Type de Paiement :</label>
                                    <select name="Payment" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePaymenttypes']->value, 'paymenttype');
$_smarty_tpl->tpl_vars['paymenttype']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paymenttype']->value) {
$_smarty_tpl->tpl_vars['paymenttype']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['paymenttype']->value->getPayment();?>
" 
                                                <?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value)) && $_smarty_tpl->tpl_vars['uneReservation']->value->getPayment() == $_smarty_tpl->tpl_vars['paymenttype']->value->getPayment()) {?>selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['paymenttype']->value->getDescription();?>

                                            </option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Montant :</label>
                                    <input type="number" step="0.01" name="Amount" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getAmount();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Hôtel :</label>
                                    <select name="Hotel" class="form-control" <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeHotels']->value, 'hotel');
$_smarty_tpl->tpl_vars['hotel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['hotel']->value->getHotel();?>
" 
                                                <?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value)) && $_smarty_tpl->tpl_vars['uneReservation']->value->getHotel() == $_smarty_tpl->tpl_vars['hotel']->value->getHotel()) {?>selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['hotel']->value->getName();?>

                                            </option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Chambre :</label>
                                    <input type="number" 
                                           name="Room" 
                                           class="form-control" 
                                           min="1"
                                           max="9999"
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getRoom();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Date d'arrivée :</label>
                                    <input type="date" name="DateIn" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getDateIn();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Date de départ :</label>
                                    <input type="date" name="DateOut" class="form-control" 
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['uneReservation']->value))) {
echo $_smarty_tpl->tpl_vars['uneReservation']->value->getDateOut();
}?>" 
                                           <?php echo $_smarty_tpl->tpl_vars['readOnly']->value;?>
>
                                </div>
                            </div>
                            
                            <div class="card-body card-block">
                                <div class="col-md-6">
                                    <input type='button' class="btn btn-submit" value='Retour'
                                           onclick='location.href = "index.php?gestion=reservations"'>
                                </div>
                                <div class="col-md-6">
                                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                                        <input type="submit" class="btn btn-outline-custom-two" 
                                               name="btn_valider" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                                    <?php }?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

</body>
</html>
<?php }
}
