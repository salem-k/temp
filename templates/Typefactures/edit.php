<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typefacture $typefacture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typefacture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typefacture->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Typefactures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typefactures form content">
            <?= $this->Form->create($typefacture) ?>
            <fieldset>
                <legend><?= __('Edit Typefacture') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
