$(function(){	

	
				$('.first.circle').circleProgress({
					startAngle:-Math.PI/2,
					value: 0.78,
					size:100,
					reverse:true,
					fill: { color: "#5db5a4" },
				}).on('circle-animation-progress', function(event, progress) {
				    $(this).find('strong').html(parseInt(78 * progress) + '<i>%</i>');
				});
				$('.second.circle').circleProgress({
					startAngle:-Math.PI/2,
					value: 0.83,
					size:100,
					reverse:true,
					fill: { color: "#f4cda5" },
				}).on('circle-animation-progress', function(event, progress) {
				    $(this).find('strong').html(parseInt(83 * progress) + '<i>%</i>');
				});
				$('.third.circle').circleProgress({
					startAngle:-Math.PI/2,
					value: 0.95,
					size:100,
					reverse:true,
					fill: { color: "#ed5276" },
				}).on('circle-animation-progress', function(event, progress) {
				    $(this).find('strong').html(parseInt(95 * progress) + '<i>%</i>');
				});
				$('.forth.circle').circleProgress({
					startAngle:-Math.PI/2,
					value: 0.87,
					size:100,
					reverse:true,
					fill: { color: "#c26ac4" },
				}).on('circle-animation-progress', function(event, progress) {
				    $(this).find('strong').html(parseInt(87 * progress) + '<i>%</i>');
				});

			
	
})