<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 * @var string[]|\Cake\Collection\CollectionInterface $typepaiements
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Paiements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paiements form content">
            <?= $this->Form->create($paiement) ?>
            <fieldset>
                <legend><?= __('Edit Paiement') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('typepaiement_id', ['options' => $typepaiements]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
