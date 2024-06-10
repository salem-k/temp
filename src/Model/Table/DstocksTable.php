<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dstocks Model
 *
 * @property \App\Model\Table\DstocksTable&\Cake\ORM\Association\BelongsTo $Dstocks
 * @property \App\Model\Table\DstocksTable&\Cake\ORM\Association\HasMany $Dstocks
 *
 * @method \App\Model\Entity\Dstock newEmptyEntity()
 * @method \App\Model\Entity\Dstock newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dstock[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dstock get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dstock findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dstock patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dstock[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dstock|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dstock saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dstock[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dstock[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dstock[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dstock[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DstocksTable extends Table
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

        $this->setTable('dstocks');
        $this->setDisplayField('dstock_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Dstocks', [
            'foreignKey' => 'dstock_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Dstocks', [
            'foreignKey' => 'dstock_id',
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
            ->scalar('dstock_id')
            ->maxLength('dstock_id', 120)
            ->notEmptyString('dstock_id');

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
        $rules->add($rules->existsIn('dstock_id', 'Dstocks'), ['errorField' => 'dstock_id']);

        return $rules;
    }
}
