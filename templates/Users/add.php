<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Content Header (Page header) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
<section class="content-header">
  <h1>
    Utilisateurs
    <small><?php echo __(''); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-reply"></i> <?php echo __('Retour'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box ">
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo $this->Form->create($user, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13"]); ?>
        <div class="box-body">
          <div class="row">
            <div class="col-xs-6">
              <?php
              echo $this->Form->control('personnel_id', ['options' => $personnels, 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2 ']); ?>
            </div>
            <div class="col-xs-6">
              <?php echo $this->Form->control('utilisateur_id', ['label'=>'Profile','options' => $utilisateurs, 'empty' => 'Veuillez choisir !!', 'class' => 'form-control select2 ']); ?>
            </div>
            <div class="col-xs-6">
              <?php echo $this->Form->control('login'); ?>
            </div>
            <div class="col-xs-6">
              <?php
              echo $this->Form->control('password'); ?>
            </div>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="poste" id="optionsRadios2" value="0">
              Admin
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="poste" id="optionsRadios3" value="1">
              Point de vente
            </label>
          </div>


          <button type="submit" class="pull-right btn btn-success btn-sm log" id="alertuserm" style="margin-right:48%;margin-top: 20px;margin-bottom:20px;">Enregistrer</button>
          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box-body -->


      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->
</section>
<?php echo $this->Html->script('AdminLTE./bower_components/select2/dist/js/select2.full.min', ['block' => 'script']); ?>
<?php echo $this->Html->css('AdminLTE./bower_components/select2/dist/css/select2.min', ['block' => 'css']); ?>
<?php $this->start('scriptBottom'); ?>
<?php echo $this->Html->script('alert'); ?>
<script>
  $('.select2').select2()
</script>
<?php $this->end(); ?>
<script>
  $(function () {
    $(".log").on("mouseover", function() {
      //alert('')
      idlogin = $("#login").val();
      $.ajax({
        type: "GET",
        method: "GET",
        url: "<?= $this->Url->build(['controller' => 'Users', 'action' => 'getlogin']) ?>",
        dataType: "JSON",
        data: {
          login: idlogin,
        },
        success: function(response) {
          //  console.log(data);
          //alert(response.ligne)
          t=response.ligne;
          if (t==1) {
            alert(
              " Login est déjà utilisé , Veuillez vous choisir un autre login"
            );
            return false;
          }
        },
      });
    });
  });
</script>
