<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $personnels
 * @var string[]|\Cake\Collection\CollectionInterface $utilisateurs
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('personnel_id', ['options' => $personnels, 'empty' => true]);
                    echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('login');
                    echo $this->Form->control('password');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('stocknegatif');
                    echo $this->Form->control('notifdevis');
                    echo $this->Form->control('notifcaisse');
                    echo $this->Form->control('notifbsstock');
                    echo $this->Form->control('notifaffaire');
                    echo $this->Form->control('notifvisite');
                    echo $this->Form->control('modifpmp');
                    echo $this->Form->control('notifartdevis');
                    echo $this->Form->control('imp_val_inventaire');
                    echo $this->Form->control('imp_val_bonecart');
                    echo $this->Form->control('trans_vers_prod');
                    echo $this->Form->control('factureclient');
                    echo $this->Form->control('notifcommandeclient');
                    echo $this->Form->control('MajNumero');
                    echo $this->Form->control('poste');
                    echo $this->Form->control('mail');
                    echo $this->Form->control('validation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
