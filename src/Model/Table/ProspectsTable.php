<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prospects Model
 *
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\HasMany $Fournisseurs
 *
 * @method \App\Model\Entity\Prospect newEmptyEntity()
 * @method \App\Model\Entity\Prospect newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Prospect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prospect get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prospect findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Prospect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prospect[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prospect|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prospect saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prospect[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prospect[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prospect[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Prospect[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProspectsTable extends Table
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

        $this->setTable('prospects');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Fournisseurs', [
            'foreignKey' => 'prospect_id',
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
