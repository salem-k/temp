<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typepaiement $typepaiement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typepaiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typepaiement->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Typepaiements'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typepaiements form content">
            <?= $this->Form->create($typepaiement) ?>
            <fieldset>
                <legend><?= __('Edit Typepaiement') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
