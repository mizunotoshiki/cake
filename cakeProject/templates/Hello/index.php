<?php
    $tytle = "test";
    // $this->assign('title', 'トップページ');
    $this->assign('title', 'All Users');
?>
<!DOCTYPE html>
<html>
<head>
    <?=$tytle ?>
    <?=$this->fetch('title'); ?>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <!-- ↓下記にできる -->
    
    <?=$this->Html->charset(); ?>
    
    
    <?=$this->Html->script('hello');?>
    <!-- これと同じ <script src="/js/hello.js"></script> ただしwebroot/js/hello.jsにファイルがあることを前提とする それ以外を指定したい場合は独自にpathの指定 -->
    <!-- cakes https://book.cakephp.org/4/ja/views/helpers/html.html -->
    <!-- そもそもscriptタグ http://www.htmq.com/html5/script.shtml -->
    <!-- <script>タグは、文書にJavaScriptなどのスクリプトや、データブロックを組み込む際に使用 -->
        <!-- デフォルトtype="text/javascript"のため省略可  -->
        
    <?=$this->Html->css('hello');?>
    <!-- これと同じ <link rel="stylesheet" href="/css/forms.css" /> -->
    <!-- webroot/css/hello.css -->
    
    <title>Document</title>
</head>
<body>
    <p>私の名前は<?=h($name) ?>です</p>
    <p>HTML5で作成しました！</p>
    <?=$birthday ?></br>
    <?=$height ?></br>

    
    
    <?=print_r($data) ?></br>
    <!-- // Layoutファイル -->
    <title><?= $this->fetch('title') ?></title>

    <form method="post" action="./hello/form">
        <input type="text" name="name">
        <input
            type="hidden" name="_csrfToken" autocomplete="off"
            value="<?= $this->request->getAttribute('csrfToken') ?>"
        >
        <!-- <input type="number" name="tel"> -->
        <button type="submit">Click</button>
    </form>
    <p>FormHelper</p>
    <!-- https://book.cakephp.org/4/ja/views/helpers/form.html createはフォームの開始タグを出力 デフォルトのメソッドは POST -->
    <?=$this->Form->create(null, ['type' => 'post', 'url' =>['controller' => 'Hello', 'action' => 'index'] ]) ?>
    
    <!-- これと同じ <input name="name" type="text" class="name">-->
    <?=$this->Form->text('Form1.name', ['class' => 'name'])?></br><!-- input 要素の作成 https://book.cakephp.org/4/ja/views/helpers/form.html#input -->
    <?=$this->Form->textarea('Form1.name2', ['class' => 'name2'])?></br>
    <?=$this->Form->control('Form1.name6', ['type' => 'textarea', 'class' => 'name2'])?></br>
    <?=$this->Form->text('Form1.name3', ['class' => 'name3'])?></br>
    <?=$this->Form->text('Form1.name4', ['class' => 'name4'])?></br>
    <?=$this->Form->select(
        'field',// キー
        [1, 2, 3, 4, 5],// 選択項目 配列
        [
            // 'multiple' => true,複数選択可能
            'value' => 2//初期値
        ]
    );?></br>
    <?=$this->Form->checkbox('done', ['value' => 555]); ?></br> <!-- checkの値デフォルトは1 valueで変更できる -->
    <?=$this->Form->control('published', ['type' => 'checkbox']);?>
    <?=$this->Form->control('password');?>
    <?=$this->Form->control('search', ['type' => 'autocomplete']);?>
    <?=$this->Form->radio(
    'favorite_color',
        [
            ['value' => 'r', 'text' => 'Red', 'style' => 'color:red;'],
            ['value' => 'u', 'text' => 'Blue', 'style' => 'color:blue;'],
            ['value' => 'g', 'text' => 'Green', 'style' => 'color:green;'],
        ]
    ); ?></br>
    <?=$this->Form->dateTime('released', [
        'year' => [
            'class' => 'year-classname',
        ],
        'month' => [
            'class' => 'month-class',
            'data-type' => 'month',
        ],
    ]);?>

    <?=$this->Form->dateTime('test' )?>
    <?=$this->Form->submit('送信だよ') ?>
    <?=$this->Form->end() ?>
</body>
</html>