@extends('layouts.app')

@section('page-title','Overview')

@section('content')
    <div class="flex flex-col gap-6">
        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-5 w-full justify-between">
            <div class="w-full md:col-span-2">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-lg font-semibold text-[#343C6A]">My Cards</h2>
                    <h2 class="text-md font-semibold text-[#343C6A] hidden md:block">See All</h2>
                </div>

                <div
                    class="flex overflow-x-auto gap-5 pb-4 hide-scrollbar md:grid md:grid-cols-2 xl:grid-cols-2 md:gap-5 md:overflow-visible md:pb-0">
                    <div
                        class="min-w-[360px] md:min-w-0 flex-none bg-gradient-to-r from-[#4E6FFF] to-[#1A3FFF] text-white rounded-2xl">
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm">Balance</p>
                                    <p class="text-2xl font-bold">$5,756</p>
                                </div>
                                <div class="w-10 h-10 rounded-full flex items-center justify-center">
                                    {!! file_get_contents(public_path('icons/chipcard.svg')) !!}
                                </div>
                            </div>
                            <div class="mt-6 flex justify-between">
                                <div>
                                    <p class="text-xs uppercase opacity-80">Card Holder</p>
                                    <p class="text-sm font-semibold">Eddy Cusuma</p>
                                </div>
                                <div>
                                    <p class="text-xs uppercase opacity-80">Valid Thru</p>
                                    <p class="text-sm font-semibold">12/22</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex justify-between items-center bg-gradient-to-b from-[#4E6FFF] to-[#1A3FFF] h-[72px] rounded-b-2xl px-6">
                            <p class="tracking-widest">3778 •••• •••• 1234</p>
                            <div class="w-12 h-12 rounded-full flex items-center justify-center">
                                {!! file_get_contents(public_path('icons/mastercard.svg')) !!}
                            </div>
                        </div>
                    </div>

                    <div
                        class="min-w-[360px] md:min-w-0 flex-none bg-white text-[#343C6A] rounded-2xl border border-[#E6EFF5]">
                        <div class="p-6">
                            <div class="flex justify-between items-start">
                                <div>
                                    <p class="text-sm">Balance</p>
                                    <p class="text-2xl font-bold">$5,756</p>
                                </div>
                                <div class="w-10 h-10 rounded-full flex items-center justify-center">
                                    {!! file_get_contents(public_path('icons/chipcard-2.svg')) !!}
                                </div>
                            </div>
                            <div class="mt-6 flex justify-between">
                                <div>
                                    <p class="text-xs uppercase opacity-80">Card Holder</p>
                                    <p class="text-sm font-semibold">Eddy Cusuma</p>
                                </div>
                                <div>
                                    <p class="text-xs uppercase opacity-80">Valid Thru</p>
                                    <p class="text-sm font-semibold">12/22</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex justify-between items-center border-t border-[#DFEAF2] h-[72px] rounded-b-2xl px-6">
                            <p class="tracking-widest">3778 •••• •••• 1234</p>
                            <div class="w-12 h-12 rounded-full flex items-center justify-center">
                                {!! file_get_contents(public_path('icons/mastercard.svg')) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:col-span-2 xl:col-span-1 mt-5 md:mt-0">
                <h2 class="text-lg font-semibold text-[#343C6A] mb-3">
                    Recent Transaction</h2>
                <div class="bg-white rounded-2xl p-4 space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-[#FFF5D9] rounded-full flex items-center justify-center">
                                {!! file_get_contents(public_path('icons/wallet.svg')) !!}
                            </div>
                            <div>
                                <p class="text-md">Deposit from my Card</p>
                                <p class="text-sm text-[#718EBF]">28 January 2021</p>
                            </div>
                        </div>
                        <p class="text-md text-red-500">- $850</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-[#E7EDFF] rounded-full flex items-center justify-center">
                                {!! file_get_contents(public_path('icons/paymentpall.svg')) !!}
                            </div>
                            <div>
                                <p class="text-md">Deposit Paypal</p>
                                <p class="text-sm text-[#718EBF]">25 January 2021</p>
                            </div>
                        </div>
                        <p class="text-md text-green-500">+ $2,500</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-[#DCFAF8] rounded-full flex items-center justify-center">
                                {!! file_get_contents(public_path('icons/dollarcoin.svg')) !!}
                            </div>
                            <div>
                                <p class="text-md">Jemi Wilson</p>
                                <p class="text-sm text-[#718EBF]">21 January 2021</p>
                            </div>
                        </div>
                        <p class="text-md text-green-500">+ $5,400</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-2/3 w-full">
                <h2 class="text-lg font-semibold text-[#343C6A] mb-3">Weekly Activity</h2>
                <div class="bg-white rounded-2xl p-4">
                    <canvas id="weeklyActivityChart"></canvas>
                </div>
            </div>

            <div class="md:w-1/3 w-full">
                <h2 class="text-lg font-semibold text-[#343C6A] mb-3">Expense Statistics</h2>
                <div class="bg-white rounded-2xl">
                    <canvas id="expenseStatisticsChart"></canvas>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-1/3 w-full">
                <h2 class="text-lg font-semibold text-[#343C6A] mb-3">Quick Transfer</h2>
                <div class="bg-white rounded-2xl p-8 space-y-4 py-12 flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-6 overflow-x-auto no-scrollbar pr-2">
                            <div class="flex flex-col items-center text-center min-w-[80px]">
                                <img src="{{ asset('images/livia.png') }}" class="w-20 h-20 rounded-full mb-1"
                                     alt="Livia Bator">
                                <p class="text-md font-medium text-[#343C6A]">Livia Bator</p>
                                <p class="text-sm text-[#718EBF]">CEO</p>
                            </div>
                            <div class="flex flex-col items-center text-center min-w-[80px]">
                                <img src="{{ asset('images/randy.png') }}" class="w-20 h-20 rounded-full mb-1"
                                     alt="Randy Press">
                                <p class="text-md font-medium text-[#343C6A]">Randy Press</p>
                                <p class="text-sm text-[#718EBF]">Director</p>
                            </div>
                            <div class="flex flex-col items-center text-center min-w-[80px]">
                                <img src="{{ asset('images/workman.png') }}" class="w-20 h-20 rounded-full mb-1"
                                     alt="Workman">
                                <p class="text-md font-medium text-[#343C6A]">Workman</p>
                                <p class="text-sm text-[#718EBF]">Designer</p>
                            </div>
                        </div>

                        <button
                            class="ml-2 w-12 h-12 rounded-full bg-white flex items-center justify-center shrink-0 shadow-md">
                            {!! file_get_contents(public_path('icons/chevron-right.svg')) !!}
                        </button>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <h2 class="text-md text-[#718EBF]">Write Amount</h2>
                        <div class="relative w-full max-w-xs">
                            <input type="text" placeholder="525.50"
                                   class="w-full bg-white border border-[#E6EFF5] rounded-full pr-24 pl-4 py-2 text-[#343C6A] placeholder:text-[#718EBF]">

                            <button
                                class="absolute right-0 top-0 bottom-0 bg-[#2D60FF] text-white px-4 rounded-full flex items-center gap-2 text-sm">
                                Send
                                {!! file_get_contents(public_path('icons/paperplane.svg')) !!}
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="md:w-2/3 w-full">
                <h2 class="text-lg font-semibold text-[#343C6A] mb-3">Balance History</h2>
                <div class="bg-white rounded-2xl py-6 px-12">
                    <canvas id="balanceHistoryChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        if (window.ChartDataLabels) {
            Chart.register(ChartDataLabels);
        }

        const weeklyEl = document.getElementById('weeklyActivityChart');
        if (weeklyEl) {
            new Chart(weeklyEl.getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
                    datasets: [
                        {
                            label: 'Deposit',
                            data: [230, 110, 260, 370, 220, 240, 310],
                            backgroundColor: '#1814F3',
                            borderRadius: 20,
                            barThickness: 16
                        },
                        {
                            label: 'Withdraw',
                            data: [480, 330, 330, 480, 140, 390, 380],
                            backgroundColor: '#16DBCC',
                            borderRadius: 20,
                            barThickness: 16
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {grid: {display: false}, categoryPercentage: 0.8, barPercentage: 0.1},
                        y: {beginAtZero: true, ticks: {stepSize: 100}, grid: {color: '#F1F1F1'}}
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {usePointStyle: true, color: '#718EBF', boxWidth: 8, boxHeight: 8, padding: 20}
                        },
                        datalabels: {
                            display: false
                        }
                    }
                }
            });
        }

        const expenseEl = document.getElementById('expenseStatisticsChart');
        if (expenseEl) {
            new Chart(expenseEl.getContext('2d'), {
                type: 'pie',
                data: {
                    labels: ['Entertainment', 'Bill Expense', 'Investment', 'Others'],
                    datasets: [{
                        data: [30, 15, 20, 35],
                        backgroundColor: ['#2D365C', '#FF8F0D', '#FF2E63', '#2D60FF'],

                        borderColor: '#FFFFFF',
                        borderWidth: 20,
                    }]
                },
                options: {
                    plugins: {
                        legend: {display: false},
                        datalabels: {
                            color: '#fff',
                            font: {weight: 'bold', size: 12},
                            formatter: (value, ctx) => {
                                let label = ctx.chart.data.labels[ctx.dataIndex];
                                return value + '% ' + label;
                            }
                        }
                    }
                }
            });
        }

        const balanceEl = document.getElementById('balanceHistoryChart');
        if (balanceEl) {
            new Chart(balanceEl.getContext('2d'), {
                type: 'line',
                data: {
                    labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', ''],
                    datasets: [{
                        data: [120, 280, 420, 750, 200, 510, 620, 200],
                        fill: true,
                        tension: 0.4,
                        borderColor: '#1814F3',
                        backgroundColor: (ctx) => {
                            const gradient = ctx.chart.ctx.createLinearGradient(0, 0, 0, 200);
                            gradient.addColorStop(0, 'rgba(24,20,243,0.4)');
                            gradient.addColorStop(1, 'rgba(24,20,243,0.05)');
                            return gradient;
                        },
                        pointRadius: 0
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            grid: {color: '#F1F1F1'},
                            ticks: {color: '#718EBF'}
                        },
                        y: {
                            beginAtZero: true,
                            grid: {color: '#F1F1F1'},
                            ticks: {stepSize: 200, color: '#718EBF'}
                        }
                    },
                    plugins: {
                        legend: {display: false},
                        datalabels: {
                            display: false
                        }
                    }
                }
            });
        }
    </script>
@endpush


