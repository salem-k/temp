<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typetiers Model
 *
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\HasMany $Fournisseurs
 *
 * @method \App\Model\Entity\Typetier newEmptyEntity()
 * @method \App\Model\Entity\Typetier newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Typetier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typetier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typetier findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Typetier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typetier[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typetier|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typetier saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typetier[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Typetier[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Typetier[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Typetier[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TypetiersTable extends Table
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

        $this->setTable('typetiers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Fournisseurs', [
            'foreignKey' => 'typetier_id',
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
