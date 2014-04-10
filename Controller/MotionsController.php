<?php

class MotionsController extends AppController {
    public $helper = array('Html', 'Form');

    public function index() {
        $this->set('motions', $this->Motion->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid motion'));
        }

        $motion = $this->Motion->findById($id);
        if (!$motion) {
            throw new NotFoundException(__('Invalid motion'));
        }
        $this->set('motion', $motion);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Motion->create();
            if ($this->Motion->save($this->request->data)) {
                $this->Session->setFlash(__('Your motion has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your motion.'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid motion'));
        }

        $motion = $this->Motion->findById($id);
        if (!$motion) {
            throw new NotFoundException(__('Invalid motion'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Motion->id = $id;
            if ($this->Motion->save($this->request->data)) {
                $this->Session->setFlash(__('Your Motion has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update your motion.'));
        }

        if (!$this->request->data) {
            $this->request->data = $motion;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Motion->delete($id)) {
            $this->Session->setFlash(
                __('The Motion with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
