			sgvizler
             .defaultEndpointURL("https://cs.dbpedia.org/sparql")
             .defaultChartFunction("sgvizler.visualization.Table")
             .defaultChartWidth(3000)
             .defaultChartHeight(3000);
      $(document).ready(
          function (){ sgvizler.containerDrawAll(); }
      );