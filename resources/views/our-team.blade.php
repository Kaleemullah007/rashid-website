@extends('layouts.home')
@section('content')
    <!-- Services Area Start -->
   <div class="faq__two section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-lg-6 lg-mb-30">
                    <div class="faq__two-left">
                        <div class="faq__two-left-image">
                            <img src="images/faq-1.jpg" alt="">
                            <img class="faq__two-left-image-one" src="images/faq-2.jpg" alt="">
                            <div class="faq__two-left-image-question left-right-animate">
                                <img src="images/questions.png" alt="">
                                <h6>Professional Staff</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6">
                    <div class="faq__two-right">
                        <div class="faq__two-right-title">
                            <span class="subtitle-one">Professional Staff</span>
                            <h2>Our Expert Team</h2><br>
							<p> {{ config('details.name')}}, we take immense pride in the dedicated and passionate individuals who form the backbone of our organization. Our team is a diverse blend of culinary experts, sourcing specialists, logistics wizards, and customer service enthusiasts, all driven by a shared commitment to delivering excellence.</p>
                        </div>
                                                                      
                    </div>
                </div>
            </div>
			
			    <div class="col-xxl-12 col-lg-12">
			    <div class="faq__collapse mt-35">
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>1.	Ceo</h6>
                                        <i class="far fa-minus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content active">
                                        <p>our organization with a vision to set new standards in the food industry. With a wealth of experience and a deep love for culinary arts, ceo is the driving force behind our mission to provide high-quality food products that delight our customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>2.	Operations Manager</h6>
                                        <i class="far fa-minus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content active">
                                        <p> is the driving force behind the seamless functioning of our operations. With his keen eye for detail and unwavering dedication to quality, Operations Manager's ensures that every product meets our stringent standards before it reaches your table.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>3.	Sales and Customer Service Team</h6>
                                        <i class="far fa-minus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content active">
                                        <p>Our friendly and knowledgeable sales and customer service team is always ready to assist you. Whether you have questions about our products, need assistance with your order, or simply want expert culinary advice, our team is here to make your experience with {{ config('details.name')}} exceptional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>4.	Production and Quality Control Team</h6>
                                        <i class="far fa-minus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content active">
                                        <p>Behind the scenes, our dedicated production and quality control team works diligently to ensure that every product is crafted to perfection. Their commitment to precision and quality is the backbone of our brand.</p>
                                    </div>
                                </div>
                            </div>
							
							           <div class="faq__collapse-item">
                                <div class="faq__collapse-item-card">
                                    <div class="faq__collapse-item-card-header">
                                        <h6><span class="far fa-question-circle"></span>5.	Sustainability Champions</h6>
                                        <i class="far fa-minus"></i>
                                    </div>
                                    <div class="faq__collapse-item-card-header-content active">
                                        <p>We have a passionate team dedicated to sustainability and ethical sourcing practices. They work tirelessly to ensure that our products are not only delicious but also environmentally responsible, reflecting our commitment to a better future.</p>
                                    </div>
                                </div>
                            </div>
							
							
							 
	
							
					
							<p>{{ config('details.name')}}, we believe that our team is the heartbeat of our company. Together, we share a common goal: to bring you the best food products that enrich your culinary experiences.</p>
							
							<p>We take pride in our collective dedication to excellence and look forward to continuing to serve you with the utmost commitment and passion.</p>
								<p>Join us on this flavorful journey, and let's celebrate the art of food together!</p>
							
							
                        </div>  
						
					   </div>	
        </div>        
    </div>
    <!-- Services Area End -->

 
@endsection