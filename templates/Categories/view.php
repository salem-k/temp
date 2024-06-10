<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="row">
    <aside class="column">
      <section class="content">
        <div class="row">
          <div class="col-md-2">
            <div class="box">
              <div class="box-header with-border">

                <strong><h3><?= h($category->name) ?></strong></h3>
                <style>
                  /* Add spacing between table rows */
                  table {
                    border-collapse: separate;
                    border-spacing: 10px; /* Adjust as needed */
                  }
                </style>
            <table>
                <tr>
                  <div class="box-header with-border">

                  <th><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>

                <tr>
                    <th><?= __('Valeur') ?></th>
                    <td><?= $category->valeur === null ? '' : $this->Number->format($category->valeur) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
