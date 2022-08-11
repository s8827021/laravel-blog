<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        <D3BarChart :config="chart_config" :datum="chart_data"></D3BarChart>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<!--<script src={{ asset('js/echarts.min.js') }}></script>-->
<script>
import {D3BarChart} from 'vue-d3-charts';

export default {
    components: {
        D3BarChart,
    },
    data() {
        return {
            chart_data: [
                //...
                {lorem: 1648, ipsum: 9613, dolor: 1390, sit: 9130, year: '2007'},
                {lorem: 2479, ipsum: 6315, dolor: 1560, sit: 6150, year: '2008'},
                {lorem: 3200, ipsum: 12541, dolor: 5421, sit: 2541, year: '2009'},
            ],
            chart_config: {
                key: 'year',
                values: ['lorem', 'ipsum', 'dolor', 'sit'],
                axis: {
                    yTicks: 4
                },
                color: {
                    keys: {
                        lorem: '#F98B3B',
                        ipsum: '#F26643',
                        dolor: '#FF463D',
                        sit: '#C92C39',
                    },
                },
            },
        };
    },
};


</script>
