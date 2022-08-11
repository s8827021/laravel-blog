<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        <!--                        <div id="myChart" :style="{width: '600px', height: '300px'}">-->
                        <D3SlopeChart :config="chart_config" :datum="chart_data"></D3SlopeChart>
                        <button @click="addData()">Add</button>
                        <button @click="removeData()">Remove</button>
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<!--<script src={{ asset('js/echarts.min.js') }}></script>-->
<script>
import {D3SlopeChart} from 'vue-d3-charts';

export default {
    components: {
        D3SlopeChart,
    },
    data() {
        return {
            chart_config: {
                key: 'name',
                color: {
                    scheme: 'schemeCategory10'
                },
                transition: {
                    ease: 'easeBounceOut',
                    duration: 1000
                }
            },
            chart_data: [
                {start: 2355, end: 5855, name: "Lorem"},
                {start: 4260, end: 6510, name: "Ipsum"},
                {start: 5029, end: 5138, name: "Dolor"}
            ],
            count: 0
        }
    },
    methods: {
        addData() {
            const start = Math.floor(Math.random() * 20000);
            const end = Math.floor(Math.random() * 20000);
            const name = 'new #' + this.count++;
            this.chart_data.push({start, end, name})
        },
        removeData() {
            if (!this.chart_data.length)
                return;
            const random_index = Math.floor(Math.random() * this.chart_data.length)
            this.chart_data.splice(random_index, 1);
        }
    }
};


</script>
