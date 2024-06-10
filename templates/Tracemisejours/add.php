<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tracemisejour $tracemisejour
 * @var \Cake\Collection\CollectionInterface|string[] $utilisateurs
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tracemisejours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tracemisejours form content">
            <?= $this->Form->create($tracemisejour) ?>
            <fieldset>
                <legend><?= __('Add Tracemisejour') ?></legend>
                <?php
                    echo $this->Form->control('model');
                    echo $this->Form->control('id_piece');
                    echo $this->Form->control('operation');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('heure');
                    echo $this->Form->control('poste');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
