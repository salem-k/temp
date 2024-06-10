<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Incoterms Model
 *
 * @property \App\Model\Table\CommandeclientsTable&\Cake\ORM\Association\HasMany $Commandeclients
 * @property \App\Model\Table\FactureclientsTable&\Cake\ORM\Association\HasMany $Factureclients
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\HasMany $Factures
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\HasMany $Fournisseurs
 *
 * @method \App\Model\Entity\Incoterm newEmptyEntity()
 * @method \App\Model\Entity\Incoterm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Incoterm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Incoterm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Incoterm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Incoterm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Incoterm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Incoterm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Incoterm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Incoterm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Incoterm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Incoterm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Incoterm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IncotermsTable extends Table
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

        $this->setTable('incoterms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Commandeclients', [
            'foreignKey' => 'incoterm_id',
        ]);
        $this->hasMany('Factureclients', [
            'foreignKey' => 'incoterm_id',
        ]);
        $this->hasMany('Factures', [
            'foreignKey' => 'incoterm_id',
        ]);
        $this->hasMany('Fournisseurs', [
            'foreignKey' => 'incoterm_id',
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
            ->scalar('code')
            ->maxLength('code', 255)
            ->allowEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        return $validator;
    }
}
