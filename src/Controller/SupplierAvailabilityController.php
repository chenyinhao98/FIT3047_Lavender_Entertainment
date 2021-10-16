<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SupplierAvailability Controller
 *
 * @property \App\Model\Table\SupplierAvailabilityTable $SupplierAvailability
 * @method \App\Model\Entity\SupplierAvailability[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplierAvailabilityController extends AppController
{
    
    public $paginate = [
        'limit' => 100
    ];
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Suppliers'],
        ];
        $supplierAvailability = $this->paginate($this->SupplierAvailability);

        $this->set(compact('supplierAvailability'));
    }

    /**
     * View method
     *
     * @param string|null $id Supplier Availability id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supplierAvailability = $this->SupplierAvailability->get($id, [
            'contain' => ['Suppliers'],
        ]);

        $this->set(compact('supplierAvailability'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supplierAvailability = $this->SupplierAvailability->newEmptyEntity();
        if ($this->request->is('post')) {
            $supplierAvailability = $this->SupplierAvailability->patchEntity($supplierAvailability, $this->request->getData());
            if ($this->SupplierAvailability->save($supplierAvailability)) {
                $this->Flash->success(__('The supplier availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplier availability could not be saved. Please, try again.'));
        }
        $suppliers = $this->SupplierAvailability->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('supplierAvailability', 'suppliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplier Availability id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supplierAvailability = $this->SupplierAvailability->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplierAvailability = $this->SupplierAvailability->patchEntity($supplierAvailability, $this->request->getData());
            if ($this->SupplierAvailability->save($supplierAvailability)) {
                $this->Flash->success(__('The supplier availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplier availability could not be saved. Please, try again.'));
        }
        $suppliers = $this->SupplierAvailability->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('supplierAvailability', 'suppliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplier Availability id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supplierAvailability = $this->SupplierAvailability->get($id);
        if ($this->SupplierAvailability->delete($supplierAvailability)) {
            $this->Flash->success(__('The supplier availability has been deleted.'));
        } else {
            $this->Flash->error(__('The supplier availability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
