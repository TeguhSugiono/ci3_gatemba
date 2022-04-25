var options = {
	chart: {
		width: 400,
		type: 'donut',
	},
	labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
	series: [20, 20, 20, 20, 20],
	responsive: [{
		breakpoint: 480,
		options: {
			chart: {
				width: 200
			},
			legend: {
				position: 'bottom'
			}
		}
	}],
	stroke: {
		width: 0,
	},
	fill: {
		type: 'gradient',
		gradient: {
			shadeIntensity: 1,
			inverseColors: false,
			opacityFrom: 1,
			opacityTo: 1,	
			stops: [70, 100]
		}
	},
	colors: ['#27336f', '#3a4ca2', '#4b61cc', '#5871ec', '#7c90ec', '#bec9fb'],
}
var chart = new ApexCharts(
	document.querySelector("#basic-donut-graph-gradient"),
	options
);
chart.render();