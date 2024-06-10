<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecontrat $typecontrat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typecontrat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typecontrat->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Typecontrats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typecontrats form content">
            <?= $this->Form->create($typecontrat) ?>
            <fieldset>
                <legend><?= __('Edit Typecontrat') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
