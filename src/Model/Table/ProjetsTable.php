<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projets Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\CommercialsTable&\Cake\ORM\Association\BelongsTo $Commercials
 * @property \App\Model\Table\PersonnelsTable&\Cake\ORM\Association\BelongsTo $Personnels
 * @property \App\Model\Table\DevisesTable&\Cake\ORM\Association\BelongsTo $Devises
 * @property \App\Model\Table\BanquesTable&\Cake\ORM\Association\BelongsTo $Banques
 * @property \App\Model\Table\CommandefournisseursTable&\Cake\ORM\Association\HasMany $Commandefournisseurs
 * @property \App\Model\Table\DemandeoffredeprixesTable&\Cake\ORM\Association\HasMany $Demandeoffredeprixes
 * @property \App\Model\Table\FactureclientsTable&\Cake\ORM\Association\HasMany $Factureclients
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\HasMany $Factures
 * @property \App\Model\Table\ReglementclientsTable&\Cake\ORM\Association\HasMany $Reglementclients
 * @property \App\Model\Table\ReglementsTable&\Cake\ORM\Association\HasMany $Reglements
 * @property \App\Model\Table\TachesTable&\Cake\ORM\Association\HasMany $Taches
 *
 * @method \App\Model\Entity\Projet newEmptyEntity()
 * @method \App\Model\Entity\Projet newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Projet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Projet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Projet findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Projet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Projet[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Projet|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projet saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Projet[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Projet[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Projet[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Projet[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProjetsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('projets');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
        ]);
        $this->belongsTo('Commercials', [
            'foreignKey' => 'commercial_id',
        ]);
        $this->belongsTo('Personnels', [
            'foreignKey' => 'personnel_id',
        ]);
        $this->belongsTo('Devises', [
            'foreignKey' => 'devise_id',
        ]);
        $this->belongsTo('Banques', [
            'foreignKey' => 'banque_id',
        ]);
        $this->hasMany('Commandefournisseurs', [
            'foreignKey' => 'projet_id',
        ]);
        $this->hasMany('Demandeoffredeprixes', [
            'foreignKey' => 'projet_id',
        ]);
        $this->hasMany('Factureclients', [
            'foreignKey' => 'projet_id',
        ]);
        $this->hasMany('Factures', [
            'foreignKey' => 'projet_id',
        ]);
        $this->hasMany('Reglementclients', [
            'foreignKey' => 'projet_id',
        ]);
        $this->hasMany('Reglements', [
            'foreignKey' => 'projet_id',
        ]);
        $this->hasMany('Taches', [
            'foreignKey' => 'projet_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('client_id')
            ->allowEmptyString('client_id');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('libelle')
            ->maxLength('libelle', 255)
            ->allowEmptyString('libelle');

        $validator
            ->date('datefin')
            ->allowEmptyDate('datefin');

        $validator
            ->scalar('visibilite')
            ->maxLength('visibilite', 255)
            ->allowEmptyString('visibilite');

        $validator
            ->scalar('probabilite')
            ->maxLength('probabilite', 255)
            ->allowEmptyString('probabilite');

        $validator
            ->scalar('montant')
            ->maxLength('montant', 255)
            ->allowEmptyString('montant');

        $validator
            ->scalar('budget')
            ->maxLength('budget', 255)
            ->allowEmptyString('budget');

        $validator
            ->integer('opportunite_id')
            ->allowEmptyString('opportunite_id');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->integer('commercial_id')
            ->allowEmptyString('commercial_id');

        $validator
            ->integer('personnel_id')
            ->allowEmptyString('personnel_id');

        $validator
            ->integer('valide')
            ->allowEmptyString('valide');

        $validator
            ->integer('devise_id')
            ->allowEmptyString('devise_id');

        $validator
            ->integer('banque_id')
            ->allowEmptyString('banque_id');

        $validator
            ->integer('suivre_opportunite')
            ->allowEmptyString('suivre_opportunite');

        $validator
            ->integer('suivre_tache')
            ->allowEmptyString('suivre_tache');

        $validator
            ->integer('facturer_temps_passe')
            ->allowEmptyString('facturer_temps_passe');

        $validator
            ->dateTime('datemodification')
            ->allowEmptyDateTime('datemodification');

        $validator
            ->integer('etatTache')
            ->allowEmptyString('etatTache');

        $validator
            ->integer('tagcategorie_id')
            ->allowEmptyString('tagcategorie_id');

        $validator
            ->scalar('lien')
            ->maxLength('lien', 255)
            ->allowEmptyString('lien');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('client_id', 'Clients'), ['errorField' => 'client_id']);
        $rules->add($rules->existsIn('commercial_id', 'Commercials'), ['errorField' => 'commercial_id']);
        $rules->add($rules->existsIn('personnel_id', 'Personnels'), ['errorField' => 'personnel_id']);
        $rules->add($rules->existsIn('devise_id', 'Devises'), ['errorField' => 'devise_id']);
        $rules->add($rules->existsIn('banque_id', 'Banques'), ['errorField' => 'banque_id']);

        return $rules;
    }
}
