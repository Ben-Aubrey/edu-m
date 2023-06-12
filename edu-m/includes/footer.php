
    <!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="./assets/vendor/global/global.min.js"></script>

	<script src="./assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="./assets/vendor/apexchart/apexchart.js"></script>

	<script src="./assets/vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="./assets/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="./assets/js/dashboard/dashboard-1.js"></script>

	<script src="./assets/vendor/owl-carousel/owl.carousel.js"></script>

	<script src="./assets/js/custom.min.js"></script>
	<script src="./assets/js/dlabnav-init.js"></script>
	<script src="./assets/js/demo.js"></script>
	<script src="./assets/js/styleSwitcher.js"></script>
	<script>
		function cardsCenter()
		{

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'dark';
				new dlabSettings(dlabSettingsOptions);
			},1500)
		});

	</script>