<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContactUsCms Controller
 *
 * @property \App\Model\Table\ContactUsCmsTable $ContactUsCms
 * @method \App\Model\Entity\ContactUsCm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactUsCmsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contactUsCms = $this->paginate($this->ContactUsCms);

        $this->set(compact('contactUsCms'));
    }

    public function contactus()
    {
        $contactUsCms = $this->paginate($this->ContactUsCms);

        $this->set(compact('contactUsCms'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Us Cm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contactUsCm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactUsCm = $this->ContactUsCms->newEmptyEntity();
        if ($this->request->is('post')) {
            $contactUsCm = $this->ContactUsCms->patchEntity($contactUsCm, $this->request->getData());
            if ($this->ContactUsCms->save($contactUsCm)) {
                $this->Flash->success(__('The contact us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('contactUsCm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactUsCm = $this->ContactUsCms->patchEntity($contactUsCm, $this->request->getData());
            if ($this->ContactUsCms->save($contactUsCm)) {
                $this->Flash->success(__('The contact us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('contactUsCm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactUsCm = $this->ContactUsCms->get($id);
        if ($this->ContactUsCms->delete($contactUsCm)) {
            $this->Flash->success(__('The contact us cm has been deleted.'));
        } else {
            $this->Flash->error(__('The contact us cm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
