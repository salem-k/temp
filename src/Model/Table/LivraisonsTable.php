<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Livraisons Model
 *
 * @property \App\Model\Table\PointdeventesTable&\Cake\ORM\Association\BelongsTo $Pointdeventes
 * @property \App\Model\Table\DepotsTable&\Cake\ORM\Association\BelongsTo $Depots
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\BelongsTo $Factures
 * @property \App\Model\Table\FacturesTable&\Cake\ORM\Association\HasMany $Factures
 *
 * @method \App\Model\Entity\Livraison newEmptyEntity()
 * @method \App\Model\Entity\Livraison newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Livraison[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Livraison get($primaryKey, $options = [])
 * @method \App\Model\Entity\Livraison findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Livraison patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Livraison[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Livraison|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livraison saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livraison[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livraison[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livraison[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livraison[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LivraisonsTable extends Table
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

        $this->setTable('livraisons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pointdeventes', [
            'foreignKey' => 'pointdevente_id',
        ]);
        $this->belongsTo('Depots', [
            'foreignKey' => 'depot_id',
        ]);
        $this->belongsTo('Factures', [
            'foreignKey' => 'facture_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Factures', [
            'foreignKey' => 'livraison_id',
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
            ->integer('commandefournisseur_id')
            ->allowEmptyString('commandefournisseur_id');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->allowEmptyString('numero');

        $validator
            ->dateTime('date')
            ->allowEmptyDateTime('date');

        $validator
            ->integer('fournisseur_id')
            ->allowEmptyString('fournisseur_id');

        $validator
            ->integer('adresselivraisonfournisseur_id')
            ->allowEmptyString('adresselivraisonfournisseur_id');

        $validator
            ->integer('pointdevente_id')
            ->allowEmptyString('pointdevente_id');

        $validator
            ->integer('depot_id')
            ->allowEmptyString('depot_id');

        $validator
            ->integer('cartecarburant_id')
            ->allowEmptyString('cartecarburant_id');

        $validator
            ->integer('materieltransport_id')
            ->allowEmptyString('materieltransport_id');

        $validator
            ->integer('kilometragedepart')
            ->allowEmptyString('kilometragedepart');

        $validator
            ->integer('kilometragearrive')
            ->allowEmptyString('kilometragearrive');

        $validator
            ->integer('chauffeur')
            ->allowEmptyString('chauffeur');

        $validator
            ->integer('convoyeur')
            ->allowEmptyString('convoyeur');

        $validator
            ->integer('valide')
            ->notEmptyString('valide');

        $validator
            ->decimal('remise')
            ->allowEmptyString('remise');

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
            ->decimal('ht')
            ->allowEmptyString('ht');

        $validator
            ->integer('facture_id')
            ->notEmptyString('facture_id');

        $validator
            ->decimal('Montant_Regler')
            ->allowEmptyString('Montant_Regler');

        $validator
            ->integer('typelivraison')
            ->allowEmptyString('typelivraison');

        $validator
            ->integer('dossierimportation_id')
            ->allowEmptyString('dossierimportation_id');

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
        $rules->add($rules->existsIn('pointdevente_id', 'Pointdeventes'), ['errorField' => 'pointdevente_id']);
        $rules->add($rules->existsIn('depot_id', 'Depots'), ['errorField' => 'depot_id']);
        $rules->add($rules->existsIn('facture_id', 'Factures'), ['errorField' => 'facture_id']);

        return $rules;
    }
}
