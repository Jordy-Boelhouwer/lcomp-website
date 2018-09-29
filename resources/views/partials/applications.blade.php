<!DOCTYPE html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body>

			<section style="background-color:#2ea3f2; background-image: url(https://www.runningit.nl/wp-content/uploads/2013/03/overlay-abstract.png);" class="customer-logos slider h-25">
				<div class="slide"><img src="{{ asset('/images/logos/image1.png') }}" alt="Logo Microsoft"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image2.png') }}" alt="Logo office 365"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image3.png') }}" alt="Logo Microsoft Azure"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image4.png') }}" alt="Logo HP"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image5.png') }}" alt="Logo Watchguard"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image6.png') }}" alt="Logo Dell"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image7.png') }}" alt="Logo Apple"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image8.png') }}" alt="Logo Ruckus"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image9.png') }}" alt="Logo Ubiquiti"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image10.png') }}" alt="Logo Eset"></div>
				<div class="slide"><img src="{{ asset('/images/logos/image11.png') }}" alt="Logo VMWare"></div>
			</section>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>

</body>
</html>