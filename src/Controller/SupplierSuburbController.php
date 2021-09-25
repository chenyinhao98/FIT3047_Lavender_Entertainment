<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SupplierSuburb Controller
 *
 * @property \App\Model\Table\SupplierSuburbTable $SupplierSuburb
 * @method \App\Model\Entity\SupplierSuburb[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupplierSuburbController extends AppController
{
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
        $supplierSuburb = $this->paginate($this->SupplierSuburb);

        $this->set(compact('supplierSuburb'));
    }

    /**
     * View method
     *
     * @param string|null $id Supplier Suburb id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $supplierSuburb = $this->SupplierSuburb->get($id, [
            'contain' => ['Suppliers'],
        ]);

        $this->set(compact('supplierSuburb'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $supplierSuburb = $this->SupplierSuburb->newEmptyEntity();
        if ($this->request->is('post')) {
            $supplierSuburb = $this->SupplierSuburb->patchEntity($supplierSuburb, $this->request->getData());
            if ($this->SupplierSuburb->save($supplierSuburb)) {
                $this->Flash->success(__('The supplier suburb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplier suburb could not be saved. Please, try again.'));
        }
        $suppliers = $this->SupplierSuburb->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('supplierSuburb', 'suppliers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Supplier Suburb id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $supplierSuburb = $this->SupplierSuburb->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $supplierSuburb = $this->SupplierSuburb->patchEntity($supplierSuburb, $this->request->getData());
            if ($this->SupplierSuburb->save($supplierSuburb)) {
                $this->Flash->success(__('The supplier suburb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The supplier suburb could not be saved. Please, try again.'));
        }
        $suppliers = $this->SupplierSuburb->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('supplierSuburb', 'suppliers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Supplier Suburb id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $supplierSuburb = $this->SupplierSuburb->get($id);
        if ($this->SupplierSuburb->delete($supplierSuburb)) {
            $this->Flash->success(__('The supplier suburb has been deleted.'));
        } else {
            $this->Flash->error(__('The supplier suburb could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
