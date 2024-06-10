<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typeentite $typeentite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeentite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeentite->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Typeentites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typeentites form content">
            <?= $this->Form->create($typeentite) ?>
            <fieldset>
                <legend><?= __('Edit Typeentite') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
