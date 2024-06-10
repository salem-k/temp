<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codecomptable $codecomptable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $codecomptable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $codecomptable->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Codecomptables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="codecomptables form content">
            <?= $this->Form->create($codecomptable) ?>
            <fieldset>
                <legend><?= __('Edit Codecomptable') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('typecode');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
