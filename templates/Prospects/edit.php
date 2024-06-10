<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prospect $prospect
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prospect->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prospect->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Prospects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="prospects form content">
            <?= $this->Form->create($prospect) ?>
            <fieldset>
                <legend><?= __('Edit Prospect') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
