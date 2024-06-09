<script setup>
const props = defineProps({
    plans: Array
})
const truncateText = (text, limit) => {
    if (text.length > limit) {
        return text.substring(0, limit) + '...';
    } else {
        return text
    }
}

</script>
<template>
<section id="pricing" class="pricing-content section-padding">
	<div class="container">					
		<div class="section-title text-center">
			<h2>Pricing Plans</h2>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		</div>				
		<div class="row text-center">									
			<div v-for="plan in plans" :key="plan.id" class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" >
				<div class="pricing_design">
					<div class="single-pricing">
						<div class="price-head">		
							<h2>{{  plan.title  }}</h2>
							<h1>R {{  plan.amount }}</h1>
							<span>/Monthly</span>
						</div>
						<p v-html="truncateText(plan.description,450)"></p>
						<div class="pricing-price">
							
						</div>
						<a href="#" class="price_btn">Order Now</a>
					</div>
				</div>
			</div>		  
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>
</template>
<style>
.pricing-content{position:relative;}
.pricing_design{
    position: relative;
    margin: 0px 15px;
}
.pricing_design .single-pricing{
    background:#005DC8;
    padding: 60px 40px;
    border-radius:30px;
    box-shadow: 0 10px 40px -10px rgba(0,64,128,.2);
    position: relative;
    z-index: 1;
}
.pricing_design .single-pricing:before{
    content: "";
    background-color: #fff;
    width: 100%;
    height: 100%;
    border-radius: 18px 18px 190px 18px;
    border: 1px solid #eee;
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: -1;
}
.price-head{}
.price-head h2 {
	margin-bottom: 20px;
	font-size: 26px;
	font-weight: 600;
}
.price-head h1 {
	font-weight: 600;
	margin-top: 30px;
	margin-bottom: 5px;
}
.price-head span{}

.single-pricing ul{list-style:none;margin-top: 30px;}
.single-pricing ul li {
	line-height: 36px;
}
.single-pricing ul li i {
	background: #005DC8;
	color: #fff;
	width: 20px;
	height: 20px;
	border-radius: 30px;
	font-size: 11px;
	text-align: center;
	line-height: 20px;
	margin-right: 6px;
}
.pricing-price{}

.price_btn {
	background: #005DC8;
	padding: 10px 30px;
	color: #fff;
	display: inline-block;
	margin-top: 20px;
	border-radius: 2px;
	-webkit-transition: 0.3s;
	transition: 0.3s;
}
.price_btn:hover{background:#0aa1d6;}
a{
text-decoration:none;    
}

.section-title {
    margin-bottom: 60px;
}</style>