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
    <title>{$titreVue}</title>
    <meta name="description" content="{$titreVue}">
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

{include file='public/left.tpl'}

<div id="right-panel" class="right-panel">

    {include file='public/header.tpl'}

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
                        <li class="active">{$titrePage}</li>
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
                        <div class="card-header"><strong>{$titrePage}</strong></div>
                        <form action="index.php" method="POST">
                            <input type="hidden" name="gestion" value="reservations">
                            <input type="hidden" name="action" value={$action}>
                            
                            {if $action neq 'ajouter'}
                                <input type="hidden" name="ResNo" value="{$uneReservation->getResNo()}">
                            {/if}
                            
                            <div class="card-body card-block">
                                {if $action neq 'ajouter'}
                                    <div class="form-group">
                                        <label class="form-control-label">N° Réservation :</label>
                                        <input type="text" class="form-control" value="{$uneReservation->getResNo()}" disabled>
                                    </div>
                                {/if}
                                
                                <div class="form-group">
                                    <label class="form-control-label">Nom :</label>
                                    <input type="text" name="LastName" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getLastName()}{/if}" 
                                           {$readOnly} required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Prénom :</label>
                                    <input type="text" name="FirstName" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getFirstName()}{/if}" 
                                           {$readOnly} required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Adresse :</label>
                                    <input type="text" name="Address" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getAddress()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Ville :</label>
                                    <input type="text" name="City" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getCity()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">État :</label>
                                    <input type="text" 
                                           name="State" 
                                           class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getState()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Code Postal :</label>
                                    <input type="text" name="Postal" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getPostal()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Téléphone :</label>
                                    <input type="text" name="Phone" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getPhone()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Type de Paiement :</label>
                                    <select name="Payment" class="form-control" {$readOnly}>
                                        {foreach from=$listePaymenttypes item=paymenttype}
                                            <option value="{$paymenttype->getPayment()}" 
                                                {if isset($uneReservation) && $uneReservation->getPayment() eq $paymenttype->getPayment()}selected{/if}>
                                                {$paymenttype->getDescription()}
                                            </option>
                                        {/foreach}
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Montant :</label>
                                    <input type="number" step="0.01" name="Amount" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getAmount()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Hôtel :</label>
                                    <select name="Hotel" class="form-control" {$readOnly}>
                                        {foreach from=$listeHotels item=hotel}
                                            <option value="{$hotel->getHotel()}" 
                                                {if isset($uneReservation) && $uneReservation->getHotel() eq $hotel->getHotel()}selected{/if}>
                                                {$hotel->getName()}
                                            </option>
                                        {/foreach}
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Chambre :</label>
                                    <input type="number" 
                                           name="Room" 
                                           class="form-control" 
                                           min="1"
                                           max="9999"
                                           value="{if isset($uneReservation)}{$uneReservation->getRoom()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Date d'arrivée :</label>
                                    <input type="date" name="DateIn" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getDateIn()}{/if}" 
                                           {$readOnly}>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-control-label">Date de départ :</label>
                                    <input type="date" name="DateOut" class="form-control" 
                                           value="{if isset($uneReservation)}{$uneReservation->getDateOut()}{/if}" 
                                           {$readOnly}>
                                </div>
                            </div>
                            
                            <div class="card-body card-block">
                                <div class="col-md-6">
                                    <input type='button' class="btn btn-submit" value='Retour'
                                           onclick='location.href = "index.php?gestion=reservations"'>
                                </div>
                                <div class="col-md-6">
                                    {if $action != 'consulter'}
                                        <input type="submit" class="btn btn-outline-custom-two" 
                                               name="btn_valider" value="{$action|capitalize}">
                                    {/if}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="public/assets/js/plugins.js"></script>
<script src="public/assets/js/main.js"></script>

</body>
</html>
