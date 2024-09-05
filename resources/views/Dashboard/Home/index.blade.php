<x-Dashboard.Layout.Layout title="الإحصائيات">
    <h3>الإحصائيات</h3>

    <div class="col-md-8">
        <div class="dash-card">
            <h5>الإشتراكات الجديدة</h5>
            <div>
                {{$tenantsThisYearGroupByMonthes}}
                <canvas id="newRegister"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dash-card">
            <div class="calendar m-auto">
                <div class="calendar-body">
                    <span class="month-name">Month</span>
                    <span class="day-name">Day</span>
                    <span class="date-number">00</span>
                    <span class="year">0000</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="dash-card">
            <h5>الزيارات</h5>
            <p>هذا الشهر</p>
            <div>
                {{$visitThisMounthGroupByWeekly}}
                <canvas id="visits"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dash-card">
            <h5>حجز استشارة</h5>
            <div>
                {{$consaltationThisYearGroupByMonthes}}
                <canvas id="bookConsaltation"></canvas>
            </div>
        </div>
    </div>





    <script>
    window.onload = function() {
        // start first chart registers 
        const ctx = document.getElementById('newRegister');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر',
                    'أكتوبر', 'نوفمبر', 'ديسمبر'
                ],
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3, 7, 8, 6, 10, 4, 9],
                    borderWidth: 0,
                    backgroundColor: ['#EDB46E', '#1d2227', '#EDB46E', '#1d2227', '#EDB46E',
                        '#1d2227', '#EDB46E', '#1d2227', '#EDB46E', '#1d2227', '#EDB46E',
                        '#1d2227'
                    ]
                }]
            },
            options: {
                indexAxis: 'x',
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
                                family: 'Zain, sans-serif'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Zain, sans-serif'
                            }
                        }
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                locale: 'ar-EG',
                direction: 'rtl'
            }
        });


        // visits chart
        const visitChart = document.getElementById('visits');

        new Chart(visitChart, {
            type: 'line',
            data: {
                labels: ['الأسبوع الأول', 'الأسبوع الثاني', 'الأسبوع الثالث', 'الأسبوع الرابع',
                    'الأسبوع الخامس'
                ],
                datasets: [{
                    data: [34, 19, 15, 25, 21],
                    borderWidth: 0,
                    borderColor: '#B77C44',
                    backgroundColor: 'rgba(0,0,0,0)',
                    borderWidth: 1,
                    pointBackgroundColor: '#1d2227'
                }]
            },
            options: {
                indexAxis: 'x',
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
                                family: 'Zain, sans-serif'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Zain, sans-serif'
                            }
                        }
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                locale: 'ar-EG',
                direction: 'rtl'
            }
        });

        // book consltation chart
        const bookConsaltation = document.getElementById('bookConsaltation');

        new Chart(bookConsaltation, {
            type: 'pie',
            data: {
                labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر',
                    'أكتوبر', 'نوفمبر', 'ديسمبر'
                ],
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3, 7, 8, 6, 10, 4, 9],
                    borderWidth: 0,
                    backgroundColor: ['#B77C44', '#1d2227', '#B77C44', '#1d2227', '#B77C44',
                        '#1d2227', '#B77C44', '#1d2227', '#B77C44', '#1d2227', '#B77C44',
                        '#1d2227'
                    ]

                }]
            },
            options: {
                indexAxis: 'x',
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
                                family: 'Zain, sans-serif'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Zain, sans-serif'
                            }
                        }
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                locale: 'ar-EG',
                direction: 'rtl'
            }
        });



        // start calender
        const dayNumber = new Date().getDate();
        const year = new Date().getFullYear();
        const dayName = new Date().toLocaleString("ar-EG", {
            weekday: "long"
        });
        const monthName = new Date().toLocaleString("ar-EG", {
            month: "long"
        });

        document.querySelector(".month-name").innerHTML = monthName;
        document.querySelector(".day-name").innerHTML = dayName;
        document.querySelector(".date-number").innerHTML = dayNumber;
        document.querySelector(".year").innerHTML = year;
    };
    </script>
</x-Dashboard.Layout.Layout>