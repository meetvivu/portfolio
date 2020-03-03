	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/aos.js"></script>


	<script type="text/javascript">
		$(document).on('click','.none-button',function(){
			// $(this).addClass('.none').siblings(removeClass('.none-button-1'));
			// alert("test");
			 $("#menu").modal("hide");
		});





		$(document).ready(function(){
			$("none-button").click(function(){
				$("none-buttonbutton-1").toggleClass("none");
				$("#menu").modal("hide");
			});
		});





		$('.owl-carousel').owlCarousel({
			items:1,
			autoHeight:true
		});






		$(document).ready(function() {
			$(window).scroll(function() {
				var header = $('.header'),
				scroll = $(window).scrollTop();

				if (scroll >= 100) header.addClass('fixed');
				else header.removeClass('fixed');
			})
		})
	





		function openLeftMenu() {
			document.getElementById("leftMenu").style.display = "block";
		}

		function closeLeftMenu() {
			document.getElementById("leftMenu").style.display = "none";
		}






		$(document).ready(function() {

			$('.link-gallery').click(function(){
				var descripcion = $(this).attr('title');
				$('#caption').html(descripcion);
				var img = $(this).find('img');
				var src = img.attr('src')
				$('#img01').attr('src', src);
				$('#myModal').css('display','block');
				$('.modal-backdrop').remove();
			});

			$('.close').click(function(){
				$('#myModal').css('display','none');
			});

		});





		$(window).on('load', function(){
			setTimeout(function() {
				$('.preloader').addClass('loadcomplete');
			},4000)
		});





	
		AOS.init({
			easing: 'ease-in-out-sine'
		});



		function myfunction(){
			alert("Data insert Successfull");
		}

	</script>



</body>
</html>