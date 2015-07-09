
<style>
/* tell the container's children to float left: */
.float-my-children > * {
    float:left;
    margin-right:5px;
}

/* this is called a clearfix. it makes sure that the container's children floats are cleared, without using extra markup */

.clearfix {
    *zoom:1 /* for IE */
}

.clearfix:before,
.clearfix:after {
   content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}

/* end clearfix*/

/* below is just to make things easier to see, not required */
body > div {
    border:1px dashed red;
    margin-bottom:10px;    
}

</style>
<div>
	<div style="float:left">
	<blockquote>

	<img 	alt="Stevens Guarantee" 
		style="height:110px;float;left;padding-right:10px" 
		align="left" 
		src="<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA)?>wysiwyg/DG.jpg" >

		<p style="font-size:13px">MY PROMISE TO YOU "We will never knowingly be undercut on
		price, we pledge to match any price on the market with the benefit of
		our enormous stocks, don't be frightened to mention when asking for a
		quote" </p>
		<div><strong><p style="font-size:13px">Daniel G. Stevens</p> 
			<p style="font-size:13px">Managing Director Of DGS Group Of Companies</p></strong></div>

	</blockquote>
</div>
</div>
	<div style="float:left;width:100%">
	<script src="https://sealserver.trustwave.com/seal.js?code=8aa2540c9f91469fbbd226844afc0404" 
			type="text/javascript"></script>

	</div>
	<br/>	
	<div style="padding-top:10px;float:left;">
 		<p>Established 1999, we are now offering our customers the convenience of 24 hour a day full online ecommerce ordering via secure credit card processing using PayPal or Google Checkout. 
 			We are still happy to take orders by email, info@crowngreenbowler.co.uk or by phone 01902 661111 during office hours.</p>
		<br/>
		<p>We are transparent about our delivery charges and considering the average weight of our orders we believe they represent excellent value for money.</p>
		<ul>
		
		
		<li>£2.99 for orders up to £10</li> 
 		<li>£3.99 for orders between £10 - £20</li>
 		<li>£7.99 for orders over £20</li>

		</ul>
		<div style="padding-top:10px"></div>
		<p><strong>PLEASE MAKE CHEQUES PAYABLE TO D.G.S</strong></p>
 
		<p>Delivery is via Royal Mail for all orders under 2 KG in weight and this service can take up to 4 working days from the date of despatch. Delivery is via UK Mail Parcel on all orders over 2 KG in weight and is usually next working day to the UK mainland with the exceptions below.
		Note: Orders to Isle of Man, Isle of Wight, Northern Ireland and Highlands of Scotland cost £10 on orders above £20.
		Please begin browsing our product range using any of the categories on the navigation to your left.	</p>
	
	</div>
