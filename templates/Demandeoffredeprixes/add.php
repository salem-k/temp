<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demandeoffredeprix $demandeoffredeprix
 */
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
<?php echo $this->Html->script('controle_frs'); ?>
<?php echo $this->Html->script('dhouha'); ?>
<?php echo $this->Html->css('select2'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Demande offre de prix
            <small>
                <?php echo __(''); ?>
            </small>
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
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <?php echo __(''); ?>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo $this->Form->create($demandeoffredeprix, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13"]); ?>
                    <div class="box-body">
                        <div class="row">

                            <div class="col-xs-6">
                                <?php echo $this->Form->control('date', ['label' => 'Date', 'empty' => true, 'id' => 'date', 'class' => "form-control pull-right"]);
                                ?>
                            </div>
                            <div class="col-xs-6">
                                <?php echo $this->Form->control('numero', ['value' => $b, 'label' => 'Numero', 'required' => 'off', 'id' => 'datecommande', 'div' => 'form-group', 'between' => '<div class="col-sm-10">', 'after' => '</div>', 'class' => 'form-control ', 'type' => '', 'readonly' => 'readonly']); ?>
                            </div>







                        </div>
                        <div class="row">

                            <div class="col-xs-6">
                                <?php echo $this->Form->control('projet_id', ['empty' => 'Veuillez choisir un projet!!', 'class' => 'form-control select2', 'champ' => 'projet_id', 'label' => 'Projet']); ?>
                            </div>
                        </div>
                        <section class="content-header">
                            <h1 class="box-title">
                                <?php echo __(' Les articles'); ?>
                            </h1>
                        </section>

                        <section class="content" style="width: 99%">
                            <div class="row">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <a class="btn btn-primary al" table='addtable' index='index0' id='ajouter_ligne04'
                                           style="
                                       float: right;
                                       margin-bottom: 5px;
                                       ">
                                            <i class="fa fa-plus-circle "></i> Ajouter article</a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive ls-table">
                                            <table class="table table-bordered table-striped table-bottomless"
                                                   id="tabligne0">
                                                <thead>
                                                <tr width:20px">
                                                <td align="center" style="width: 40%;"><strong>Nom du
                                                        article</strong></td>
                                                <td align="center" style="width: 40%;"><strong>Quantité</strong>
                                                </td>
                                                <td align="center" style="width: 20%;"></td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="tr" style="display: none !important">
                                                    <td align="center">


                                                        <div id="ar1" champ='' class="col-md-10">
                                                            <?php echo $this->Form->input('sup0', array('name' => '', 'id' => '', 'champ' => 'sup0', 'table' => 'lignea', 'index' => '', 'div' => 'form-group', 'between' => '<div class="col-sm-12">', 'after' => '</div>', 'type' => 'hidden', 'class' => 'form-control'));
                                                            ?>
                                                            <?php echo $this->Form->input('a', array('label' => '', 'options' => $articles, 'index' => '', 'name' => '', 'id' => 'article_id', 'champ' => 'article_id', 'table' => 'lignea', 'empty' => 'Veuillez choisir !!', 'div' => 'form-group', 'between' => '<div class="col-sm-12" >', 'after' => '</div>', 'empty' => 'Veuillez Choisir !!')); ?>
                                                        </div>



                                                        <div id="ar2" champ='' style="display: none !important"
                                                             class="col-md-10">
                                                            <input table="lignea" type='text' index="" id="article_idd"
                                                                   champ='article_idd' class='form-control' class='input'>

                                                        </div>
                                                        <!-- <span
                                title="ajout article"> <a  href="javascript:;" class="btn btn-primary b1"><i class='fa fa fa-plus'></i></a></span>  -->
                                                    <td align="center">
                                                        <?php echo $this->Form->control('a', ['label' => '', 'name' => '', 'class' => ' form-control enr80', 'index' => '', 'champ' => 'qte', 'table' => 'lignea', 'id' => 'qte']); ?>
                                                    </td>
                                                    <td align="center">
                                                        <i index="0" id="" class="fa fa-times supLigneart"
                                                           style="color: #c9302c;font-size: 22px;"></i>
                                                    </td>
                                                </tr>
                                                <input type="hidden" value="-1" id="index0">
                                                </tbody>
                                            </table><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>



                        <section class="content-header">
                            <h1 class="box-title">
                                <?php echo __('Fournisseurs'); ?>
                            </h1>
                        </section>

                        <section class="content" style="width: 99%">
                            <div class="row">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <a class="btn btn-primary al" table='addtable' index='index1' id='ajouter_ligne14'
                                           style="
                                       float: right;
                                       margin-bottom: 5px;
                                       ">
                                            <i class="fa fa-plus-circle "></i> Ajouter fournisseur</a>

                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive ls-table">
                                            <table class="table table-bordered table-striped table-bottomless"
                                                   id="tabligne1">
                                                <thead>
                                                <tr width:20px">
                                                <td align="center" style="width: 50%;"><strong>Nom du
                                                        fournisseur</strong></td>
                                                <td align="center" style="width: 50%;"><strong>E_mail
                                                        fournisseur</strong></td>

                                                <td align="center" style="width: 50%;"></td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="tr" style="display: none !important">


                                                    <td align="center">
                                                        <?php echo $this->Form->input('sup1', array('name' => '', 'id' => '', 'champ' => 'sup1', 'table' => 'lignef', 'index' => '', 'div' => 'form-group', 'between' => '<div class="col-sm-12">', 'after' => '</div>', 'type' => 'hidden', 'class' => 'form-control'));
                                                        ?>

                                                        <div id="" index="" champ='f1' class="col-md-10">
                                                            <?php echo $this->Form->input('a', array('label' => '', 'options' => $fournisseurs, 'name' => '', 'id' => 'id', 'class' => 'form-control getmailfrns', 'champ' => 'fournisseur_id', 'table' => 'lignef', 'div' => 'form-group', 'between' => '<div class="col-sm-12 " >', 'after' => '</div>', 'empty' => 'Veuillez Choisir !!')); ?>

                                                        </div>
                                                        <div index="" id="" champ="inputfour" class="col-md-10" style="display: none !important">
                                                            <?php echo $this->Form->input('a', array('label' => '', 'name' => '', 'id' => 'id', 'class' => 'form-control', 'champ' => 'nameF', 'table' => 'lignef', 'div' => 'form-group', 'between' => '<div class="col-sm-12 " >', 'after' => '</div>')); ?>

                                                        </div>
                                                        <br>
                                                        <span title="Ajouter fournisseur"> <a  href="javascript:;" index="" class="btn btn-primary ajofournisseur"><i class='fa fa fa-plus'></i></a></span>

                                                    </td>
                                                    <td>
                                                        <?php echo $this->Form->input('a', array('label' => '', 'name' => '', 'class' => 'form-control', 'champ' => 'mail', 'table' => 'lignef', 'div' => 'form-group', 'between' => '<div class="col-sm-12 " >', 'after' => '</div>')); ?>

                                                        <!-- <input table="lignef" type='text' index="" id="" champ='mail' class='form-control'> -->
                                                    </td>
                                                    <td align="center">
                                                        <i index="0" id="" class="fa fa-times supLigneFournisseur"
                                                           style="color: #c9302c;font-size: 22px;"></i>
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












                        <div align="center" id="enr3" class="index">
                            <?php echo $this->Form->submit(__('Enregistrer')); ?>
                        </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
                <!-- /.box -->
            </div>

    </section>
    <script>
        $(document).ready(function () {
            $(".getmailfrns").on("change", function () {
                //alert("dhouha");
                ind = $(this).attr("index");
                index = $("#index1").val(); //alert(index)
                fournisseur_id = $("#fournisseur_id" + ind).val();
                // alert(fournisseur_id);
                if (fournisseur_id != "") {
                    $.ajax({
                        method: "GET",
                        url: "<?= $this->Url->build(['controller' => 'Demandeoffredeprixes', 'action' => 'getmail']) ?>",
                        dataType: "json",
                        data: {
                            fournisseur_id: fournisseur_id,
                        },
                        headers: {
                            "X-CSRF-Token": $('meta[name="csrfToken"]').attr("content"),
                        },
                        success: function (data) {
                            // alert(data.mail);
                            $('#mail' + ind).val(data.mail);
                            // $('#gouvernorat').select2();
                            // // uniform_select('sousfamille1_id');
                        },
                    });
                }else{
                    $('#mail' + ind).val("");
                }
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
