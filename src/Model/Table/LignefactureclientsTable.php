<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lignefactureclients Model
 *
 * @property \App\Model\Table\FactureclientsTable&\Cake\ORM\Association\BelongsTo $Factureclients
 * @property \App\Model\Table\ArticlesTable&\Cake\ORM\Association\BelongsTo $Articles
 *
 * @method \App\Model\Entity\Lignefactureclient newEmptyEntity()
 * @method \App\Model\Entity\Lignefactureclient newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lignefactureclient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lignefactureclient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lignefactureclient findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lignefactureclient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lignefactureclient[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lignefactureclient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lignefactureclient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lignefactureclient[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lignefactureclient[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lignefactureclient[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lignefactureclient[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LignefactureclientsTable extends Table
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

        $this->setTable('lignefactureclients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Factureclients', [
            'foreignKey' => 'factureclient_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id',
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
            ->integer('factureclient_id')
            ->notEmptyString('factureclient_id');

        $validator
            ->integer('article_id')
            ->notEmptyString('article_id');

        $validator
            ->integer('qte')
            ->requirePresence('qte', 'create')
            ->notEmptyString('qte');

        $validator
            ->decimal('prixht')
            ->requirePresence('prixht', 'create')
            ->notEmptyString('prixht');

        $validator
            ->decimal('remise')
            ->allowEmptyString('remise');

        $validator
            ->decimal('punht')
            ->requirePresence('punht', 'create')
            ->notEmptyString('punht');

        $validator
            ->decimal('tva')
            ->allowEmptyString('tva');

        $validator
            ->decimal('fodec')
            ->allowEmptyString('fodec');

        $validator
            ->decimal('ttc')
            ->allowEmptyString('ttc');

        $validator
            ->numeric('qtestock')
            ->allowEmptyString('qtestock');

        $validator
            ->decimal('totaltva')
            ->allowEmptyString('totaltva');

        $validator
            ->decimal('totalttc')
            ->allowEmptyString('totalttc');

        $validator
            ->decimal('montantht')
            ->allowEmptyString('montantht');

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
        $rules->add($rules->existsIn('factureclient_id', 'Factureclients'), ['errorField' => 'factureclient_id']);
        $rules->add($rules->existsIn('article_id', 'Articles'), ['errorField' => 'article_id']);

        return $rules;
    }
}
