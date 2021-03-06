<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SupplierSuburb Model
 *
 * @property \App\Model\Table\SuppliersTable&\Cake\ORM\Association\BelongsTo $Suppliers
 *
 * @method \App\Model\Entity\SupplierSuburb newEmptyEntity()
 * @method \App\Model\Entity\SupplierSuburb newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SupplierSuburb[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SupplierSuburb get($primaryKey, $options = [])
 * @method \App\Model\Entity\SupplierSuburb findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SupplierSuburb patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SupplierSuburb[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SupplierSuburb|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SupplierSuburb saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SupplierSuburb[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SupplierSuburb[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SupplierSuburb[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SupplierSuburb[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SupplierSuburbTable extends Table
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

        $this->setTable('supplier_suburb');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Suppliers', [
            'foreignKey' => 'supplier_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('suburb_name')
            ->requirePresence('suburb_name', 'create')
            ->notEmptyString('suburb_name');

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
        $rules->add($rules->existsIn(['supplier_id'], 'Suppliers'), ['errorField' => 'supplier_id']);

        return $rules;
    }
}
