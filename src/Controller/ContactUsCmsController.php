<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContactCms Controller
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
        $ContactUsCms = $this->paginate($this->ContactUsCms);

        $this->set(compact('ContactUsCms'));
    }

    /**
     * View method
     *
     * @param string|null $id Contact Us id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ContactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ContactUsCm'));
    }

    public function contactus($id = null)
    {
        $ContactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ContactUsCm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ContactUsCm = $this->ContactUsCms->newEmptyEntity();
        if ($this->request->is('post')) {
            $ContactUsCm = $this->ContactUsCms->patchEntity($ContactUsCm, $this->request->getData());
            if ($this->ContactUsCms->save($ContactUsCm)) {
                $this->Flash->success(__('The about us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('ContactUsCm'));
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
        $ContactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ContactUsCm = $this->ContactUsCms->patchEntity($ContactUsCm, $this->request->getData());

            if ($this->ContactUsCms->save($ContactUsCm)) {
                $this->Flash->success(__('The contact us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('ContactUsCm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact us Cm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ContactUsCm = $this->ContactUsCms->get($id);
        if ($this->ContactUsCms->delete($ContactUsCm)) {
            $this->Flash->success(__('The about us cm has been deleted.'));
        } else {
            $this->Flash->error(__('The about us cm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function settings()
    {
    $settings = $this->Settings->find()->firstOrFail();

    if ($this->request->is(['patch', 'post', 'put'])) {
        $settings = $this->Settings->patchEntity($settings, $this->request->getData());
        if ($this->Settings->save($settings)) {
            $this->Flash->success(__('The setting has been saved.'));

            return $this->redirect(['action' => 'settings']);
        }
        $this->Flash->error(__('The setting could not be saved. Please, try again.'));
    }
    $this->set(compact('settings'));
}
}
