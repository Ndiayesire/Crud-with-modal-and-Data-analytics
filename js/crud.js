window.onload = function () {

  var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    exportEnabled: true,
    animationEnabled: true,
    title: {
      text: "Repartition des clients selon la profession"
    },
    data: [{
      type: "pie",
      startAngle: 25,
      toolTipContent: "<b>{label}</b>: {y}%",
      showInLegend: "true",
      legendText: "{label}",
      indexLabelFontSize: 16,
      indexLabel: "{label} - {y}%",
      dataPoints: [
        { y: 51.08, label: "Etudiants" },
        { y: 27.34, label: "Banquier" },
        { y: 10.62, label: "Eleves" },
        { y: 5.02, label: "Docteur" },
        { y: 4.07, label: "Chauffer" },
        { y: 1.22, label: "Operateur" },
        { y: 0.44, label: "Autres" }
      ]
    }]
  });
  chart.render();

}



