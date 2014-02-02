<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class HomeController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

	//ビューの設定
	public $layout='test';
	
	//モデルの設定
	public $uses =array('Post','Category');
	
	//
	public $actsAs = array('Tree','GroupTree');
	
	//ヘルパー
	public $helpers =array('Html','Form','Session','Tree');
	
	public $paginate = array(
		'Post'=>array(
			'limit' => 5,
			//'prameType'=>'named',
			//'type'=>'first',
			'order' => array(
				'Post.id' => 'desc'
        	)
    	),
		/*
		'Category'=>array(
			'limit'=>1,
			'type'=>'threaded'
		)
		*/
		
	);

	//認証の設定
	public function beforeFilter(){
		$this->Auth->allow();
	}

	//サイドバーの設定
	public function cate() {
		return $this->Category->generatetreegrouped();
		/*
        return $this->set(
            compact(
                'categories'
            )
        );
		*/
	}
	
	//検索の設定
	public function search(){
		$body = null;
		if(isset($this->request->query['body'])){
			$data = $this->paginate('Post',array(
			array(
				'Post.body like' => "%{$this->request->query['body']}%"
				//'Post.body like' => "%{$this->data['Post']['body']}%"
				)
			)
		);
		}
		$this->set('posts',$data);
	}
	



	public function index() {
		$this->Post->recursive = 0;
		
		$this->set('posts',
			$this->paginate('Post'));
		
		//$this->set('posts',$this->Post->find('all',array('limit'=>1)));
	}

	public function view($id = null){
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('Post.' . $this->Post->primaryKey => $id);
		$this->set('posts', $this->paginate('Post',
			array('Post.' . $this->Post->primaryKey => $id)
		));
	}
	
	
	public function category($id){
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		
		//$this->set('category',$this->paginate('Category',array('Category.id' => 3)));
		//$this->set('cate', $this->Category->primaryKey =>$id);
		//$this->set('data',$this->Post->find('frist',array('condtions'=>array('Post.id'=>3))));
		
		$this->set('posts',
			$this->paginate('Post',array('Post.category_id'=>$id)));
	
	}


}
