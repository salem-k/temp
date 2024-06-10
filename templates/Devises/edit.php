<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devise $devise
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $devise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $devise->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Devises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="devises form content">
            <?= $this->Form->create($devise) ?>
            <fieldset>
                <legend><?= __('Edit Devise') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('code');
                    echo $this->Form->control('symbole');
                    echo $this->Form->control('taux');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
