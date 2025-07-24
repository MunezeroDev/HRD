// Hospital Dashboard Charts JavaScript

document.addEventListener('DOMContentLoaded', function () {
    const admissionsCtx = document.getElementById('admissionsChart').getContext('2d');

    const admissionsChart = new Chart(admissionsCtx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [
                {
                    label: 'Admissions',
                    data: [38, 52, 48, 61, 55, 43, 38],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#3b82f6',
                    pointBorderColor: '#3b82f6',
                    pointRadius: 4,
                    pointHoverRadius: 6
                },
                {
                    label: 'Discharges',
                    data: [38, 41, 45, 52, 48, 40, 35],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#10b981',
                    pointBorderColor: '#10b981',
                    pointRadius: 4,
                    pointHoverRadius: 6
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    align: 'start',
                    labels: {
                        usePointStyle: false,
                        boxWidth: 12,
                        boxHeight: 12,
                        padding: 15,
                        font: {
                            size: 12
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: true,
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        font: {
                            size: 12
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 70,
                    grid: {
                        display: true,
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        stepSize: 10,
                        font: {
                            size: 12
                        }
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            }
        }
    });

    // Chart 2: Department Patient Load (Bar Chart)
    const departmentCtx = document.getElementById('departmentChart').getContext('2d');

    const departmentChart = new Chart(departmentCtx, {
        type: 'bar',
        data: {
            labels: ['Outpatient', 'Inpatient', 'Emergency', 'ICU'],
            datasets: [{
                data: [118, 89, 45, 22],
                backgroundColor: [
                    '#3b82f6',  // Blue for Outpatient
                    '#10b981',  // Green for Inpatient
                    '#f97316',  // Orange for Emergency
                    '#ef4444'   // Red for ICU
                ],
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 12
                        }
                    }
                },
                y: {
                    beginAtZero: true,
                    max: 120,
                    grid: {
                        display: true,
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        stepSize: 20,
                        font: {
                            size: 12
                        }
                    }
                }
            }
        }
    });

    // Optional: Handle dropdown change for time period (if you want to add functionality)
    const timeSelect = document.querySelector('.chart-controls select');
    if (timeSelect) {
        timeSelect.addEventListener('change', function (e) {
            // You can add logic here to update chart data based on selected time period
            console.log('Time period changed to:', e.target.value);
        });
    }
});