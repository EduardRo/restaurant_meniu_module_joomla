<style>
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.product_cart_block {
    
    display: inline-flex;
    top: 70px;
    
}
.product-cart-left-block {
    
    display: inline;
	padding-left: 20px;
    
    
}
.product-cart-left-block h4 a {
	color: #b5b0b0;
}
.product-title {
    padding-top: 1px;
	color: #b5b0b0;
    margin: 0rem 0 0.75rem 0;
}

.product-price-container .sale-price {
    color: whitesmoke;
	font-size: 1.4em;
    font-weight: bold;
}

.sale-price {
    
	padding-left: 7px;
	font-weight: 900;
	border-left: 2px solid #344ab5;
}
.base-price, .sale-price {
    line-height: 26px;
	font-size: 40px;
}

.product-cart-section.col-sm-12 {
	font-family: 'Saira', sans-serif;
    display: inline-flex;
    padding: 15px;
    border-radius: 0px;
    margin-bottom: 10px;
    transition: 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    /* border: 1px solid; */
    padding: 10px;
    box-shadow: 3px 5px #b5b0b0;
	box-shadow: 3px 10px 10px 3px #b5b0b0;
    transition: 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    color: white;
    background: #997e5ed4!important;
}
.product-cart-section.col-sm-12:hover {
    transform: translateY(-5px);
    box-shadow: 0px 10px 10px 0px rgb(0 0 0 / 10%);
    transition: 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}



.myp {
	margin:0px;
}

.nav-link {
    font-size: 25px!important;
    font-weight: 700;
    position: relative;
    padding-bottom: 30px;
    text-transform: uppercase !important;
	border:none!important;
	color:black!important;
}
.nav-link .active{
	text-decoration: underline;
}
</style>
<?php 

print_r($CategoriiMeniu[0]->denumire); 
print(count($CategoriiMeniu));
echo '<nav>';
echo '<div class="nav nav-tabs" id="nav-tab" role="tablist">';
foreach($CategoriiMeniu as $CategorieMeniu ) {
	

	if ($CategorieMeniu->id==1){
		?>
    <button class="nav-link active" id="nav-<?php echo $CategorieMeniu ->denumire; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $CategorieMeniu ->denumire; ?>" 
	type="button" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo $CategorieMeniu ->denumire; ?></button>
 <?php	
 } else {
	echo '<button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">'.$CategorieMeniu ->denumire.'</button>';

	}

  }
  echo '</div></nav>';

?>




<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen&family=Saira:wght@100&display=swap" rel="stylesheet">


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	kljljlk
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  lajfldfj


  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">.dgfdg tab2..</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.dgdfgd.tab3.</div>
</div>