<?php $this->layout = 'AdminLTE.print'; ?>
<br>
<div style="display:flex">
    <div style="margin-left:6%">
        <?php
        echo $this->Html->image('logo.png', ['alt' => 'CakePHP', 'height' => '140px', 'width' => '200px']); ?>
    </div>
    <div style="width: 75%;margin-left:23%" class="box" align="left">
        Société CommerciOptim <br>
        50, Rue 8600, Escaliers C, 2iéme étage, C-2-4, Z.I Charguia 1, 2035 Tunis.,
        Cite El Khadra, Tunis, Tunisie<br>
        <!-- Phone : (+216) 71 398 404 / (+216) 71 398 158 <br> -->
        Site web : www.CommerciOptim.com <br>
    </div>
</div>
<br><br>
<h3 align="center" style="color:red;font-family: monospace;">
    Produits
</h3>
<table class="table table-bordered table-striped table-bottomless" >
    <thead>
        <tr>
            <th width="15%" class="text-center" style="border:1px solid black;">
                <?=('Réf.') ?>
            </th>
            <th width="52%" class=" text-center" style="border:1px solid black;">
                <?=('Libellé') ?>
            </th>
            <th width="15%" class=" text-center" style="border:1px solid black;">
                <?=('Prix de vente') ?>
            </th>
            <th width="15%" class=" text-center" style="border:1px solid black;">
                <?=('Réf.C.Op') ?>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border:1px solid black;">
                <?php echo $article->Reffourni ?>
            </td >
            <td style="border:1px solid black;">
                <?php echo $article->Dsignation ?>
            </td>
            <td style="border:1px solid black;">
                <?php echo $article->PrixV ?>
            </td>
            <td style="border:1px solid black;">
                <?php echo $article->Refggb ?>
            </td>
        </tr>
    </tbody>
</table>
<br>
