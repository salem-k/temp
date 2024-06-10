<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factavoir $factavoir
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $factures
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factavoir->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factavoir->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Factavoirs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factavoirs form content">
            <?= $this->Form->create($factavoir) ?>
            <fieldset>
                <legend><?= __('Edit Factavoir') ?></legend>
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
