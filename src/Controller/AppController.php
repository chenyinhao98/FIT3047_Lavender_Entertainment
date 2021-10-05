<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
<<<<<<< HEAD
    }
=======
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ]
                ]
            ],
            'logoutAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);

    }
    private ?\Cake\Datasource\RepositoryInterface $viewVars = null;
    public function beforeRender(EventInterface $event)
    {
        if(!array_key_exists('_serialize', (array) $this->viewVars) &&
            in_array($this->response->getType(), ['application/json', 'application/xml'])
        ){
            $this->set('_serialize', true);
        }
        //login check
        if($this->request->getSession()->read('Auth.User')){
            $this->set('loggedIn', true);
        } else {
            $this->set('loggedIn', false);
        }
    }
    public function beforeFilter(EventInterface $event){
        $this->Auth->allow(['controller' => 'Pages', 'action' => 'display', 'home']);
    }
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection'); */

>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
}


