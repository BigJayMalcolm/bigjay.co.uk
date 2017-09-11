		<?php wp_footer(); ?> 
	</body>

	<script>
		document.addEventListener('DOMContentLoaded', function () 
		{
			$("#page-loader").addClass("is-active");

			var pageloaderTimeout = setTimeout( function() 
			{
				$("#page-loader").removeClass("is-active");
				clearTimeout( pageloaderTimeout );
			}, 1000 );
		});
	</script>
</html>