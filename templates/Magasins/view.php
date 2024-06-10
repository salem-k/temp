<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Magasin $magasin
 */
?>

<div class="row">
  <aside class="column">
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
              <strong><H3><?= h($magasin->Description) ?></STRONG></H3>
              <style>
                /* Add spacing between table rows */
                table {
                  border-collapse: separate;
                  border-spacing: 10px; /* Adjust as needed */
                }
              </style>

              <table>
                <tr>
                  <th><?= __('Description') ?></th>
                  <td><?= h($magasin->Description) ?></td>
                </tr>
                <tr>
                  <th><?= __('Adresse') ?></th>
                  <td><?= h($magasin->Adresse) ?></td>
                </tr>
              </table>

            </div>
    </div>
</div>
