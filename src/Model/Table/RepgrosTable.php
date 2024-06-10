<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Repgros Model
 *
 * @method \App\Model\Entity\Repgro newEmptyEntity()
 * @method \App\Model\Entity\Repgro newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Repgro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Repgro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Repgro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Repgro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Repgro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Repgro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repgro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repgro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repgro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repgro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Repgro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RepgrosTable extends Table
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

        $this->setTable('repgros');
        $this->setDisplayField('Responsable');
        $this->setPrimaryKey('id');
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
            ->scalar('Responsable_id')
            ->maxLength('Responsable_id', 120)
            ->requirePresence('Responsable_id', 'create')
            ->notEmptyString('Responsable_id');

        return $validator;
    }
}
