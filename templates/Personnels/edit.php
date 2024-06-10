<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personnel $personnel
 * @var string[]|\Cake\Collection\CollectionInterface $fonctions
 * @var string[]|\Cake\Collection\CollectionInterface $sexes
 * @var string[]|\Cake\Collection\CollectionInterface $situationfamiliales
 * @var string[]|\Cake\Collection\CollectionInterface $typecontrats
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $pays
 */
?>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!-- Form Start -->
                    <div class="column-responsive column-80">
                        <div class="personnels form content">
                            <?= $this->Form->create($personnel) ?>
                            <fieldset>
                                <legend><?= __('Edit Personnel') ?></legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                                        echo $this->Form->control('nom');
                                        echo $this->Form->control('prenom');
                                        echo $this->Form->control('fonction_id', ['options' => $fonctions, 'empty' => true]);
                                        echo $this->Form->control('code');
                                        echo $this->Form->control('sexe_id', ['options' => $sexes, 'empty' => true]);
                                        echo $this->Form->control('dateentre', ['empty' => true]);
                                        echo $this->Form->control('situationfamiliale_id', ['options' => $situationfamiliales, 'empty' => true]);
                                        echo $this->Form->control('nombreenfant');
                                        echo $this->Form->control('matriculecnss');
                                        echo $this->Form->control('age');
                                        echo $this->Form->control('chefdefamille');
                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        echo $this->Form->control('typecontrat_id', ['options' => $typecontrats, 'empty' => true]);
                                        echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                                        echo $this->Form->control('tel');
                                        echo $this->Form->control('email');
                                        echo $this->Form->control('salarie');
                                       
                                        echo $this->Form->control('adresse');
                                        echo $this->Form->control('codepostal');
                                        echo $this->Form->control('ville');
                                        echo $this->Form->control('pay_id', ['options' => $pays, 'empty' => true]);
                                        echo $this->Form->control('telportable');
                                        echo $this->Form->control('fax');
                                        echo $this->Form->control('compte_comptable');
                                        echo $this->Form->control('tarif_horaire_moyen');
                                        echo $this->Form->control('tarif_journalier_moyen');
                                        echo $this->Form->control('salaire');
                                        echo $this->Form->control('heures_de_travail');
                                        echo $this->Form->control('date_fin', ['empty' => true]);
                                        echo $this->Form->control('datedenaissance', ['empty' => true]);
                                        echo $this->Form->control('notes');
                                        echo $this->Form->control('signature');
                                        ?>
                                        <div class="form-group">
                                            <label for="image">Photo:</label>
                                            <?= $this->Form->file('image', ['label' => false]); ?>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>
                            <?= $this->Form->button(__('Submit')) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
