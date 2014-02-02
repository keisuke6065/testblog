<!-- サイドバー左 -->
        	<div class="sidebar_left hidden-xs" style="width:180px;float:left;margin:10px;margin-top:0px;border:1px solid #ddd;border-radius:4px;background-color:#FFF;">
                	<div class="row">
                    	<div class="col-md-12">
                        
                            
                        <?php 
                            echo $this->Form->create(false,array('action'=>'search','type'=>'get','class'=>'navbar-form navbar-left','role'=>'search'));
							?>
                        <div class="form-group">
                        <?php
                            echo $this->Form->label("サイト内検索");
                            echo $this->Form->text("Post.body",array('class'=>'form-control','placeholder'=>'Search'));
                        ?>
                        </div>
                        <?php
                            echo $this->Form->submit('検索',array('class'=>'btn btn-default'));
						    echo $this->Form->end();
                        ?>
                        
                        </div>
                    </div>
                	
            
            
            
            
            <ul class="nav nav-list">
              <li class="active"><a href="/testblog/home/index"><i class="glyphicon glyphicon-home"></i> Home</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-book"></i>その他</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-user"></i>プロフィール</a></li>
              </li>
            </ul>
            
            
            		<!-- ジャンル -->
                    
                    
             	<div>
                	<h4>category</h4>
                	<?php $categories = $this->requestAction('/home/cate');?>
                	<?php    
        				if(array_key_exists(0, $categories)) {
            				echo $this->Tree->getCategories(0, $categories[0], $categories);
						}
					?>
            	</div>
            </div>

