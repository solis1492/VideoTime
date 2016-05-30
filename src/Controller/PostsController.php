<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{

	public $components = array(
        'Comments.Comments' => array(
            'userModelClass' => 'Users.User' // Customize the User class
        )
    );

	//public $components = array('Paginator');

    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Posts.PostID' => 'desc'
        )
    );

	public function initialize(){

	}

	public function index()
    {
    	$posts = $this->Posts->find('all');
    	$this->set('posts', $this->paginate($posts));
    }

	public function create()
    {
    	die("This is not Tom, and I'm not goku.");
    }

    public function view($id)
    {
    	$posts = $this->Posts->find('all');
    	$post = $this->Posts->get($id);
    	$this->set(compact('posts', 'post'));
    }

    public function edit($id)
    {
    	die("This is post " . $id);
    }
}