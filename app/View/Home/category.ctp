<?php 
	$this->Html->addCrumb($posts['0']['Category']['name'], '/home/category/'.$posts['0']['Category']['id']);
	echo $this->Html->getCrumbs(' > ', array(
    'url' => array('controller' => 'home', 'action' => 'index'),'escape' => false));
	
?>
<h1><?php echo $posts['0']['Category']['name'];?></h1>
<div class="row">
	<div class="col-md-12 col-xs-12">
	<?php foreach($posts as $post):?>
		<div class="thumbnail">
			<img src="/testblog/img/300.png" alt="" />
			<div class="caption">
			<h3><span class="label label-default">New</span>
				<?php echo h($post['Post']['id']); ?>
				<?php echo $post['Post']['title'];?>
			</h3>
			<p><?php echo $post['Post']['body'];?></p>
			<p><?php echo $this->Html->link('詳しく',array('action'=>'view',$post['Post']['id']));?><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			</div>
		</div>

<?php endforeach;?>



	<ul class="pager">
		<?php
			echo $this->Paginator->prev('← ' . 'previous', array('class' => 'previous'), null, array('class' => 'previous'));
			echo $this->Paginator->numbers();
			echo $this->Paginator->next('next' . ' →', array('class' => 'next'), null, array('class' => 'next'));
		?>
	</ul>

	</div>
</div>