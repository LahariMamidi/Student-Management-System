
const xValues = ["Present","Absent"];
const yValues = [85, (100-85)];
const barColors = [
  "#10e141",
  "#ff0e0e"
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Attendance",
      
    }
  }
});
