<?php include('menu.php'); ?>

<!--BANNER-->
<div class="col-xs-12 nonepadding bg-main">
	<div class="container nonepadding">
		<ul class="bxslider">
		  <li><img src="../assets/img/banner_01.jpg" /></li>
		  <li><img src="../assets/img/banner_01.jpg" /></li>
		  <li><img src="../assets/img/banner_01.jpg" /></li>
		  <li><img src="../assets/img/banner_01.jpg" /></li>
		</ul>

		<div class="col-xs-12 nonepadding">
			<div class="col-main-left">
				<div class="col-xs-12" style="margin: 10px 0; border-left: 10px solid #ff7f00;">
					<h3>เรื่องติดอันดับ</h3>
					<h4 class="orange-color">TOP STORY</h4>
				</div>
			</div>
			<div class="col-main-right">
				<div class="col-xs-12" style="margin: 10px 0; border-left: 10px solid #69308d;">
					<h3>อัพเดตล่าสุด</h3>
					<h4 class="purple-color">NEW RELEASE</h4>
				</div>	
			</div>
		</div>
	</div>
</div>
<!--BANNER-->


<?php include('mainfooter.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
	  	$('.bxslider').bxSlider({
	  		nextText: '<img src="../assets/img/icon-next.png"/>',
			prevText: '<img src="../assets/img/icon-prev.png"/>'
	  	});
	});
</script>