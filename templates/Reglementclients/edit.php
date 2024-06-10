<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reglementclient $reglementclient
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $utilisateurs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reglementclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reglementclient->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reglementclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reglementclients form content">
            <?= $this->Form->create($reglementclient) ?>
            <fieldset>
                <legend><?= __('Edit Reglementclient') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('Date', ['empty' => true]);
                    echo $this->Form->control('Montant');
                    echo $this->Form->control('montantaffecte');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('numero');
                    echo $this->Form->control('numeroconca');
                    echo $this->Form->control('SR');
                    echo $this->Form->control('NB');
                    echo $this->Form->control('NumNB');
                    echo $this->Form->control('client');
                    echo $this->Form->control('mg');
                    echo $this->Form->control('exercice_id');
                    echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs, 'empty' => true]);
                    echo $this->Form->control('type');
                    echo $this->Form->control('affectation_id');
                    echo $this->Form->control('emi');
                    echo $this->Form->control('numeropieceintegre');
                    echo $this->Form->control('group_id');
                    echo $this->Form->control('differance');
                    echo $this->Form->control('observation');
                    echo $this->Form->control('projet_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
