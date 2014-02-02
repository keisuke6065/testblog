<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		
		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

	<body style="background-color:#CCC;">
  	<div class="container" style="width:1130px">
    	<!-- ヘッダー -->
		<div id="header" style="background:#FFF;">
        	<?php echo $this->Session->flash(); ?>
        	<div class="page-header" style="margin-bottom:0px;padding-top:20px;">
            	
                <h1 style="margin-left:10px;margin-right:auto;">WEBのいろいろ<small>ニートの大学生</small></h1>
                
            </div>
            
            <div style="padding:20px;">
            
            	<?php echo $this->Html->image('icon-1.png',array('url'=>array('controller'=>'posts')));?>
                <?php echo $this->Html->image('icon-2.png',array('url'=>array('controller'=>'posts')));?>
                <?php echo $this->Html->image('icon-3.png',array('url'=>array('controller'=>'posts')));?>
                <?php echo $this->Html->image('icon-4.png',array('url'=>array('controller'=>'posts')));?>
                <div style="float:right;display:inline;width:300px;">
                		<?php 
                            echo $this->Form->create(false,array('action'=>'search','type'=>'get','class'=>'form-inline','role'=>'search','style'=>'margin-top:0px;'));
						?>
                        <div class="form-group" style="display:inline;">
                        <?php
                            echo $this->Form->text("Post.body",array('class'=>'form-control','placeholder'=>'Search','style'=>'width:200px;'));
                        ?>
                        </div>
                        <?php
							echo $this->Form->button('検索',array('type'=>'submit','class'=>'btn btn-default','style'=>'display:inline;'));
                            //echo $this->Form->submit('検索',array('class'=>'btn btn-default','style'=>'overfloat:hidden;'));
						    echo $this->Form->end();
						?>
                        
				</div>
            </div>
            
        	
        </div>
        <!-- menu -->
        
        
        <nav class="navbar navbar-inverse" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="/testblog/home/index"><i class="glyphicon glyphicon-home"></i>Home</a></li>
				<li><a href="#">web</a></li>
				<li><a href="#">link</a></li>
			</ul>
        </nav>


        <!-- メインコンテンツ --> 
        
        <div class="main" style="background-color:#fff">
			
            
            <!-- サイドバー左 -->
        	<?php echo $this->element('sidebar');?>
            
            
            
			
            <!-- メインコンテンツ -->
            <div class="main_content" style="width:700px;float:left;">
            	
                    	<?php echo $this->fetch('content'); ?>
                    
                
                

            </div>
            
            
            
            
            
            
            <!-- サイドバー右 -->
            <div class="sidebar_rigth" style="width:180px;float:left;margin:10px;margin-top:0px;border:1px solid #ddd;border-radius:4px;background-color:#FFF;">サイドバー右
            </div>


		<!-- メインコンテンツ終了 -->
        </div>
        
        

        
        <!-- フッター -->
        <div id="footer" style="background-color:#3FF;width:1100px;overflow:hidden;">
        	氏名、メールアドレス、お問い合わせ
        </div>
        
        

        
    </div>
    <?php echo $this->Html->script('bootstrap.min')?>
    <?php echo $this->Html->script('ckeditor/ckeditor.js')?>
    <?php echo $this->Html->script('ckeditor/adapters/jquery.js')?>
    <?php echo $this->Html->script('bootstrap.min')?>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
	</body>
</html>
