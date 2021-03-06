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
 * @property \App\Model\Table\SupplierAvailabilityTable&\Cake\ORM\Association\HasMany $SupplierAvailability
 * @property \App\Model\Table\SupplierSuburbTable&\Cake\ORM\Association\HasMany $SupplierSuburb
 * @property \App\Model\Table\EventTypesTable&\Cake\ORM\Association\BelongsToMany $EventTypes
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\BelongsToMany $Events
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
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('SupplierAvailability', [
            'foreignKey' => 'supplier_id',
        ]);
        $this->hasMany('SupplierSuburb', [
            'foreignKey' => 'supplier_id',
        ]);
        $this->belongsToMany('EventTypes', [
            'foreignKey' => 'supplier_id',
            'targetForeignKey' => 'event_type_id',
            'joinTable' => 'event_types_suppliers',
        ]);
        $this->belongsToMany('Events', [
            'foreignKey' => 'supplier_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'events_suppliers',
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
            ->scalar('supplier_type')
            ->maxLength('supplier_type', 64)
            ->requirePresence('supplier_type', 'create')
            ->notEmptyString('supplier_type');

        $validator
            ->scalar('supplier_name')
            ->maxLength('supplier_name', 256)
            ->requirePresence('supplier_name', 'create')
            ->notEmptyString('supplier_name');

        $validator
            ->scalar('supplier_address')
            ->maxLength('supplier_address', 256)
            ->requirePresence('supplier_address', 'create')
            ->notEmptyString('supplier_address');

        $validator
            ->scalar('supplier_payrate')
            ->maxLength('supplier_payrate', 256)
            ->requirePresence('supplier_payrate', 'create')
            ->notEmptyString('supplier_payrate');

        $validator
            ->scalar('supplier_contact_name')
            ->maxLength('supplier_contact_name', 256)
            ->requirePresence('supplier_contact_name', 'create')
            ->notEmptyString('supplier_contact_name');

        $validator
            ->scalar('supplier_contact_number')
            ->maxLength('supplier_contact_number', 256)
            ->requirePresence('supplier_contact_number', 'create')
            ->notEmptyString('supplier_contact_number');

        $validator
            ->scalar('supplier_email')
            ->maxLength('supplier_email', 256)
            ->requirePresence('supplier_email', 'create')
            ->notEmptyString('supplier_email');

        $validator
            ->scalar('supplier_photo')
            ->maxLength('supplier_photo', 256)
            ->allowEmptyString('supplier_photo');

        $validator
            ->scalar('supplier_about_us')
            ->maxLength('supplier_about_us', 512)
            ->allowEmptyString('supplier_about_us');

        return $validator;
    }
}
