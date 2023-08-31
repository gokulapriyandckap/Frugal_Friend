
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'doughnut',
  data: {
      labels: [
          'HTML',
          'CSS',
          'JS',
          'PHP',
          'React',
          'Laravel'
        ],
        datasets: [{
          label: 'level-learned',
          data: [20.6, 10.6, 7.6,16.6,16.6,16.6],
          backgroundColor: [
            '#6671FA',
            '#FA0079',
            '#008EFA',
            '#0DFA1E',
            '#FD6F0D',
            '#E3D50B'
          ],
          hoverOffset: 15
        }]
  }
});

window.addEventListener("load", function () {
  const options = {
    colors: ["#F92828", "#F9A828"],
    series: [
      {
        name: "Organic",
        color: "#F92828",
        data: [
          { x: "Jan", y: 231 },
          { x: "Feb", y: 122 },
          { x: "Mar", y: 63 },
          { x: "Apr", y: 421 },
          { x: "May", y: 122 },
          { x: "Jun", y: 323 },
          { x: "Jul", y: 123 },
          { x: "Aug", y: 63 },
          { x: "Sep", y: 421 },
          { x: "Oct", y: 122 },
          { x: "Nov", y: 323 },
          { x: "Dec", y: 123 },
        ],
      },
      {
        name: "Social media",
        color: "#F9A828",
        data: [
          { x: "Jan", y: 232 },
          { x: "Feb", y: 113 },
          { x: "Mar", y: 341 },
          { x: "Apr", y: 224 },
          { x: "May", y: 522 },
          { x: "Sat", y: 411 },
          { x: "Sun", y: 461 },
          { x: "Wed", y: 341 },
          { x: "Thu", y: 224 },
          { x: "Fri", y: 522 },
          { x: "Sat", y: 411 },
          { x: "Sun", y: 461 },
        ],
      },
    ],
    chart: {
      type: "bar",
      height: "220px",
      width:"600px",
      fontFamily: "Inter, sans-serif",
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "60%",
        borderRadiusApplication: "end",
        borderRadius: 8,
      },
    },
    tooltip: {
      shared: true,
      intersect: false,
      style: {
        fontFamily: "Inter, sans-serif",
      },
    },
    states: {
      hover: {
        filter: {
          type: "darken",
          value: 1,
        },
      },
    },
    stroke: {
      show: true,
      width: 0,
      colors: ["transparent"],
    },
    grid: {
      show: false,
      strokeDashArray: 4,
      padding: {
        left: 2,
        right: 2,
        top: -14
      },
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: false,
    },
    xaxis: {
      floating: false,
      labels: {
        show: true,
        style: {
          fontFamily: "Inter, sans-serif",
          cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
        }
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
    },
    yaxis: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
  }

  if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("column-chart"), options);
    chart.render();
  }
});