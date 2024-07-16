<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Sankey Diagram</title>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-sankey.min.js"></script>
    <style type="text/css">      
      html, body, #container { 
        width: 95%; height: 95%; margin: 0; padding: 0; 
      } 
    </style>
  </head>
  <body>  
    <div id="container"></div>
    <script>
      anychart.onDocumentReady(function () {
  
        // add data
        const data = [
          {from: "Normoglycemic_V1", to: "Diabetic_V2", value: 6},
          {from: "Prediabetic_V1", to: "Diabetic_V2", value: 44},
          {from: "Diabetic_V1", to: "Diabetic_V2", value: 79},
        //   {from: "Data_1", to: "Data_2", value: 0},
          {from: "Normoglycemic_V1", to: "Normoglycemic_V2", value: 619},
          {from: "Prediabetic_V1", to: "Normoglycemic_V2", value: 261},
          {from: "Diabetic_V1", to: "Normoglycemic_V2", value: 627},
        //   {from: "Data_1", to: "Normoglycemic_V2", value: 885},
          {from: "Diabetic_V2", to: "Female", value: 45},
          {from: "Diabetic_V2", to: "Male", value: 64},
          {from: "Normoglycemic_V2", to: "Female", value: 425},
          {from: "Normoglycemic_V2", to: "Male", value: 1667},
          {from: "Female", to: "Survived", value: 344},
          {from: "Female", to: "Perished", value: 126},
          {from: "Male", to: "Survived", value: 367},
          {from: "Male", to: "Perished", value: 1364}
        ];


        // const data = [
        //   {from: "Normoglycemic", to: "Data_2", value: 6},
        //   {from: "Prediabetic", to: "Data_2", value: 24},
        //   {from: "Diabetic", to: "Data_2", value: 79},
        //   {from: "Data_1", to: "Data_2", value: 0},
        //   {from: "Normoglycemic", to: "Adult", value: 319},
        //   {from: "Prediabetic", to: "Adult", value: 261},
        //   {from: "Diabetic", to: "Adult", value: 627},
        //   {from: "Data_1", to: "Adult", value: 885},
        //   {from: "Data_2", to: "Female", value: 45},
        //   {from: "Data_2", to: "Male", value: 64},
        //   {from: "Adult", to: "Female", value: 425},
        //   {from: "Adult", to: "Male", value: 1667},
        //   {from: "Female", to: "Survived", value: 344},
        //   {from: "Female", to: "Perished", value: 126},
        //   {from: "Male", to: "Survived", value: 367},
        //   {from: "Male", to: "Perished", value: 1364}
        // ];
  
        // create a sankey diagram instance
        let chart = anychart.sankey();

        // load the data to the sankey diagram instance
        chart.data(data);

        // set the chart's padding
        chart.padding(20, 40);

        // configure a custom color palette
        chart.palette([
          "#f5dc50",
          "#e1a03c",
          "#c87d5a",
          "#fff0c8",
          "#aa96b4",
          "#6e5a7d",
          "#e19196",
          "#419bd2",
          "#46afaa",
          "#5a5050"
        ]);
  
        // customize the nodes:
        // set the width
        chart.nodeWidth("60%");
        // set the padding
        chart.nodePadding(30);
        // customize the labels
        chart.node().normal().labels().fontSize(14);
        chart.node().labels().useHtml(true);
        chart
          .node()
          .labels()
          .format("<span style='font-weight:bold'>{%name}</span><br>{%value}");

        // customize the links
        chart.flow({
          normal: {
            fill: function () {
              return anychart.color.lighten(this.sourceColor, 0.5) + " " + 0.3;
            }
          },
          hovered: {
            fill: function () {
              return this.sourceColor + " " + 0.8;
            }
          }
        });

        // add a title and customize it
        chart
          .title()
          .enabled(true)
          .useHtml(true)
          .text(
            '<span style = "color: #2b2b2b; font-size:20px;">Post GDM participant flow</span>' +
              '<br/><span style="color:#00bfa5; font-size: 16px;">(by category, criteria, something something)</span><br/>'
          );
  
        // set the chart container id
        chart.container("container");

        // draw the chart
        chart.draw();
  
      });
    </script>
  </body>
</html>