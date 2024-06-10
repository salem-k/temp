<?php $this->layout = 'def'; ?>
<?php

use Cake\Core\Configure; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $this->Html->css('AdminLTE./bower_components/bootstrap/dist/css/bootstrap.min'); ?>
  <?php echo $this->Html->css('AdminLTE./bower_components/font-awesome/css/font-awesome.min'); ?>
  <?php echo $this->Html->css('AdminLTE./bower_components/Ionicons/css/ionicons.min'); ?>
  <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
  <?php echo $this->Html->css('AdminLTE./plugins/iCheck/square/blue'); ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <?php echo $this->fetch('css'); ?>
</head>
<br>

<body class="hold-transition login-page" style="background-color: rgb(244,242,245);">
  <div class="login-box">
    <div class="login-box-body">
      <?php echo $this->Html->image('logo.png', ['width' => '320px', 'height' => '130px', 'style' => 'background-color: transparent;']); ?>
      <div style=" margin-bottom:40px;">
        <?= $this->Form->create() ?>
        <fieldset style='text-align:left !important'>
          <br>
          <?= $this->Form->control('login', ['required' => true, 'label' => 'Email', 'style' => 'text-align:left']) ?>
          <div class="row">
            <div class="col-xs-10 pull-left">
              <?= $this->Form->control('password', ['required' => true, 'label' => 'Password', 'id' => 'password', 'style' => 'text-align:left']) ?>
            </div>
            <div class="col-xs-1" style="margin-top: 30px;margin-right:1%;">
              <button id="password-toggle" type="button"><i class="fa fa-eye" style="color:#8C7BCCFF;border:#12A99D;"></i></button>
            </div>
          </div>
        </fieldset>
        <button type="submit" class="pull-right btn btn-success btn-sm alertuserm" style=" width:100%; height:40px;background-color:#8c7bcc;border:#7755da;"><i class="fa fa-key"></i></button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
  <?php echo $this->Html->script('AdminLTE./bower_components/jquery/dist/jquery.min'); ?>
  <?php echo $this->Html->script('AdminLTE./bower_components/bootstrap/dist/js/bootstrap.min'); ?>
  <?php echo $this->Html->script('AdminLTE./plugins/iCheck/icheck.min'); ?>
  <?php echo $this->fetch('script'); ?>
  <?php echo $this->fetch('scriptBottom'); ?>
  <script>
    $(document).ready(function() {
      $('#password-toggle').click(function() {
        var type = $('#password').attr('type');
        if (type === 'password') {
          $('#password').attr('type', 'text');
        } else {
          $('#password').attr('type', 'password');
        }
      });
    });
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
      });
    });
  </script>
</body>

</html>
<?php echo $this->Html->script('alert'); ?>
