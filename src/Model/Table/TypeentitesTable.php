<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typeentites Model
 *
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\HasMany $Fournisseurs
 *
 * @method \App\Model\Entity\Typeentite newEmptyEntity()
 * @method \App\Model\Entity\Typeentite newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Typeentite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeentite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typeentite findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Typeentite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typeentite[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeentite|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeentite saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeentite[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Typeentite[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Typeentite[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Typeentite[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TypeentitesTable extends Table
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

        $this->setTable('typeentites');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Fournisseurs', [
            'foreignKey' => 'typeentite_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        return $validator;
    }
}
