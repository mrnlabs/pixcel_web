<script setup>
import { Link,router } from '@inertiajs/vue3';

const props = defineProps({
    plans: Array,
	success: String,
	error: String
})

const truncateText = (text, limit) => {
    if (text.length > limit) {
        return text.substring(0, limit) + '...';
    } else {
        return text
    }
}

const addToCart = (plan) => {
	let planInStorage = localStorage.getItem('pixcel');
	if(planInStorage){
		localStorage.removeItem('pixcel');
	}
	localStorage.setItem('pixcel', JSON.stringify(plan.id));
	router.get(`/add-to-cart?id=${plan.id}`);
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
							<h2 class="price-title">{{  plan.title  }}</h2>
							<h1>R {{  plan.amount }}</h1>
						</div>
						<p v-html="truncateText(plan.description,450)"></p>
						<div class="pricing-price">
							
						</div>
						<Link @click="addToCart(plan)" href="#!"  class="price_btn cursor-pointer">Add To Cart</Link>
					</div>
				</div>
			</div>		  
		</div>
	</div>
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

a{
text-decoration:none;    
}

.section-title {
    margin-bottom: 60px;
}
.price-title {
	font-size: 22px;
}
</style>