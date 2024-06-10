<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gouvernorat $gouvernorat
 * @var string[]|\Cake\Collection\CollectionInterface $pays
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gouvernorat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gouvernorat->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gouvernorats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gouvernorats form content">
            <?= $this->Form->create($gouvernorat) ?>
            <fieldset>
                <legend><?= __('Edit Gouvernorat') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('codepostale');
                    echo $this->Form->control('code');
                    echo $this->Form->control('pay_id', ['options' => $pays, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
