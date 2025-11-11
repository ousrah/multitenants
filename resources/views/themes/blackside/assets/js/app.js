// assets/js/app.js

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';
import collapse from '@alpinejs/collapse';
import Tom from "tom-select";
import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);

Alpine.plugin(collapse)
window.Tom = Tom;
window.Alpine = Alpine;
window.collapse= collapse;

Alpine.plugin(persist);

document.addEventListener('alpine:init', () => {
  Alpine.store('app', {
    // Initialise l'état depuis le localStorage.
    isDarkMode: localStorage.getItem('darkMode') === 'true',
    isSidebarOpen: false,

    toggleSidebar() { this.isSidebarOpen = !this.isSidebarOpen; },

    // Cette fonction est correcte.
    toggleDarkMode() {
      // 1. Inverse la valeur de isDarkMode.
      this.isDarkMode = !this.isDarkMode;
      // 2. Sauvegarde la nouvelle valeur dans le localStorage.
      localStorage.setItem('darkMode', this.isDarkMode);
      // 3. Ajoute ou retire la classe 'dark' sur la balise <html>.
      document.documentElement.classList.toggle('dark', this.isDarkMode);
    }
  });

  Alpine.data('statsByCategory', () => ({
                    items: [{
                            'name': 'Project 1',
                            'percent': '71',
                        },
                        {
                            'name': 'Project 2',
                            'percent': '63',
                        },
                        {
                            'name': 'Project 3',
                            'percent': '92',
                        },
                        {
                            'name': 'Project 4',
                            'percent': '84',
                        },
                    ],
                    currentItem: {
                        'name': 'Project 1',
                        'percent': '71',
                    }
                }));
                  Alpine.data('productOverviewStats', () => ({
                    project: {
                        'completed': 149,
                        'in_progress': 42,
                    }
                }));

});

Alpine.start();



          


            // start::Chart 1
            const labels = [
                'January',
                'February',
                'Mart',
                'April',
                'May',
                'Jun',
                'July'
            ];

            const data_1 = {
                labels: labels,
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            };

            const config_1 = {
                type: 'bar',
                data: data_1,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
            };

            var chart_1 = new Chart(
                document.getElementById('chart_1'),
                config_1
            );

            // end::Chart 1

            // start::Chart 2
            const data_2 = {
                labels: [
                    'Eating',
                    'Drinking',
                    'Sleeping',
                    'Designing',
                    'Coding',
                    'Cycling',
                    'Running'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 90, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: 'My Second Dataset',
                    data: [28, 48, 40, 19, 96, 27, 100],
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }]
            };
            
            const config_2 = {
                type: 'radar',
                data: data_2,
                options: {
                    elements: {
                        line: {
                            borderWidth: 3
                        }
                    }
                },
            };

            var chart_2 = new Chart(
                document.getElementById('chart_2'),
                config_2
            );
