<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stacked Bar Chart with Unique Colors</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="90%" height="30vh"></canvas>
    <script>

const ctx = document.getElementById('myChart');

        // Define a custom color palette with unique colors
        
        var colorPalette = [
            '#dc3545', '#28a745', '#17a2b8', '#ffc107', '#6f42c1', '#7393B3'
        ];


            new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Enrolment (Day-0)', 'FUP-1 (Day 10-28)', 'FUP-2 (6-10 weeks)', 'FUP-3 (6 months)', 'FUP-4 (12-36 months)'],
                datasets: [
                    {
                        label: 'Positive participants',
                        data: [4890, 3169, 2337, 1156, 1308],
                        backgroundColor: colorPalette.slice(0, 5),
                        borderWidth: 1
                    },
                    {
                        label: 'Negative participants',
                        data: [3777, 0, 0, 0, 0],
                        backgroundColor: colorPalette.slice(5),
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                },
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    </script>
</body>
</html>
