<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>

<?php echo $this->Html->script('salma'); ?>
<?php echo $this->Html->script('hechem'); ?>
<?php echo $this->Html->script('dhouha'); ?>
<?php echo $this->Html->css('select2'); ?>

  <section class="content-header">
    <h1>

      Nouveau Article
      <!-- <ol class="breadcrumb">
            <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-reply"></i>
                    <?php echo __('Retour'); ?>
                </a></li>
        </ol> -->
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
                <?php echo $this->Form->control('Refggb', ['class' => 'form-control', 'label' => 'Ref.CO']); ?>
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
                  <option value="1">En vente </option>
                  <option value="0">Hors vente</option>

                </select>
                <?php //echo $this->Form->control('fournisseur', ['class' => 'form-control select2', 'label' => 'Fournisseur']); ?>
              </div>
              <div class="col-xs-6">
                <span><strong>État (Achat)</strong></span>
                <select name="etat" class="form-control select2 control-label" id="etata">
                  <option value="">Veuillez choisir !!</option>
                  <option value="1">En achat </option>
                  <option value="0">Hors achat </option>

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
                <?php echo $this->Form->control('unite_id', ['label' => 'Unité', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2']); ?>
              </div>
            </div>
          </div>


          <div class="row">
            <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
              <div class="col-xs-6">
                <?php echo $this->Form->control('poidsbrut', ['label' => 'Poids', 'class' => 'form-control']); ?>
              </div>
              <div class="col-xs-6">
                <?php echo $this->Form->control('Code', ['label' => 'Nomenclature douanière / Code SH', 'class' => 'form-control']); ?>
              </div>

            </div>
          </div>
          <div class="row">
            <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">

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
                <div style="margin: 0 auto; margin-left: 20px; margin-right: 20px; position: static;">
                    <div class="col-xs-5">
                        <?php echo $this->Form->control('categorie_id', ['label' => 'Categorie', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2 souscat']); ?>
                    </div>
                    <div class="col-xs-1" style="margin-top: 31px;">
                        <a onclick="openWindow(1000, 1000, '/categories/add');"><i class="fa fa-plus" style="color:success;font-size: 25px;"></i></a>
                    </div>
                    <div class="col-xs-5" id="divsous">
                        <?php echo $this->Form->control('souscategorie_id', ['label' => 'Sous categorie', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2']); ?>
                    </div>
                    <div class="col-xs-1" style="margin-top: 31px;">
                        <a onclick="openWindow(1000, 1000, '/souscategories/add');"><i class="fa fa-plus" style="color:success;font-size: 25px;"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="margin: 0 auto; margin-left: 20px; margin-right: 20px; position: static;">
                    <div class="col-xs-6">
                        <span><strong>Utiliser les numéros de lots/série</strong></span>
                        <select name="numero_lot" class="form-control select2 control-label" id="">
                            <option value="">Veuillez choisir !!</option>
                            <option value="1">Non(Lot/Série non utilisé)</option>
                            <option value="0">Oui(Lot/Série requis)</option>
                        </select>
                    </div>
                    <div class="col-xs-5">
                        <?php echo $this->Form->control('depot_id', ['label' => 'Depot', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2']); ?>
                    </div>
                    <div class="col-xs-1" style="margin-top: 31px;">
                        <a onclick="openWindow(1000, 1000, '/depots/add');"><i class="fa fa-plus" style="color:success;font-size: 25px;"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="margin: 0 auto; margin-left: 20px; margin-right: 20px; position: static;">
                    <div class="col-xs-4">
                        <?php echo $this->Form->control('PrixV', ['label' => 'Prix de vente', 'class' => 'form-control']); ?>
                    </div>
                    <div class="col-xs-4">
                        <?php echo $this->Form->control('tva_id', ['label' => 'Taux TVA', 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2']); ?>
                    </div>
                    <div class="col-xs-4">
                        <?php echo $this->Form->control('PrixVM', ['label' => 'Prix de vente min.', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>

            <section class="content-header">
                <h1 class="box-title">
                    <?php echo __('Fournisseurs'); ?>
                </h1>
            </section>

            <section class="content" style="width: 99%">
                <div class="row">
                    <div class="box">
                        <div class="box-header with-border">
                            <a class="btn btn-primary ajouter_lignefournisseur" table='addtable' index='index1' id=''
                               style="float: right; margin-bottom: 5px;">
                                <i class="fa fa-plus-circle"></i> Ajouter fournisseur
                            </a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive ls-table">
                                <table class="table table-bordered table-striped table-bottomless" id="tabligne1">
                                    <thead>
                                    <tr width:20px">
                                    <td align="center" style="width: 50%;"><strong>Nom du fournisseur</strong></td>
                                    <td align="center" style="width: 50%;"><strong>Prix</strong></td>
                                    <td align="center" style="width: 50%;"></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="tr" style="display: none !important">
                                        <td align="center">
                                            <?php echo $this->Form->input('sup1', ['name' => '', 'id' => '', 'champ' => 'sup1', 'table' => 'lignef', 'index' => '', 'div' => 'form-group', 'between' => '<div class="col-sm-12">', 'after' => '</div>', 'type' => 'hidden', 'class' => 'form-control']); ?>
                                            <?php echo $this->Form->input('fournisseur_id', ['label' => '', 'name' => '', 'id' => 'id', 'class' => 'form-control', 'champ' => 'fournisseur_id', 'table' => 'lignef', 'div' => 'form-group', 'between' => '<div class="col-sm-12">', 'after' => '</div>', 'empty' => 'Veuillez Choisir !!']); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Form->input('prix', ['label' => '', 'name' => '', 'class' => 'form-control', 'champ' => 'prix', 'table' => 'lignef', 'div' => 'form-group', 'between' => '<div class="col-sm-12">', 'after' => '</div>']); ?>
                                        </td>
                                        <td align="center">
                                            <i index="0" id="" class="fa fa-times supLigneFou" style="color: #c9302c; font-size: 22px;"></i>
                                        </td>
                                    </tr>
                                    <input type="hidden" value="-1" id="index1">
                                    </tbody>
                                </table><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div align="center">
                <div class="pull-right" style="margin-right:40%; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary" id="addclient">Créer</button>
                    <a href="<?php echo $this->Url->build(['action' => 'index']); ?>" class="btn btn-primary">Retour</a>
                </div>
            </div>
            <?php /* echo $this->Form->submit(__('Enregistrer')); */ ?>
            <?php echo $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </section>
<script type="text/javascript">
    function openWindow(h, w, url) {
        leftOffset = (screen.width / 2) - w / 2;
        topOffset = (screen.height / 2) - h / 2;
        window.open(url, this.target, 'left=' + leftOffset + ',top=' + topOffset + ',width=' + w + ',height=' + h + ',resizable,scrollbars=yes');
    }
    $('#code').on('keyup', function () {
        code = $('#code').val();
        $('#compte').val(code);
    });

    $(function () {
        $('.pays').on('change', function () {
            id = $('#pay_id').val();
            $.ajax({
                method: "GET",
                url: "<?= $this->Url->build(['controller' => 'Clients', 'action' => 'getgouv']) ?>",
                dataType: "json",
                data: { id: id },
                headers: { 'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content') },
                success: function (data) {
                    $('#divgouv').html(data.select);
                    $('#gouvernorat').select2();
                }
            });
        });

        $('.souscat').on('change', function () {
            id = $('#categorie-id').val();
            $.ajax({
                method: "GET",
                url: "<?= $this->Url->build(['controller' => 'Articles', 'action' => 'getsouscat']) ?>",
                dataType: "json",
                data: { id: id },
                headers: { 'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content') },
                success: function (data) {
                    $('#divsous').html(data.select);
                    $('#souscategorie_id').select2();
                }
            });
        });
    });
</script>


<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'css']); ?>
  <!-- bootstrap datepicker -->
<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min', ['block' => 'css']); ?>
  <!-- iCheck for checkboxes and radio inputs -->
<?php echo $this->Html->css('AdminLTE./plugins/iCheck/all', ['block' => 'css']); ?>
  <!-- Bootstrap Color Picker -->
<?php echo $this->Html->css('AdminLTE./bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min', ['block' => 'css']); ?>
  <!-- Bootstrap time Picker -->
<?php echo $this->Html->css('AdminLTE./plugins/timepicker/bootstrap-timepicker.min', ['block' => 'css']); ?>
  <!-- Select2 -->
<?php echo $this->Html->css('AdminLTE./bower_components/select2/dist/css/select2.min', ['block' => 'css']); ?>

  <!-- Select2 -->
<?php echo $this->Html->script('AdminLTE./bower_components/select2/dist/js/select2.full.min', ['block' => 'script']); ?>
  <!-- InputMask -->
<?php echo $this->Html->script('AdminLTE./plugins/input-mask/jquery.inputmask', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./plugins/input-mask/jquery.inputmask.extensions', ['block' => 'script']); ?>
  <!-- date-range-picker -->
<?php echo $this->Html->script('AdminLTE./bower_components/moment/min/moment.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-daterangepicker/daterangepicker', ['block' => 'script']); ?>
  <!-- bootstrap datepicker -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min', ['block' => 'script']); ?>
  <!-- bootstrap color picker -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min', ['block' => 'script']); ?>
  <!-- bootstrap time picker -->
<?php echo $this->Html->script('AdminLTE./plugins/timepicker/bootstrap-timepicker.min', ['block' => 'script']); ?>
  <!-- iCheck 1.0.1 -->
<?php echo $this->Html->script('AdminLTE./plugins/iCheck/icheck.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>

  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        format: 'MM/DD/YYYY h:mm A'
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      })

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>

<?php $this->end(); ?>
