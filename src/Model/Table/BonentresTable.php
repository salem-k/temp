<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bonentres Model
 *
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 *
 * @method \App\Model\Entity\Bonentre newEmptyEntity()
 * @method \App\Model\Entity\Bonentre newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bonentre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bonentre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bonentre findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bonentre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bonentre[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bonentre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bonentre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bonentre[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonentre[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonentre[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bonentre[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BonentresTable extends Table
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

        $this->setTable('bonentres');
        $this->setDisplayField('id');
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
            ->date('Date_Debut')
            ->requirePresence('Date_Debut', 'create')
            ->notEmptyDate('Date_Debut');

        $validator
            ->date('Date_Fin')
            ->requirePresence('Date_Fin', 'create')
            ->notEmptyDate('Date_Fin');

        $validator
            ->integer('depot_id')
            ->notEmptyString('depot_id');

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
