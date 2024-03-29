
	<div class="span12">
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url()?>front/index">Home</a> <span class="divider">/</span></li>
    <li><a href="<?php echo base_url()?>public/products.html"><?php echo $this->productdetails[0]->name; ?></a> <span class="divider">/</span></li>
    <li class="active"><?php echo $this->productdetails[0]->name; ?> Preview</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="<?php echo base_url()?>public/#"> <img src="<?php echo base_url()?>admin/public/images/<?php echo $this->productdetails[0]->image1; ?>" alt="" style="width:100%"></a>
                  </div>
                  <div class="item">
                     <a href="<?php echo base_url()?>public/#"> <img src="<?php echo base_url()?>admin/public/images/<?php echo $this->productdetails[0]->image2; ?>" alt="" style="width:100%"></a>
                  </div>
                  <div class="item">
                    <a href="<?php echo base_url()?>public/#"> <img src="<?php echo base_url()?>admin/public/images/<?php echo $this->productdetails[0]->image3; ?>" alt="" style="width:100%"></a>
                  </div>
                </div>
                <a class="left carousel-control" href="<?php echo base_url()?>public/#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="<?php echo base_url()?>public/#myCarousel" data-slide="next">›</a>
            </div>
			</div>
			<div class="span7">
				<?php if (isset($_SESSION['sucess_messsage'])&&!empty($_SESSION['sucess_messsage'])) {?>
                    <div class="alert alert-success"><?php echo $_SESSION['sucess_messsage']; $_SESSION['sucess_messsage']=''; ?></div>
                  <?php }else if (isset($_SESSION['error_messsage'])&&!empty($_SESSION['error_messsage'])) {?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error_messsage']; $_SESSION['error_messsage']=''; ?></div>

                 <?php } ?>
				<h3><?php echo $this->productdetails[0]->name; ?> [Rs. <?php echo $this->productdetails[0]->price - $this->productdetails[0]->discount; ?>]</h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm" action="<?php echo base_url(); ?>cart/add" method="post">
				  <div class="control-group">
					<label><span>Rs.<strike><?php echo $this->productdetails[0]->price; ?></strike> <?php echo $price=$this->productdetails[0]->price - $this->productdetails[0]->discount; ?></span></label><br/>
					<label class="control-label"><span>Quantity<span></label>
					<input type="hidden" name="product_id" value="<?php echo $this->productdetails[0]->id;?>">
					<input type="hidden" name="price" value="<?php echo $price;?>">
					<input type="hidden" name="slug" value="<?php echo $this->productdetails[0]->slug;?>">
					<div class="controls">
					<input type="number" class="span6" name="quantity" placeholder="Qty." value="1" min=1 max=<?php echo $this->productdetails[0]->stock;?>>
					</div>
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span11" name="color">
					  	<?php $color=explode(',',$this->productdetails[0]->color); 
					  	foreach ($color as $c) {?> 
						  <option value="<?php echo $c;?>"><?php echo ucfirst($c); ?></option>
						<?php } ?>
						  <!-- <option>Purple</option>
						  <option>Pink</option>
						  <option>Red</option> -->
						</select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><span>Size</span></label>
					<div class="controls">
					  <select class="span11" name="size">
						 <?php $size=explode(',',$this->productdetails[0]->size); 
					  	foreach ($size as $sz) {?> 
						  <option value="<?php echo $sz;?>"><?php echo ucfirst($sz); ?></option>
						<?php } ?>
						</select>
					</div>
				  </div>
				  <h4><?php echo $this->productdetails[0]->stock; ?> items in stock</h4>
				  <p><?php echo $this->productdetails[0]->short_description; ?>
				  <p>
				  <button type="submit" class="shopBtn" name="BtnCart"><span class=" icon-shopping-cart"></span> Add to cart</button>
				</form>
			</div>
			</div>
				<hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="<?php echo base_url()?>public/#home" data-toggle="tab">Product Details</a></li>
              <li class=""><a href="<?php echo base_url()?>public/#profile" data-toggle="tab">Related Products </a></li>
             
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2"><?php echo $this->productdetails[0]->color; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Size:</td><td class="techSpecTD2"><?php echo $this->productdetails[0]->size; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">MRP:</td><td class="techSpecTD2"><strike><?php echo $this->productdetails[0]->price; ?></strike></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Online:</td><td class="techSpecTD2"><?php echo $this->productdetails[0]->price - $this->productdetails[0]->discount; ?></td></tr>
				</tbody>
				</table>
				<p><?php echo $this->productdetails[0]->description; ?></p>

			</div>
			<div class="tab-pane fade" id="profile">
			<div class="row-fluid">	  
			<div class="span2">
				<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
			</div>
			<div class="span6">
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.
				We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> $140.00</h3>
			<label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br>
			<div class="btn-group">
			  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
			 </div>
				</form>
			</div>
		</div>
			<hr class="soft">
			<div class="row-fluid">	  
			<div class="span2">
				<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
			</div>
			<div class="span6">
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.
				We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> $140.00</h3>
			<label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br>
			<div class="btn-group">
			  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
			 </div>
				</form>
			</div>
	</div>
			<hr class="soft"/>
			<div class="row-fluid">	  
			<div class="span2">
				<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
			</div>
			<div class="span6">
				<h5>Product Name </h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.
				We always stay in touch with the latest fashion tendencies - 
				that is why our goods are so popular..
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> $140.00</h3>
			<label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br>
			<div class="btn-group">
			  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
			  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
			 </div>
				</form>
			</div>
	</div>
			<hr class="soft"/>
			<div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
			<div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			</div>
              <div class="tab-pane fade" id="cat1">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              <br>
              <br>
			  <div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/b.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
			<div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/a.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
			  </div>
              <div class="tab-pane fade" id="cat2">
                
				<div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
			<div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
			<div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
			<div class="row-fluid">	  
					<div class="span2">
						<img src="<?php echo base_url()?>public/assets/img/d.jpg" alt="">
					</div>
					<div class="span6">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.
						We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
					</div>
					<div class="span4 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $140.00</h3>
					<label class="checkbox">
						<input type="checkbox">  Adds product to compair
					</label><br>
					<div class="btn-group">
					  <a href="<?php echo base_url()?>public/product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
					  <a href="<?php echo base_url()?>public/product_details.html" class="shopBtn">VIEW</a>
					 </div>
						</form>
					</div>
			</div>
			<hr class="soften"/>
			
				</div>
            </div>

</div>
</div>
</div> <!-- Body wrapper -->
