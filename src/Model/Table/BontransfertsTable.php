<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bontransferts Model
 *
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 *
 * @method \App\Model\Entity\Bontransfert newEmptyEntity()
 * @method \App\Model\Entity\Bontransfert newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bontransfert[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bontransfert get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bontransfert findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bontransfert patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bontransfert[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bontransfert|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bontransfert saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bontransfert[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bontransfert[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bontransfert[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bontransfert[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BontransfertsTable extends Table
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

        $this->setTable('bontransferts');
        $this->setDisplayField('depot_id');
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
            ->integer('reference')
            ->requirePresence('reference', 'create')
            ->notEmptyString('reference');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->scalar('depot_id')
            ->maxLength('depot_id', 120)
            ->notEmptyString('depot_id');

        $validator
            ->scalar('depot_to_id')
            ->maxLength('depot_to_id', 120)
            ->requirePresence('depot_to_id', 'create')
            ->notEmptyString('depot_to_id');

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
