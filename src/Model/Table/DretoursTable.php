<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dretours Model
 *
 * @property \App\Model\Table\DretoursTable&\Cake\ORM\Association\BelongsTo $Dretours
 * @property \App\Model\Table\DretoursTable&\Cake\ORM\Association\HasMany $Dretours
 *
 * @method \App\Model\Entity\Dretour newEmptyEntity()
 * @method \App\Model\Entity\Dretour newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dretour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dretour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dretour findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dretour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dretour[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dretour|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dretour saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dretour[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dretour[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dretour[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dretour[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DretoursTable extends Table
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

        $this->setTable('dretours');
        $this->setDisplayField('dretour_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Dretours', [
            'foreignKey' => 'dretour_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Dretours', [
            'foreignKey' => 'dretour_id',
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
            ->scalar('dretour_id')
            ->maxLength('dretour_id', 120)
            ->notEmptyString('dretour_id');

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
        $rules->add($rules->existsIn('dretour_id', 'Dretours'), ['errorField' => 'dretour_id']);

        return $rules;
    }
}
