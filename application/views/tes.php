<!DOCTYPE HTML>
<html>
<script src="<?=base_url();?>assets/jquery/jquery-3.5.1.js"></script>
<head>
<script type="text/javascript">

	$(document).ready(function () 
	{
		getDataChar();
	});

	function getDataChar()
	{
		$.ajax(
		{
			type: "POST",
			url: "<?=base_url();?>Chart/dataChart",
			data: "data",
			dataType: "json",
			success: function (response) 
			{
				console.log(response);
				chart(response);
			}
	});
  }

  function chart(response) { 
  	var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: "Tes Chart "
	},
	data: [
	{
		/*Change type to "bar", "area", "spline", "pie",etc.*/
		type: "column",

		dataPoints:response
		
		// dataPoints: a
		

	}
	]
});
chart.render();
   }
</script>

</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
<!-- </body>
</html> -->