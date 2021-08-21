<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Suppliers Model
 *
 * @method \App\Model\Entity\Supplier newEmptyEntity()
 * @method \App\Model\Entity\Supplier newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Supplier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supplier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supplier findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Supplier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supplier[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supplier|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supplier saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SuppliersTable extends Table
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

        $this->setTable('suppliers');
        $this->setDisplayField('supplierID');
        $this->setPrimaryKey('supplierID');
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
            ->integer('supplierID')
            ->allowEmptyString('supplierID', null, 'create');

        $validator
            ->scalar('supplierCategory')
            ->maxLength('supplierCategory', 64)
            ->requirePresence('supplierCategory', 'create')
            ->notEmptyString('supplierCategory');

        $validator
            ->scalar('supplierName')
            ->maxLength('supplierName', 256)
            ->requirePresence('supplierName', 'create')
            ->notEmptyString('supplierName');

        $validator
            ->scalar('supplierPreferred')
            ->maxLength('supplierPreferred', 256)
            ->requirePresence('supplierPreferred', 'create')
            ->notEmptyString('supplierPreferred');

        $validator
            ->scalar('supplierAddress')
            ->maxLength('supplierAddress', 256)
            ->requirePresence('supplierAddress', 'create')
            ->notEmptyString('supplierAddress');

        $validator
            ->numeric('supplierTravelRadius')
            ->requirePresence('supplierTravelRadius', 'create')
            ->notEmptyString('supplierTravelRadius');

        $validator
            ->scalar('supplierPPH')
            ->maxLength('supplierPPH', 256)
            ->requirePresence('supplierPPH', 'create')
            ->notEmptyString('supplierPPH');

        $validator
            ->numeric('supplierMiniHour')
            ->requirePresence('supplierMiniHour', 'create')
            ->notEmptyString('supplierMiniHour');

        $validator
            ->scalar('supplierContactName')
            ->maxLength('supplierContactName', 256)
            ->requirePresence('supplierContactName', 'create')
            ->notEmptyString('supplierContactName');

        $validator
            ->scalar('supplierContactNumber')
            ->maxLength('supplierContactNumber', 256)
            ->requirePresence('supplierContactNumber', 'create')
            ->notEmptyString('supplierContactNumber');

        $validator
            ->scalar('supplierContactEmail')
            ->maxLength('supplierContactEmail', 256)
            ->requirePresence('supplierContactEmail', 'create')
            ->notEmptyString('supplierContactEmail');

        return $validator;
    }
}
