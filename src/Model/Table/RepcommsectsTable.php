<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Repcommsects Model
 *
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 *
 * @method \App\Model\Entity\Repcommsect newEmptyEntity()
 * @method \App\Model\Entity\Repcommsect newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Repcommsect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Repcommsect get($primaryKey, $options = [])
 * @method \App\Model\Entity\Repcommsect findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Repcommsect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Repcommsect[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Repcommsect|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repcommsect saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repcommsect[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repcommsect[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repcommsect[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repcommsect[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RepcommsectsTable extends Table
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

        $this->setTable('repcommsects');
        $this->setDisplayField('Responsable');
        $this->setPrimaryKey('id');

        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
            'joinType' => 'INNER',
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
            ->scalar('Responsable')
            ->maxLength('Responsable', 120)
            ->requirePresence('Responsable', 'create')
            ->notEmptyString('Responsable');

        $validator
            ->integer('Telephone')
            ->requirePresence('Telephone', 'create')
            ->notEmptyString('Telephone');

        $validator
            ->scalar('Adresse')
            ->maxLength('Adresse', 120)
            ->requirePresence('Adresse', 'create')
            ->notEmptyString('Adresse');

        $validator
            ->scalar('Username')
            ->maxLength('Username', 120)
            ->requirePresence('Username', 'create')
            ->notEmptyString('Username');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 120)
            ->requirePresence('Email', 'create')
            ->notEmptyString('Email');

        $validator
            ->scalar('Password')
            ->maxLength('Password', 120)
            ->requirePresence('Password', 'create')
            ->notEmptyString('Password');

        $validator
            ->scalar('Voiture')
            ->maxLength('Voiture', 120)
            ->requirePresence('Voiture', 'create')
            ->notEmptyString('Voiture');

        $validator
            ->scalar('Activity')
            ->maxLength('Activity', 120)
            ->requirePresence('Activity', 'create')
            ->notEmptyString('Activity');

        $validator
            ->scalar('depot_id')
            ->maxLength('depot_id', 120)
            ->notEmptyString('depot_id');

        $validator
            ->scalar('Responsable_id')
            ->maxLength('Responsable_id', 120)
            ->requirePresence('Responsable_id', 'create')
            ->notEmptyString('Responsable_id');

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
        $rules->add($rules->existsIn('depot_id', 'Depots'), ['errorField' => 'depot_id']);

        return $rules;
    }
}
