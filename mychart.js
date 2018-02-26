var chart;

            var chartData = [
                {
                    "company": "Accenture",
                    "visits": 82,
                    "color": "#FF0F00"
                },
                {
                    "company": "Dell",
                    "visits": 42,
                    "color": "#FF6600"
                },
                {
                    "company": "JP Morgan",
                    "visits": 22,
                    "color": "#FF9E01"
                },
                {
                    "company": "Infosys",
                    "visits": 102,
                    "color": "#FCD202"
                },
                {
                    "company": "others",
                    "visits": 11,
                    "color": "#F8FF01"
                },
            ];

            var pieData = [
                {
                    "status": "Placed",
                    "value": 72,
                    "color": "#0F609F"
                },
                {
                    "status": "Not placed",
                    "value": 8,
                    "color": "#0F66F0"
                },
                {
                    "status": "Higher studies",
                    "value": 20,
                    "color": "#0F9EF1"
                }
            ];

            
            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "company";
                chart.startDuration = 1;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.labelRotation = 45; // this line makes category values to be rotated
                categoryAxis.gridAlpha = 0;
                categoryAxis.fillAlpha = 1;
                categoryAxis.fillColor = "#FAFAFA";
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.dashLength = 5;
                valueAxis.title = "No of placements per company";
                valueAxis.axisAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "visits";
                graph.colorField = "color";
                graph.balloonText = "<b>[[category]]: [[value]]</b>";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";

                // WRITE
                chart.write("chartdiv");


                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = pieData;
                chart.titleField = "status";
                chart.valueField = "value";
                chart.colorField = "color";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
                // this makes the chart 3D
                chart.depth3D = 15;
                chart.angle = 30;

                // WRITE
                chart.write("chartdiv2");
            });



          