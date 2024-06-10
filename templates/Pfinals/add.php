<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Content Header (Page header) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>
<?php echo $this->Html->script('dhouha'); ?>
<section class="content-header">
  <h1>
    Ajouter PACK
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
                <?php
                    echo $this->Form->control('Description');
                    echo $this->Form->control('Prix');
                    echo $this->Form->control('PrixSEC');
                    echo $this->Form->control('PrixGROS');
                    echo $this->Form->control('PHOTO');
                echo $this->Form->control('Gratuit', [
                  'options' => [
                    '1' => 'Yes',
                    '0' => 'No'
                  ]
                ]);
                    echo $this->Form->control('souscategorie_id', ['options' => $souscategories]);
                    echo $this->Form->control('categories_id', ['options' => $categories]);
                ?>
            </fieldset>
          <section class="content" style="width: 99% ;">
              <div class="col-xs-12" style="margin-bottom: 70px;">
                  <a class="btn btn-primary " style="margin-top:30px;margin-bottom:20px;" data-toggle="modal" data-target="#modal-default" table='addtable' index='index' id='ajouter_ligne' style="
                                    float: right;
                                    margin-bottom: 20px;
                                    ">
                      Ajouter <i class="fa fa-plus-circle "></i></a>
                  <table class="table table-bordered table-striped table-bottomless" id="tabligne">
                      <thead>
                      <tr>
                          <th></th>
                          <th style='text-align:left !important'><?= (' Article') ?></th>
                          <th style='text-align:left !important'><?= (' Prix') ?></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr class="tr" style="display: none !important">
                          <td align="center">
                              <i index="" id="" class="fa fa-times supligne" style="color: #c9302c;font-size: 22px;"></i>
                              <input type="hidden" name="" id="" champ="sup" table="ligne" index="" class="form-control">
                          </td>
                          <td align="right">
                              <?php echo $this->Form->control('article_id', ['label' => false, 'required' => 'off', 'class' => 'form-control control-label', 'index' => '', 'name' => '', 'id' => '', 'champ' => 'Dsignation', 'style' => 'text-align:right', 'table' => 'ligne', 'options' => $articles, 'type' => '']); ?>
                          </td>
                          <td align="right">
                              <?php echo $this->Form->control('descr', ['label' => false,  'required' => 'off', 'class' => 'form-control control-label', 'index' => '', 'name' => '', 'id' => '', 'champ' => 'descr', 'style' => 'text-align:right', 'table' => 'ligne', 'type' => 'textarea']); ?>
                          </td>

                      </tr>
                      </tbody>
                  </table>
                  <input type="hidden" value=-1 id="index">
              </div>
          </section>


          <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>



    <script>
        $(".supligne").on("click", function() {
            index = $(this).attr("index");
            //alert(index);
            $("#sup" + index).val(1);
            //alert(('#sup' + index).val());
            $(this).parent().parent().hide();
        });
        $("#ajouter_ligne").on("click", function() {
            index = Number($("#index").val()); //alert(index+'index')
            //alert(index)
            sup = $("#sup" + index).val(); //alert(index)
            ajouter_lignefares("tabligne", "index");
        });

        function ajouter_lignefares(table, index) {
            ind = Number($("#" + index).val()) + 1;
            // alert(ind)+'ind';

            $ttr = $("#" + table)
                .find(".tr")
                .clone(true);
            $ttr.attr("class", "");
            i = 0;
            tabb = [];
            $ttr.find("input,select,textarea,tr,td,div").each(function() {
                tab = $(this).attr("table"); //alert(tab)
                champ = $(this).attr("champ");
                //alert(champ)
                $(this).attr("index", ind);
                $(this).attr("id", champ + ind);
                $(this).attr("name", "data[" + tab + "][" + ind + "][" + champ + "]");
                $(this).attr(
                    "data-bv-field",
                    "data[" + tab + "][" + ind + "][" + champ + "]"
                );
                $type = $(this).attr("type");
                $(this).val("");
                if ($type == "radio") {
                    $(this).attr("name", "data[" + champ + "]");
                    //$(this).attr('value',ind);
                    $(this).val(ind);
                }
                if (champ == "datedebut" || champ == "datefin") {
                    $(this).attr("onblur", "nbrjour(" + ind + ")");
                }

                $(this).removeClass("anc");
                if ($(this).is("select")) {
                    tabb[i] = champ + ind;
                    i = Number(i) + 1;
                }
                // $(this).val('');
            });
            $ttr.find("i").each(function() {
                $(this).attr("index", ind);
            });
            $("#" + table).append($ttr);
            $("#" + index).val(ind);
            $("#" + table)
                .find("tr:last")
                .show();
            for (j = 0; j <= i; j++) {
                //  uniform_select(tabb[j]);
            }
            cou = ind + 1;
            //alert(cou);
            $("#number" + index).val(cou);
            $("#personnel_id" + ind).select2();
        }
    </script>
