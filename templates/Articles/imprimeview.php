<?php $this->layout = 'AdminLTE.print'; ?>
<br>
<div style="display:flex">
    <div style="margin-left:6%">
        <?php
        echo $this->Html->image('FARROUKH.png', ['alt' => 'CakePHP', 'height' => '140px', 'width' => '200px']); ?>
    </div>
    <div style="margin-left:12%" class="box" align="center">
    STE FARROUKH POUR PRODUITS DE PECHE <br>
      VENTE EN GROS POISSON, CRUSTACES & MOLLUSQUE<br><br>
        <!-- Phone : (+216) 71 398 404 / (+216) 71 398 158 <br> -->
        IMM.PARADISE ENTRA ROUTE L'AFRANE EL AIN KM0.5<br>
    </div>
    
   
   
</div>
<div align="center"><strong> RC: B08140962021</strong></div>

<div align="center"><h1>BON DE LIVRAISON</h1></div>
<div align="center"><strong>Code TVA : <?php echo $code_tva ?></strong></div><br>
<div><strong>Date : ...............</strong></div><br>
<div style="display:flex">
    <div >
       <strong> Livré à :...................</strong>
         
    </div>
    <div style="margin-left: 20%;" class="box" align="left">
    <strong> Code TVA :...................</strong>
    </div>

    <div style="margin-left: 20%;" class="box" align="left">
    <strong> N : <?php echo $facturevente->numero ?></strong>
    </div>
    
   
    
</div>
<br><br>
<table class="table table-bordered table-striped table-bottomless" style="margin-left: 1%;border:1px solid black;border-radius: 15px 15px 15px 15px;border-collapse: collapse;">
    <thead>
        <tr >
            <th width="15%" class="text-center" style="border:1px solid black;">
                <?=('Désignation') ?>
            </th>
            <th width="52%" class=" text-center" style="border:1px solid black;">
                <?=('Quantité ') ?>
            </th>
            <th width="15%" class=" text-center" style="border:1px solid black;">
                <?=('Unité') ?>
            </th>
            <th width="15%" class=" text-center" style="border:1px solid black;">
                <?=('P.U.H.T') ?>
            </th>
            <th width="15%" class=" text-center" style="border:1px solid black;">
                <?=('TOTAL') ?>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr style="height: 35em;">
            <td style="border:1px solid black;">
                <?php //echo $bonlivraisonclient->numero ?>
            </td >
            <td style="border:1px solid black;">
                <?php //echo $article->Dsignation ?>
            </td>
            <td style="border:1px solid black;">
                <?php //echo $article->PrixV ?>
            </td>
            <td style="border:1px solid black;">
                <?php //echo $article->Refggb ?>
            </td>
            <td style="border:1px solid black;">
                <?php //echo $article->Refggb ?>
            </td>
        </tr>
    </tbody>
</table>
<br>