<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factavoir $factavoir
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $factures
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Factavoirs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factavoirs form content">
            <?= $this->Form->create($factavoir) ?>
            <fieldset>
                <legend><?= __('Add Factavoir') ?></legend>
                <?php
                    echo $this->Form->control('Date_debut');
                    echo $this->Form->control('Date_fin');
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('facture_id', ['options' => $factures]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
