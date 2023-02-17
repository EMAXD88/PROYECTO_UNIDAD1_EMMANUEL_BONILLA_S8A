

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard del Administrador</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    h1 {
      text-align: center;
      color: #333;
    }
    h2 {
      margin-top: 50px;
      text-align: center;
      color: #333;
    }
    #chartContainer {
      margin: 50px auto;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <h1>Bienvenido al Dashboard del Administrador</h1>
  <h2>Gráfica de Ventas</h2>
  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
  <!-- Scripts para mostrar la gráfica -->
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script>
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        title: {
          text: "Ventas por Mes",
          fontColor: "#333",
          fontFamily: "Arial, sans-serif",
          fontSize: 24
        },
        data: [{
          type: "column",
          dataPoints: [
            { label: "Enero", y: 10 },
            { label: "Febrero", y: 15 },
            { label: "Marzo", y: 25 },
            { label: "Abril", y: 30 },
            { label: "Mayo", y: 28 }
          ],
          color: "#4caf50"
        }]
      });
      chart.render();
    }
  </script>
</body>
</html>