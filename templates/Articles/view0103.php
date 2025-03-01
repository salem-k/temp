<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>

<?php echo $this->Html->script('salma'); ?>
<?php echo $this->Html->script('hechem'); ?>

<?php echo $this->Html->css('select2'); ?>

<section class="content-header">
    <h1>

        Consultation produit
    </h1>
         <ol class="breadcrumb">
            <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-reply"></i>
                    <?php echo __('Retour'); ?>
                </a></li>
        </ol> 
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box ">
                <?php echo $this->Form->create($article, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('Reffourni', ['class' => 'form-control', 'label' => 'Ref.Fourn']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('Refggb', ['class' => 'form-control', 'label' => 'Ref.ggb']); ?>
                        </div>

                    </div>
                </div>
                <!--                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                        </div>
                    </div>
                </div>-->
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('Dsignation', ['class' => 'form-control', 'label' => 'Libelle']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('URL', ['class' => 'form-control', 'label' => 'URL publique']); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <span><strong>État (Vente)</strong></span>
                            <select name="vente" class="form-control select2 control-label" id="etatv">
                                <option value="">Veuillez choisir !!</option>
                                <option value="1" <?php if($article->vente == 1){?> <?php echo 'selected="selected"'?><?php } ?>>OUI </option>
                                <option value="0" <?php if($article->vente == 0){?> <?php echo 'selected="selected"'?><?php } ?>>NON</option>

                            </select>
                            <?php //echo $this->Form->control('fournisseur', ['class' => 'form-control select2', 'label' => 'Fournisseur']); ?>
                        </div>
                        <div class="col-xs-6">
                            <span><strong>État (Achat)</strong></span>
                            <select name="etat" class="form-control select2 control-label" id="etata">
                                <option value="">Veuillez choisir !!</option>
                                <option value="1" <?php if($article->etat == 1){?> <?php echo 'selected="selected"'?><?php } ?>>OUI </option>
                                <option value="0" <?php if($article->etat == 0){?> <?php echo 'selected="selected"'?><?php } ?>>NON</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">

                            <?php echo $this->Form->control('Description', ['class' => 'form-control', 'type' => 'textarea', 'label' => 'Description']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('note', ['class' => 'form-control', 'type' => 'textarea', 'label' => 'Note (non visible sur les factures, propals...)']); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('Quantit_Disponible', ['type' => 'text', 'class' => 'form-control', 'label' => 'Limite stock pour alerte']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('Quantit_Command', ['type' => 'text', 'class' => 'form-control', 'label' => 'Stock désiré optimal']); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('typearticle_id', ['class' => 'form-control select2', 'empty' => 'Veuillez choisir !!', 'label' => 'Nature du produit']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('unite_id', ['label' => 'Unité','empty' => 'Veuillez choisir !!', 'class' => 'form-control']); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">

                        <div class="col-xs-6">
                            <?php echo $this->Form->control('pay_id', ['label' => 'Pays', 'empty' => 'Veuillez choisir !!', 'id' => 'pay_id', 'class' => 'form-control select2 control-label pays']); ?>
                        </div>
                        <div class="col-xs-6" id="divgouv">
                            <?php echo $this->Form->control('gouvernorat_id', ['label' => 'Département / Canton', 'id' => 'gouvernorat', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2 control-label gouv']); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('poidsbrut', ['label' => 'Poids', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('Code', ['label' => 'Nomenclature douanière / Code SH', 'class' => 'form-control']); ?>
                        </div>
                     
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-3">
                            <?php echo $this->Form->control('longueur', ['label' => 'Longueur', 'class' => 'form-control']); ?>
                        
                        </div>
                        <div class="col-xs-3">
                            <?php echo $this->Form->control('largeur', ['label' => 'Largeur', 'class' => 'form-control']); ?>
                        </div>
                        <div class="col-xs-3">
                            <?php echo $this->Form->control('hauteur', ['label' => 'Hauteur', 'class' => 'form-control']); ?>
                        </div>
                        <div class="col-xs-3">
                            <?php echo $this->Form->control('Unite', ['options'=>$unites,'label' => 'Unite','empty' => 'Veuillez choisir !!', 'class' => 'form-control select2']); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('surface', ['label' => 'Surface', 'class' => 'form-control']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('volume', ['label' => 'Volume', 'class' => 'form-control']); ?>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('categorie_id', ['label' => 'Categorie', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control']); ?>
                        </div>
                        <div class="col-xs-6">
                            <?php echo $this->Form->control('souscategorie_id', ['label' => 'Sous categorie', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control']); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-4">
                            <?php echo $this->Form->control('PrixV', ['label' => 'Prix de vente', 'class' => 'form-control']); ?>
                        
                        </div>
                        <div class="col-xs-4">
                            <?php echo $this->Form->control('tva_id', ['label' => 'Taux TVA', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control']); ?>
                           
                        </div>
                        <div class="col-xs-4">
                            <?php echo $this->Form->control('PrixVM', ['label' => 'Prix de vente min.', 'class' => 'form-control']); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-4">
                            <?php echo $this->Form->control('codecomptablevente_id', ['label' => 'Code comptable (vente)','empty' => 'Veuillez choisir !!',  'class' => 'form-control']); ?>
                        
                        </div>
                        <div class="col-xs-4">
                            <?php echo $this->Form->control('codecomptableexport_id', ['label' => 'Code comptable (vente a l\'export)', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control']); ?>
                           
                        </div>
                        <div class="col-xs-4">
                            <?php echo $this->Form->control('codecomptableachat_id', ['label' => 'Code comptable (achat)','empty' => 'Veuillez choisir !!',  'class' => 'form-control']); ?>
                        </div>
                    </div>
                </div>
                <div align="center">



                    <!-- <div class="pull-right" style="margin-right:40%;margin-top: 20px;">
                        <button type="submit" class="btn btn-primary" id="addclient">Créer</button>
                        <a href="<?php echo $this->Url->build(['action' => 'index']); ?>"
                            class="btn btn-primary">Retour</a>
                    </div> -->
                </div>
                <?php /* echo $this->Form->submit(__('Enregistrer')); */?>

                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">

    $('#code').on('keyup', function () {
        code = $('#code').val();
        $('#compte').val(code);
    })




    $(function () {
        $('.pays').on('change', function () {
            // alert('hello');
            id = $('#pay_id').val();
            // alert(id)
            $.ajax({
                method: "GET",
                url: "<?= $this->Url->build(['controller' => 'Clients', 'action' => 'getgouv']) ?>",
                dataType: "json",
                data: {
                    id: id,

                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                success: function (data) {
                    //alert(data.select);
                    $('#divgouv').html(data.select);
                    $('#gouvernorat').select2();
                    // uniform_select('sousfamille1_id');


                }

            })

        });
        $('select').attr('disabled', 'true');
         $('input,textarea').attr('readonly', 'readonly');
    }); nouveau_client







</script>