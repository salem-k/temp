<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Demandeoffredeprix $demandeoffredeprix
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $demandeoffredeprix->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $demandeoffredeprix->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Demandeoffredeprixes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="demandeoffredeprixes form content">
            <?= $this->Form->create($demandeoffredeprix) ?>
            <fieldset>
                <legend><?= __('Edit Demandeoffredeprix') ?></legend>
                <?php
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('numero');
                    echo $this->Form->control('consultation');
                    echo $this->Form->control('commande');
                    echo $this->Form->control('typeoffredeprix');
                    echo $this->Form->control('projet_id');
                    echo $this->Form->control('commandeclient');
                    echo $this->Form->control('envoiemail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
