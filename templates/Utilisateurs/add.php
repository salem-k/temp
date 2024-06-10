<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur $utilisateur
 */
?>
<!-- Content Header (Page header) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
<?php echo $this->Html->script('alert'); ?>
<section class="content-header">
  <h1>
    <?php
    // $acc = ClassRegistry::init('Accueil')->find('first');
    // $abrv = $acc['Accueil']['name'];
    ?>
    Profile
    <small><?php echo __(''); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-reply"></i> <?php echo __('Retour'); ?></a></li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <?php echo $this->Form->create($utilisateur, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13"]); ?>
        <div class="box-body">
          <?php echo $this->Form->control('name'); ?>
        </div>
        <div>
          <h4 class="box" style="background-color: 	#f8f8ff ; border: 20px solid #f8f8ff;">
            Droit D'acces
          </h4>
          <nav class="navbar navbar-default" style="background-color:white;">
            <div class="container-fluid">
              <ul class="nav navbar-nav">
                <li><a href="#SETTINGS" data-toggle="tab"><i class="fa fa-fw fa-cog text-aqua"></i>Settings</a></li>
                <li><a href="#stock" data-toggle="tab"><i class="fa fa-fw  fa-cubes text-red"></i>Gestion de stock</a></li>
                <li><a href="#achat" data-toggle="tab"><i class="fa fa-fw fa-users text-green"></i>Achat (CLIENTS)</a></li>
                <li><a href="#vente" data-toggle="tab"><i class=" fa fa-truck text-green"></i> Vente (FOURNISSEURS)</a></li>
                <li><a href="#Representant" data-toggle="tab"><i class=" fa fa-user text-green"></i> Representants</a></li>

              </ul>
              <div class="tab-content tab-border">
                <div class="tab-pane fade in active" id="SETTINGS">
                  <table cellpadding="4" cellspacing="1" class="table" width="100%" style="background-color: 	#f8f8ff ;">
                    <a index="p" ligne="1" ind="150" class="cocheru">Tout Cocher</a>/
                    <a index="p" ligne="1" ind="150" class="decocheru">Tout Decocher</a>
                    <tbody>
                    <tr>
                      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="p1" value="2"></td>
                      <td align="center">Ajout</td>
                      <td align="center">Modification</td>
                      <td align="center">Suppression</td>
                      <td align="center">Impression</td>
                    </tr>


                    <tr class="fonctions">
                      <td align="left">Fonctions</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][3][add]" id="p14" value="1">
                        <input type="hidden" name="data[2][Lien][3][lien]" value="fonctions">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][3][edit]" id="p15" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][3][delete]" id="p16" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][3][imprimer]" id="p17" value="1"></td>
                    </tr>
                    <tr class="profile">
                      <td align="left">Profile</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][4][add]" id="p18" value="1">
                        <input type="hidden" name="data[2][Lien][4][lien]" value="profile">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][4][edit]" id="p19" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][4][delete]" id="p20" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][4][imprimer]" id="p21" value="1"></td>
                    </tr>
                    <tr class="utilisateurs">
                      <td align="left">Utilisateurs</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][5][add]" id="p22" value="1">
                        <input type="hidden" name="data[2][Lien][5][lien]" value="utilisateurs">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][5][edit]" id="p23" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][5][delete]" id="p24" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][5][imprimer]" id="p25" value="1"></td>
                    </tr>
                    <tr class="users">
                      <td align="left">Users</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][6][add]" id="p26" value="1">
                        <input type="hidden" name="data[2][Lien][6][lien]" value="users">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][6][edit]" id="p27" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][6][delete]" id="p28" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][6][imprimer]" id="p29" value="1"></td>
                    </tr>
                    <tr class="personnels">
                      <td align="left">Personnels</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][7][add]" id="p30" value="1">
                        <input type="hidden" name="data[2][Lien][7][lien]" value="personnels">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][7][edit]" id="p31" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][7][delete]" id="p32" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][7][imprimer]" id="p33" value="1"></td>
                    </tr>
                    <tr class="banques">
                        <td align="left">Banques</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][1][add]" id="p6" value="1">
                            <input type="hidden" name="data[2][Lien][1][lien]" value="banques">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][1][edit]" id="p7" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][1][delete]" id="p8" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][1][imprimer]" id="p9" value="1"></td>
                    </tr>
                    <tr class="devises">
                        <td align="left">Devise</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][20][add]" id="p80" value="1">
                            <input type="hidden" name="data[2][Lien][20][lien]" value="devises">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][20][edit]" id="p81" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][20][delete]" id="p82" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][20][imprimer]" id="p83" value="1"></td>
                    </tr>

                    <tr class="pays">
                      <td align="left">Pays</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][21][add]" id="p84" value="1">
                        <input type="hidden" name="data[2][Lien][21][lien]" value="pays">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][21][edit]" id="p85" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][21][delete]" id="p86" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][21][imprimer]" id="p87" value="1"></td>
                    </tr>
                    <tr class="gouvernorats">
                      <td align="left">Gouvernorats</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][8][add]" id="p34" value="1">
                        <input type="hidden" name="data[2][Lien][8][lien]" value="gouvernorats">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][8][edit]" id="p35" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][8][delete]" id="p36" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][8][imprimer]" id="p37" value="1"></td>
                    </tr>
                    <tr class="delegations">
                      <td align="left">Delegations</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][9][add]" id="p38" value="1">
                        <input type="hidden" name="data[2][Lien][9][lien]" value="delegations">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][9][edit]" id="p39" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][9][delete]" id="p40" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][9][imprimer]" id="p41" value="1"></td>
                    </tr>
                    <tr class="localites">
                      <td align="left">Localites</td>
                      <td align="center">
                        <input type="checkbox" name="data[2][Lien][10][add]" id="p42" value="1">
                        <input type="hidden" name="data[2][Lien][10][lien]" value="localites">
                      </td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][10][edit]" id="p43" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][10][delete]" id="p44" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[2][Lien][10][imprimer]" id="p45" value="1"></td>
                    </tr>



                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade in stock" id="stock<?php $abrv ?>">
                  <table cellpadding="4" cellspacing="1" class="table" width="100%" style="background-color: 	#f8f8ff ;">
                    <a index="s" ligne="1" ind="59" class="cocheru">Tout Cocher</a>
                    <a index="s" ligne="1" ind="59" class="decocheru">Tout Decocher</a>
                    <tbody>
                    <tr>
                      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="s1" value="1"></td>
                      <td align="center">Ajout</td>
                      <td align="center">Modification</td>
                      <td align="center">Suppression</td>
                      <td align="center">Impression</td>
                    <tr class="categories">
                        <td align="left">Article</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][25][add]" id="p92" value="1">
                            <input type="hidden" name="data[2][Lien][25][lien]" value="categories">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][edit]" id="p93" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][delete]" id="p94" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][imprimer]" id="p95" value="1"></td>
                    </tr>
                    <tr class="categories">
                        <td align="left">Categories</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][25][add]" id="p92" value="1">
                            <input type="hidden" name="data[2][Lien][25][lien]" value="categories">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][edit]" id="p93" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][delete]" id="p94" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][imprimer]" id="p95" value="1"></td>
                    </tr>
                    <tr class="souscategories">
                        <td align="left">Sous Categories</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][27][add]" id="p96" value="1">
                            <input type="hidden" name="data[2][Lien][27][lien]" value="souscategories">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][27][edit]" id="p97" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][27][delete]" id="p98" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][27][imprimer]" id="p99" value="1"></td>
                    </tr>

                    <tr class="souscategories">
                        <td align="left">Packs</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][27][add]" id="p96" value="1">
                            <input type="hidden" name="data[2][Lien][27][lien]" value="souscategories">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][27][edit]" id="p97" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][27][delete]" id="p98" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][27][imprimer]" id="p99" value="1"></td>

                    <tr class="Magasins">
                        <td align="left">Magasins</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][25][add]" id="p92" value="1">
                            <input type="hidden" name="data[2][Lien][25][lien]" value="categories">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][edit]" id="p93" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][delete]" id="p94" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][imprimer]" id="p95" value="1"></td>
                    </tr>
                    <tr class="depots">
                        <td align="left">Etat depots</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][25][add]" id="p92" value="1">
                            <input type="hidden" name="data[2][Lien][25][lien]" value="depots">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][edit]" id="p93" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][delete]" id="p94" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][imprimer]" id="p95" value="1"></td>
                    </tr>
                    <tr class="bondetransferts">
                        <td align="left">Transferts entre depots</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][25][add]" id="p92" value="1">
                            <input type="hidden" name="data[2][Lien][25][lien]" value="bondetransferts">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][edit]" id="p93" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][delete]" id="p94" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][imprimer]" id="p95" value="1"></td>
                    </tr>
                    <tr class="inventaires">
                        <td align="left">Inventaire</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][25][add]" id="p92" value="1">
                            <input type="hidden" name="data[2][Lien][25][lien]" value="inventaires">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][edit]" id="p93" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][delete]" id="p94" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][imprimer]" id="p95" value="1"></td>
                    </tr>
                    <tr class="bonderetoures">
                        <td align="left">Demande retour de stock</td>
                        <td align="center">
                            <input type="checkbox" name="data[2][Lien][25][add]" id="p92" value="1">
                            <input type="hidden" name="data[2][Lien][25][lien]" value="bonderetoures">
                        </td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][edit]" id="p93" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][delete]" id="p94" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[2][Lien][25][imprimer]" id="p95" value="1"></td>
                    </tr>
                  </tr>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade in stock" id="vente<?php $abrv ?>">
                  <table cellpadding="4" cellspacing="1" class="table" width="100%" style="background-color: 	#f8f8ff ;">
                    <a index="v" ligne="1" ind="100" class="cocheru">Tout Cocher</a>/
                    <a index="v" ligne="1" ind="100" class="decocheru">Tout Decocher</a>
                    <tbody>
                    <tr>
                      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="v1" value="4"></td>
                      <td align="center">Ajout</td>
                      <td align="center">Modification</td>
                      <td align="center">Suppression</td>
                      <td align="center">Impression</td>
                    </tr>

                    <tr class="demandeoffredeprixes">
                      <td align="left">Demande offre de prix</td>
                      <td align="center">
                        <input type="checkbox" name="data[4][Lien][37][add]" id="v5" value="1">
                        <input type="hidden" name="data[4][Lien][37][lien]" value="demandeoffredeprixes">
                      </td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][37][edit]" id="v6" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][37][delete]" id="v7" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][37][imprimer]" id="v8" value="1"></td>
                    </tr>
                    <tr class="factureclients">
                      <td align="left">Facture Fournisseurs</td>
                      <td align="center">
                        <input type="checkbox" name="data[4][Lien][38][add]" id="v18" value="1">
                        <input type="hidden" name="data[4][Lien][38][lien]" value="factureclients">
                      </td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][38][edit]" id="v19" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][38][delete]" id="v20" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][38][imprimer]" id="v21" value="1"></td>
                    </tr>
                    <tr class="reglementclients">
                      <td align="left">Reglement Fournisseurs </td>
                      <td align="center">
                        <input type="checkbox" name="data[4][Lien][39][add]" id="v22" value="1">
                        <input type="hidden" name="data[4][Lien][39][lien]" value="reglementclients">
                      </td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][39][edit]" id="v23" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][39][delete]" id="v24" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[4][Lien][39][imprimer]" id="v25" value="1"></td>

                    </tr>
                    <tr class="Fournisseurs">
                        <td align="left">Bon de commande </td>
                        <td align="center">
                            <input type="checkbox" name="data[4][Lien][39][add]" id="v22" value="1">
                            <input type="hidden" name="data[4][Lien][39][lien]" value="Fournisseurs">
                        </td>
                        <td align="center"><input type="checkbox" name="data[4][Lien][39][edit]" id="v23" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[4][Lien][39][delete]" id="v24" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[4][Lien][39][imprimer]" id="v25" value="1"></td>

                    </tr>
                    </tbody>
                  </table>
                </div>

                <div class="tab-pane fade in param" id="achat">
                  <table cellpadding="4" cellspacing="1" class="table" width="100%" style="background-color: 	#f8f8ff ;">
                    <a index="zones" ligne="1" ind="59" class="cocheru">Tout Cocher</a>/
                    <a index="zones" ligne="1" ind="59" class="decocheru">Tout Decocher</a>
                    <tbody>
                    <tr>
                      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="zones1" value="3"></td>
                      <td align="center">Ajout</td>
                      <td align="center">Modification</td>
                      <td align="center">Suppression</td>
                      <td align="center">Impression</td>
                      <td align="center">Validation</td>
                    </tr>
                    <tr class="demandeoffredeprixes">
                      <td align="left">Ajouter client</td>
                      <td align="center">
                        <input type="checkbox" name="data[3][Lien][0][add]" id="zones2" value="1">
                        <input type="hidden" name="data[3][Lien][0][lien]" value="demandeoffredeprixes">
                      </td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][1][edit]" id="zones3" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][2][delete]" id="zones4" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][3][imprimer]" id="zones5" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][4][valide]" id="zones18" value="1"></td>
                    </tr>
                    <tr class="commandes">
                      <td align="left">Commande client </td>
                      <td align="center">
                        <input type="checkbox" name="data[3][Lien][1][add]" id="zones6" value="1">
                        <input type="hidden" name="data[3][Lien][1][lien]" value="commandes">
                      </td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][1][edit]" id="zones7" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][1][delete]" id="zones8" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][1][imprimer]" id="zones9" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][1][valide]" id="zones19" value="1"></td>
                    </tr>
                    <tr class="factures">
                      <td align="left">Facture Client </td>
                      <td align="center">
                        <input type="checkbox" name="data[3][Lien][2][add]" id="zones10" value="1">
                        <input type="hidden" name="data[3][Lien][2][lien]" value="factures">
                      </td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][2][edit]" id="zones11" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][2][delete]" id="zones12" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][2][imprimer]" id="zones13" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][2][valide]" id="zones20" value="1"></td>
                    </tr>
                    <tr class="reglements">
                      <td align="left">Reglement Client</td>
                      <td align="center">
                        <input type="checkbox" name="data[3][Lien][5][add]" id="zones14" value="1">
                        <input type="hidden" name="data[3][Lien][5][lien]" value="reglements">
                      </td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][5][edit]" id="zones15" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][5][delete]" id="zones16" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][5][imprimer]" id="zones17" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[3][Lien][5][valide]" id="zones21" value="1"></td>
                    </tr>
                    <tr class="reglements">
                        <td align="left">Facture de Remise</td>
                        <td align="center">
                            <input type="checkbox" name="data[3][Lien][5][add]" id="zones14" value="1">
                            <input type="hidden" name="data[3][Lien][5][lien]" value="reglements">
                        </td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][edit]" id="zones15" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][delete]" id="zones16" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][imprimer]" id="zones17" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][valide]" id="zones21" value="1"></td>
                    </tr>
                    <tr class="reglements">
                        <td align="left">Facture de retour</td>
                        <td align="center">
                            <input type="checkbox" name="data[3][Lien][5][add]" id="zones14" value="1">
                            <input type="hidden" name="data[3][Lien][5][lien]" value="reglements">
                        </td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][edit]" id="zones15" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][delete]" id="zones16" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][imprimer]" id="zones17" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[3][Lien][5][valide]" id="zones21" value="1"></td>
                    </tr>
                    </tbody>
                  </table>
                </div>


                <div class="tab-pane fade in param" id="prévisionnement">
                  <table cellpadding="4" cellspacing="1" class="table" width="100%" style="background-color: 	#f8f8ff ;">
                    <a index="pr" ligne="1" ind="150" class="cocheru">Tout Cocher</a>/
                    <a index="pr" ligne="1" ind="150" class="decocheru">Tout Decocher</a>
                    <tbody>
                    <tr>
                      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="pr1" value="12"></td>
                      <td align="center">Ajout</td>
                      <td align="center">Modification</td>
                      <td align="center">Suppression</td>
                      <td align="center">Impression</td>
                      <!-- <td align="center">Validation</td> -->
                    </tr>
                    <tr class="clients">
                      <td align="left">Clients</td>
                      <td align="center">
                        <input type="checkbox" name="data[12][Lien][11][add]" id="pr2" value="1">
                        <input type="hidden" name="data[12][Lien][11][lien]" value="clients">
                      </td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][11][edit]" id="pr3" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][11][delete]" id="pr4" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][11][imprimer]" id="pr5" value="1"></td>
                    </tr>
                    <tr class="prospets">
                      <td align="left">Prospects</td>
                      <td align="center">
                        <input type="checkbox" name="data[12][Lien][17][add]" id="pr17" value="1">
                        <input type="hidden" name="data[12][Lien][17][lien]" value="prospets">
                      </td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][17][edit]" id="pr14" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][17][delete]" id="pr15" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][17][imprimer]" id="pr16" value="1"></td>
                    </tr>
                    <tr class="fournisseurs">
                      <td align="left">Fournisseurs</td>
                      <td align="center">
                        <input type="checkbox" name="data[12][Lien][1][add]" id="pr6" value="1">
                        <input type="hidden" name="data[12][Lien][1][lien]" value="fournisseurs">
                      </td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][1][edit]" id="pr7" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][1][delete]" id="pr8" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][1][imprimer]" id="pr9" value="1"></td>
                    </tr>
                    <tr class="commercials">
                      <td align="left">Commercials</td>
                      <td align="center">
                        <input type="checkbox" name="data[12][Lien][0][add]" id="pr13" value="1">
                        <input type="hidden" name="data[12][Lien][0][lien]" value="commercials">
                      </td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][0][edit]" id="pr10" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][0][delete]" id="pr11" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[12][Lien][0][imprimer]" id="pr12" value="1"></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade in param" id="Representant">
                  <table cellpadding="4" cellspacing="1" class="table" width="100%" style="background-color: 	#f8f8ff ;">
                    <a index="art" ligne="1" ind="59" class="cocheru">Tout Cocher</a>/
                    <a index="art" ligne="1" ind="59" class="decocheru">Tout Decocher</a>
                    <tbody>
                    <tr>
                      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="art1" value="8"></td>
                      <td align="center">Ajout</td>
                      <td align="center">Modification</td>
                      <td align="center">Suppression</td>
                      <td align="center">Impression</td>
                      <!-- <td align="center">Validation</td> -->
                    </tr>
                    <tr class="article">
                      <td align="left">Representants</td>
                      <td align="center">
                        <input type="checkbox" name="data[8][Lien][6][add]" id="art26" value="1">
                        <input type="hidden" name="data[8][Lien][6][lien]" value="article">
                      </td>
                      <td align="center"><input type="checkbox" name="data[8][Lien][6][edit]" id="art27" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[8][Lien][6][delete]" id="art28" value="1"></td>
                      <td align="center"><input type="checkbox" name="data[8][Lien][6][imprimer]" id="art29" value="1"></td>
                      <!-- <td align="center"><input type="checkbox" name="data[8][Lien][6][coutrevient]" id="art34" value="1"></td> -->
                    </tr>
                    <tr class="article">
                        <td align="left">Sectoriel</td>
                        <td align="center">
                            <input type="checkbox" name="data[9][Lien][7][add]" id="art26" value="1">
                            <input type="hidden" name="data[8][Lien][6][lien]" value="article">
                        </td>
                        <td align="center"><input type="checkbox" name="data[9][Lien][7][edit]" id="art27" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[9][Lien][7][delete]" id="art28" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[9][Lien][7][imprimer]" id="art29" value="1"></td>
                        <!-- <td align="center"><input type="checkbox" name="data[8][Lien][6][coutrevient]" id="art34" value="1"></td> -->
                    </tr>
                    <tr class="article">
                        <td align="left">Grossiste</td>
                        <td align="center">
                            <input type="checkbox" name="data[10][Lien][9][add]" id="art26" value="1">
                            <input type="hidden" name="data[10][Lien][9][lien]" value="grossiste">
                        </td>
                        <td align="center"><input type="checkbox" name="data[10][Lien][9][edit]" id="art27" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[10][Lien][9][delete]" id="art28" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[10][Lien][9][imprimer]" id="art29" value="1"></td>
                        <!-- <td align="center"><input type="checkbox" name="data[8][Lien][6][coutrevient]" id="art34" value="1"></td> -->
                    </tr>
                    <tr class="article">
                        <td align="left">Transporteur</td>
                        <td align="center">
                            <input type="checkbox" name="data[8][Lien][6][add]" id="art26" value="1">
                            <input type="hidden" name="data[8][Lien][6][lien]" value="article">
                        </td>
                        <td align="center"><input type="checkbox" name="data[8][Lien][6][edit]" id="art27" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[8][Lien][6][delete]" id="art28" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[8][Lien][6][imprimer]" id="art29" value="1"></td>
                        <!-- <td align="center"><input type="checkbox" name="data[8][Lien][6][coutrevient]" id="art34" value="1"></td> -->
                    </tr>
                    <tr class="article">
                        <td align="left">Sectoriel & Commercial</td>
                        <td align="center">
                            <input type="checkbox" name="data[11][Lien][10][add]" id="art26" value="1">
                            <input type="hidden" name="data[11][Lien][10][lien]" value="article">
                        </td>
                        <td align="center"><input type="checkbox" name="data[11][Lien][10][edit]" id="art27" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[11][Lien][10][delete]" id="art28" value="1"></td>
                        <td align="center"><input type="checkbox" name="data[11][Lien][10][imprimer]" id="art29" value="1"></td>
                        <!-- <td align="center"><input type="checkbox" name="data[8][Lien][6][coutrevient]" id="art34" value="1"></td> -->
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <button type="submit" class="pull-right btn btn-success btn-sm" id="uti" style="margin-right:48%;margin-top: 20px;margin-bottom:20px;">Enregistrer</button>
            <?php echo $this->Form->end(); ?>
          </nav>
        </div>

      </div>

    </div>
    <!-- /.box -->
  </div>
  </div>
</section>
<script>
  $(function() {
    $('.cocheru').on('click', function() {
      index = $(this).attr('index');
      ligne = $(this).attr('ligne');
      ligne = $(this).attr('ligne');
      // alert(ligne);
      ind = $(this).attr('ind');
      for (i = 0; i <= Number(ligne); i++) {
        for (j = 0; i <= Number(ind); i++) {
          $('#' + index + i).prop('checked', true);
        }
      }
    })
    //*************************************************************************************************************
    $('.decocheru').on('click', function() {
      index = $(this).attr('index');
      ligne = $(this).attr('ligne');
      ind = $(this).attr('ind');
      for (i = 0; i <= Number(ligne); i++) {
        for (j = 0; i <= Number(ind); i++) {
          $('#' + index + i).prop('checked', false);
        }
      }
    })
  })
</script>
