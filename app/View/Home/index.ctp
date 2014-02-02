<div class="row">
	<div class="col-md-12 col-xs-12">
	<?php foreach($posts as $post):?>
		<div class="thumbnail">
			<div class="caption">
			<h3><span class="label label-default">New</span>
				<?php echo h($post['Post']['id']); ?>
				<?php echo $post['Post']['title'];?>
			</h3>
			<p>
			<?php 
				$str = $post['Post']['body'];
				$str = mb_strimwidth($str, 0, 50, "…",'utf8');
				echo $str;
			?>
            </p>
			<p><?php echo $this->Html->link('詳しく見る',array('action'=>'view',$post['Post']['id']),array('class'=>'btn btn-primary','role'=>'button'));?></p>
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