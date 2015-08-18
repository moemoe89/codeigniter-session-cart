

	  <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                   <thead>
					 <th>Product</th>
                     <th>Photo</th>
					 <th>Price</th>
					 <th>Quantity</th>
					 <th>Total</th>
				     <th>Delete</th>
                   </thead>
   
			       <tbody id="tb_checkout">
				   
				   <?php
					
					if($cart_session){
					$i = 0;
					$total =0;
					foreach($cart_session as $cs=>$value){
						$row = $this->product_model->product_detail($cs);
						$total += $row->product_price*$value;
					?>

					<tr id="tr<?php echo $cs;?>">
					  <td><?php echo $row->product_name;?></td>
					  <td><img src="<?php echo base_url();?>assets/images/product/<?php if($row->product_photo){echo $row->product_photo;} else {echo 'no_image.png';}?>" width="100" ></td>
					  <td>$ <?php echo $row->product_price;?></td>
					  <td>
					  
					  
				
							<div class="input-group" style="width:120px">
								<span class="input-group-btn">
									<button type="button" class="btn btn-danger btn-number less_qty" position="<?php echo $i;?>">
									<span class="glyphicon glyphicon-minus"></span>
									</button>
								</span>
								
									<input type="text" class="form-control qty" value="<?php echo $value;?>" style="text-align:right" onkeypress="return numbOnly(event)" id="qty[<?php echo $i;?>]">
									
									
								<span class="input-group-btn">
									<button type="button" class="btn btn-success btn-number add_qty" position="<?php echo $i;?>">
									<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>
							</div>
						
				
					  
					  <input type="hidden" class="product_id"  id="product_id[<?php echo $i;?>]" value="<?php echo $cs;?>">
					  <input type="hidden" class="product_price"  id="product_price[<?php echo $i;?>]" value="<?php echo $row->product_price;?>">
					  
					  
					  </td>
					  <td>$ <span id="span_total<?php echo $cs;?>"><?php echo $row->product_price*$value;?></span></td>
					  <td>
						<a class="delete_cart btn btn-danger btn-xs" title="Delete" style="cursor:pointer" product_id="<?php echo $cs;?>" position="<?php echo $i;?>"><span class="glyphicon glyphicon-trash"></span></a>		
					  </td>
					</tr>
					
					<?php
					$i++;
					}?>
					<input type="hidden" id="total" value="<?php echo $total;?>">
					<tr id="tr_total">
					  <td colspan="4" align="right">Total &nbsp;</td>
					  <td>$ <span id="span_all_total"><?php echo $total;?></span></td>
					  <td>&nbsp;</td>
					</tr>
					<?php
					
					} else {
					
					?>
					
					<tr>
					  <td colspan="6" align="center">Cart empty</td>
					</tr>
					
					<?php
					}
					?>
    
                   </tbody>
        
</table>

</div>
<?php
if($cart_session){
?>
<span id="button_bottom">
<button class="btn btn-danger pull-right RbtnMargin empty_cart" type="button" >Empty Cart</button>
<button class="btn btn-info pull-right RbtnMargin update_cart" type="button" >Update Cart</button>
<button class="btn btn-success pull-right" type="submit" id="submit">Send</button>
</span>
<?php
}
?>


<form action="" method="post">
	<div class="modal fade bs-example-modal-sm modal-alert" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

							<div class="modal-dialog modal-sm" style="width:90%">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&#215;</button>
											<h3>Form Order</h3>
									</div>
									
							<div class="modal-body">
								<div class="row-fluid">
									<div class="span10 offset1">
										<div id="modalTab">
											<div class="tab-content">
												<div class="tab-pane active" id="about">
								
				
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>
	<div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" name="phone" placeholder="Enter phone" required>
    </div>
	<div class="form-group">
      <label for="address">Address:</label>
      <textarea class="form-control" name="address" placeholder="Enter address" required></textarea>
    </div>
 
  
										
								<hr>
										<div class="row" style="margin-top:10px">
				<div class="col-xs-12 form-group">
					<button type="button" class="btn btn-warning RbtnMargin pull-right" data-dismiss="modal">Close</button>
					&nbsp;
					<button type="submit" class="btn btn-success pull-right">Submit</button>
				</div>
				</div> 
									
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				</form>