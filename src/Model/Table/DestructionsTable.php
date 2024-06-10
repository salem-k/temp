<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Destructions Model
 *
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 *
 * @method \App\Model\Entity\Destruction newEmptyEntity()
 * @method \App\Model\Entity\Destruction newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Destruction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Destruction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Destruction findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Destruction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Destruction[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Destruction|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Destruction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Destruction[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Destruction[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Destruction[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Destruction[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DestructionsTable extends Table
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

        $this->setTable('destructions');
        $this->setDisplayField('Depot_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Depots', [
            'foreignKey' => 'Depot_id',
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
            ->dateTime('Date')
            ->notEmptyDateTime('Date');

        $validator
            ->scalar('Depot_id')
            ->maxLength('Depot_id', 120)
            ->notEmptyString('Depot_id');

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
        $rules->add($rules->existsIn('Depot_id', 'Depots'), ['errorField' => 'Depot_id']);

        return $rules;
    }
}
