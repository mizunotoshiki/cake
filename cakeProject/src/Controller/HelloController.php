<?php
namespace App\Controller;

use App\Controller\AppController;
// use Cake\Http\ServerRequest;

class HelloController extends AppController
{
    // protected $autoRender = false;
    
    public function index() {
        $this->viewBuilder()->disableAutoLayout();//デフォルトレイアウトを解除 autoLayoutは非推奨かつ4移行だと削除
        // https://book.cakephp.org/4/en/appendices/4-0-migration-guide.html#router
        $id = $this->request->getQuery('id');
        $pass = $this->request->getQuery('pass');
        $this->set('name', 'toshiki');
        $value = [
            'birthday' => '19940309',
            'height' => 540
        ];
        $this->set($value);
        // $query = $this->request->getQueryParams();
        // dump($query);
        // return;
        // dump $query;
        // // 3.4.0 より前 $pass = $this->request->query('pass');https://book.cakephp.org/3/ja/controllers/request-response.html#cake-request
        // echo "<html><body><h1>テスト</h1></body></html>";
        // echo 'ID'.$id;
        // echo 'pass'.$pass;
        if ($this->request->isPost()) {
            $this->set('data', $this->request->getData());
        } else {
            $this->set('data', []);
        }
        
    }
    public function form() {
        $this->viewBuilder()->disableAutoLayout();//デフォルトレイアウトを解除 autoLayoutは非推奨かつ4移行だと削除
        // $query = $this->request->getQueryParams();
        // $this->request->data();//3.3以前
        $data = $this->request->getData(); //3.4以降
        // $this->set($query);
        $this->set($data);
        echo "<html><body><h1>桃</h1></body></html>";
        
    }

    public function save() {
        $this->viewBuilder()->disableAutoLayout();
        $this->autoRender = false;
        $data = $this->request->getData(); //3.4以降
        // $this->set($query);
        $this->set($data);
        $this->render('/Hello/index');
        // echo "<html><body><h1>桃</h1></body></html>";
    }

}