  

    window.onload = function () {
        
        /*Be expert on PHP - Exam 
        ===========================*/
        
            var chart1 = new CanvasJS.Chart("Be-Expert-On-PHP",
            {
                title:{
                    text: "Be expert on PHP - Exam "
                },
                legend: {
                    maxWidth: 350,
                    itemWidth: 120
                },
                data: [
                {
                    type: "pie",
                    showInLegend: true,
                    legendText: "{indexLabel}",
                    dataPoints: [

                        { y: 70, indexLabel: "Correct (70%)" },
                        { y: 30, indexLabel: "Wrong (30%)" },

                    ]
                }
                ]
            });
            chart1.render();
        
         /*Learn Basic C - Exam 
        ===========================*/ 
        
        
        var chart2 = new CanvasJS.Chart("Learn-Basic-C",
            {
                title:{
                    text: "Learn Basic C - Exam"
                },
                legend: {
                    maxWidth: 350,
                    itemWidth: 120
                },
                data: [
                {
                    type: "pie",
                    showInLegend: true,
                    legendText: "{indexLabel}",
                    dataPoints: [

                        { y: 80, indexLabel: "Correct (80%)" },
                        { y: 20, indexLabel: "Wrong (20%)" },

                    ]
                }
                ]
            });
            chart2.render();
    }