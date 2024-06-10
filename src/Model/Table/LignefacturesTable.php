<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lignefactures Model
 *
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\BelongsTo $Factures
 * @property \App\Model\Table\FournisseursTable&\Cake\ORM\Association\BelongsTo $Fournisseurs
 * @property \App\Model\Table\ArticlesTable&\Cake\ORM\Association\BelongsTo $Articles
 *
 * @method \App\Model\Entity\Lignefacture newEmptyEntity()
 * @method \App\Model\Entity\Lignefacture newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lignefacture[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lignefacture get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lignefacture findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lignefacture patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lignefacture[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lignefacture|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lignefacture saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lignefacture[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lignefacture[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lignefacture[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lignefacture[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LignefacturesTable extends Table
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

        $this->setTable('lignefactures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Factures', [
            'foreignKey' => 'facture_id',
        ]);
        $this->belongsTo('Fournisseurs', [
            'foreignKey' => 'fournisseur_id',
        ]);
        $this->belongsTo('Articles', [
            'foreignKey' => 'article_id',
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
            ->integer('facture_id')
            ->allowEmptyString('facture_id');

        $validator
            ->integer('fournisseur_id')
            ->allowEmptyString('fournisseur_id');

        $validator
            ->scalar('codefrs')
            ->maxLength('codefrs', 255)
            ->allowEmptyString('codefrs');

        $validator
            ->integer('article_id')
            ->allowEmptyString('article_id');

        $validator
            ->integer('qte')
            ->allowEmptyString('qte');

        $validator
            ->decimal('prix')
            ->allowEmptyString('prix');

        $validator
            ->decimal('ht')
            ->allowEmptyString('ht');

        $validator
            ->numeric('remise')
            ->allowEmptyString('remise');

        $validator
            ->numeric('fodec')
            ->allowEmptyString('fodec');

        $validator
            ->numeric('tva')
            ->allowEmptyString('tva');

        $validator
            ->decimal('ttc')
            ->allowEmptyString('ttc');

        $validator
            ->integer('charge_id')
            ->allowEmptyString('charge_id');

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
        $rules->add($rules->existsIn('facture_id', 'Factures'), ['errorField' => 'facture_id']);
        $rules->add($rules->existsIn('fournisseur_id', 'Fournisseurs'), ['errorField' => 'fournisseur_id']);
        $rules->add($rules->existsIn('article_id', 'Articles'), ['errorField' => 'article_id']);

        return $rules;
    }
}
