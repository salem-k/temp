<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>


<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box ">
                <?php echo $this->Form->create($commandeclient, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
                <div class="row">
                    <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
                        <div class="col-xs-6">
                            <fieldset>
                                <legend><?= __('Add Commandeclient') ?></legend>
                                <?php echo $this->Form->control('code'); ?>
                                <?php echo $this->Form->control('client_id', ['options' => $clients]); ?>
                                <?php echo $this->Form->control('commentaire'); ?>
                                <?php echo $this->Form->control('depot_id', ['options' => $depots]); ?>
                                <?php echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]); ?>
                                <?php echo $this->Form->control('totalht'); ?>
                                <?php echo $this->Form->control('totalttc'); ?>
                                <?php echo $this->Form->control('totalremise'); ?>
                                <?php echo $this->Form->control('totaltva'); ?>
                                <?php echo $this->Form->control('facture_id', ['options' => $factures, 'empty' => true]); ?>


                            </fieldset>


                        </div>
                    </div>
                </div>
                <section class="content" style="width: 99% ;">
                    <div class="col-xs-12" style="margin-bottom: 70px;">
                        <a class="btn btn-primary " style="margin-top:30px;margin-bottom:20px;"
                           data-toggle="modal" data-target="#modal-default" table='addtable' index='index'
                           id='ajouter_ligne' style="
                                    float: right;
                                    margin-bottom: 20px;
                                    ">
                            Ajouter Commande <i class="fa fa-plus-circle "></i></a>
                        <table class="table table-bordered table-striped table-bottomless" id="tabligne">
                            <thead>
                            <th style='text-align:left !important'><?= (' Article') ?></th>
                            <th style='text-align:left !important'><?= (' Nombre De Pieces') ?></th>

                            <th></th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr class="tr" style="display: none !important">


                                <td align="left">
                                    <?php echo $this->Form->control('article_id', ['label' => false, 'required' => 'off', 'class' => 'form-control control-label', 'index' => '', 'name' => '', 'id' => '', 'champ' => 'Dsignation', 'style' => 'text-align:right', 'table' => 'ligne', 'options' => $articles, 'type' => '']); ?>
                                </td>
                                <td align="left">
                                    <?php echo $this->Form->control('PrixV', ['label' => false, 'required' => 'off', 'class' => 'form-control control-label', 'index' => '', 'name' => '', 'id' => '', 'champ' => 'PrixV', 'style' => 'text-align:right', 'table' => 'ligne',  'type' => 'number']); ?>
                                </td>
                                <td align="center">
                                    <i index="" id="" class="fa fa-times supligne"
                                       style="color: #c9302c;font-size: 22px;"></i>
                                    <input type="hidden" name="" id="" champ="sup" table="ligne" index=""
                                           class="form-control">
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
</section>
    <script>
        $(".supligne").on("click", function () {
            index = $(this).attr("index");
            //alert(index);
            $("#sup" + index).val(1);
            //alert(('#sup' + index).val());
            $(this).parent().parent().hide();
        });
        $("#ajouter_ligne").on("click", function () {
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
            $ttr.find("input,select,textarea,tr,td,div").each(function () {
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
            $ttr.find("i").each(function () {
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
