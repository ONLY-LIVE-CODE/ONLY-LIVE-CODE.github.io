<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Отзывы <?php if ($coments_count!=0) echo "(".$coments_count.")";  ?></h3>
   							 <div class="listing" style='float:right; margin-top:-18px'>
			                    <?php if($pagination): ?>
			                        <?php echo $pagination; ?>
			                    <?php endif; ?>
			                </div>
  </div>
  <div class="panel-body">
							<ul>
			                    <?php if (count($coments)): foreach ($coments as $coment): ?>
			                        <li>
			                        	<b><?php  echo $coment->user_name; ?></b>
			                        	<small><?php  echo $coment->created; ?></small><br/>
			                        	<p><?php  echo $coment->body; ?></p>
			                         </li>
			                    <?php endforeach; endif; ?>
			                </ul>
			                 
			                <?php $this->load->view('components/coments_form');?>
			            
 </div>
</div>