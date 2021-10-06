<?php
declare(strict_types=1);

namespace App\Controller;

/**
<<<<<<< HEAD
 * ContactCms Controller
=======
 * ContactUsCms Controller
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
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
<<<<<<< HEAD
        $ContactUsCms = $this->paginate($this->ContactUsCms);

        $this->set(compact('ContactUsCms'));
=======
        $contactUsCms = $this->paginate($this->ContactUsCms);

        $this->set(compact('contactUsCms'));
    }

    public function contactus()
    {
        $contactUsCms = $this->paginate($this->ContactUsCms);

        $this->set(compact('contactUsCms'));
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
    }

    /**
     * View method
     *
<<<<<<< HEAD
     * @param string|null $id Contact Us id.
=======
     * @param string|null $id Contact Us Cm id.
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
<<<<<<< HEAD
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
=======
        $contactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contactUsCm'));
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
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
<<<<<<< HEAD
        $ContactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ContactUsCm = $this->ContactUsCms->patchEntity($ContactUsCm, $this->request->getData());

            if ($this->ContactUsCms->save($ContactUsCm)) {
=======
        $contactUsCm = $this->ContactUsCms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactUsCm = $this->ContactUsCms->patchEntity($contactUsCm, $this->request->getData());
            if ($this->ContactUsCms->save($contactUsCm)) {
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
                $this->Flash->success(__('The contact us cm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contact us cm could not be saved. Please, try again.'));
        }
<<<<<<< HEAD
        $this->set(compact('ContactUsCm'));
=======
        $this->set(compact('contactUsCm'));
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
    }

    /**
     * Delete method
     *
<<<<<<< HEAD
     * @param string|null $id Contact us Cm id.
=======
     * @param string|null $id Contact Us Cm id.
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
<<<<<<< HEAD
        $ContactUsCm = $this->ContactUsCms->get($id);
        if ($this->ContactUsCms->delete($ContactUsCm)) {
            $this->Flash->success(__('The about us cm has been deleted.'));
        } else {
            $this->Flash->error(__('The about us cm could not be deleted. Please, try again.'));
=======
        $contactUsCm = $this->ContactUsCms->get($id);
        if ($this->ContactUsCms->delete($contactUsCm)) {
            $this->Flash->success(__('The contact us cm has been deleted.'));
        } else {
            $this->Flash->error(__('The contact us cm could not be deleted. Please, try again.'));
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
        }

        return $this->redirect(['action' => 'index']);
    }
<<<<<<< HEAD

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
=======
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
}
