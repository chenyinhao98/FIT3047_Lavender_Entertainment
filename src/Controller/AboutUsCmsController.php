<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AboutUsCms Controller
 *
 * @property \App\Model\Table\AboutUsCmsTable $AboutUsCms
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AboutUsCmsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aboutUsCms = $this->paginate($this->AboutUsCms);

        $this->set(compact('aboutUsCms'));
    }

    /**
     * View method
     *
     * @param string|null $id About Us Cm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aboutUsCm = $this->AboutUsCms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aboutUsCm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aboutUsCm = $this->AboutUsCms->newEmptyEntity();
        if ($this->request->is('post')) {
            $aboutUsCm = $this->AboutUsCms->patchEntity($aboutUsCm, $this->request->getData());
            if ($this->AboutUsCms->save($aboutUsCm)) {
                $this->Flash->success(__('The about us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutUsCm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id About Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aboutUsCm = $this->AboutUsCms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aboutUsCm = $this->AboutUsCms->patchEntity($aboutUsCm, $this->request->getData());
            if ($this->AboutUsCms->save($aboutUsCm)) {
                $this->Flash->success(__('The about us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about us cm could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutUsCm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id About Us Cm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aboutUsCm = $this->AboutUsCms->get($id);
        if ($this->AboutUsCms->delete($aboutUsCm)) {
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
