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
    <script>

		CKEDITOR.disableAutoInline = true;

		$( document ).ready( function() {
			$( '#editor1' ).ckeditor(); // Use CKEDITOR.replace() if element is <textarea>.
			$( '#editable' ).ckeditor(); // Use CKEDITOR.inline().
		} );

		function setValue() {
			$( '#editor1' ).val( $( 'input#val' ).val() );
		}

	</script>
</head>
	<body style="background-color:#CCC">
  	<div class="container" style="width:1130px">
    	<!-- ヘッダー -->
		<div id="header" style="background:#FFF;">
        	<?php echo $this->Session->flash(); ?>
        	<div class="page-header" style="margin-bottom:0px;">
            	
                <h1 style="margin-left:auto;margin-right:auto;"><?php echo $this->fetch('content'); ?>Example page header0 <small>Subtext for header</small></h1>
                
            </div>
            
            <div style="padding:20px;">
            	<?php echo $this->Html->image('icon-1.png',array('url'=>array('controller'=>'posts')));?>
                <?php echo $this->Html->image('icon-2.png',array('url'=>array('controller'=>'posts')));?>
                <?php echo $this->Html->image('icon-3.png',array('url'=>array('controller'=>'posts')));?>
                <?php echo $this->Html->image('icon-4.png',array('url'=>array('controller'=>'posts')));?>
                <div style="float:right;">
                    <form class="navbar-form navbar-left" role="search" style="margin-top:0px;">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">検索</button>
                    </form>
				</div>
            </div>
            
        	
        </div>
        <!-- menu -->
        
        
        <nav class="navbar navbar-inverse" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="#"><i class="glyphicon glyphicon-home"></i>Home</a></li>
				<li><a href="#">link</a></li>
				<li><a href="#">link</a></li>
			</ul>
        </nav>


        <!-- メインコンテンツ --> 
        
        <div class="main" style="background-color:#fff">
			
            
            <!-- サイドバー左 -->
        	<div class="sidebar_left hidden-xs" style="width:180px;float:left;margin:10px;margin-top:0px;border:1px solid #ddd;border-radius:4px;background-color:#FFF;">
                	<div class="row">
                    	<div class="col-md-12">
                        <form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">検索</button>
						</form>
                        </div>
                    </div>
            
                	
            
            
            
            
            <ul class="nav nav-list">
              <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-book"></i> Library</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-user"></i> Applications</a></li>
              <li><a href="#"><i class="i"></i> Misc</a></li>
              <li class="dropdown">
              	<a href="" class="dropdown-toggle" data-toggle="dropdown">dropdown <span class="caret"></span></a>
              	<ul class="dropdown-menu" role="menu">
              		<li><a href="">test</a></li>
                    <li><a href="">test2</a></li>
              	</ul>
              </li>
            </ul>
            
            
            		<!-- ジャンル -->
                    
                    
             	<div>
                    <ul style="padding-left:20px">
                    	<li><a href="">php</a>
                    		<ul style="padding-left:20px">
                    			<li><a href="">cakephp</a></li>
                    			<li>wordpress</li>
                    		</ul>
                    	</li>
                    	<li>ブログ
                    		<ul style="padding-left:20px">
                    			<li>愚痴</li>
                    			<li>温泉</li>
                    		</ul>
                    	</li>
                    </ul>
            	</div>
            
            
            </div>
            
            
            
			
            <!-- メインコンテンツ -->
            <div class="main_content" style="width:700px;float:left;">
            	<div class="row">
                	<div class="col-md-12 col-xs-12">
                    	<div class="thumbnail">
                        	<?php echo $this->Html->image('300.png');?>
                            <div class="caption">
                            	<h3><span class="label label-default">New</span>Thumbnail label</h3>
                            	<p>...</p>
                            	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                         	</div>
                    	</div>
                    </div>
                </div>
                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="next"><a href="#">Newer &rarr;</a></li>
                </ul>
                
                
		<textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10"></textarea>

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
	<?php echo $this->element('sql_dump'); ?>
    <?php echo $this->Html->script('bootstrap.min')?>
    <?php echo $this->Html->script('ckeditor/ckeditor.js')?>
    <?php echo $this->Html->script('ckeditor/adapters/jquery.js')?>
    <?php echo $this->Html->script('bootstrap.min')?>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
	</body>
</html>
