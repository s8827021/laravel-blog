<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        <h6>All Station List</h6>
                        <ul>
                            <li v-for="station in stationlists">
                                <label><input type="checkbox" :id="station.name" v-model="station.checked"
                                              value="station.name"> {{ station.name }}</label>
                            </li>
                        </ul>
                        <h6>Station selected</h6>
                        <ul>
                            <li v-for="s in FilterStationSelect">
                                <label v-model="FilterStationSelect"> {{ s.name }}</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            modellsits: [],
            stationlists: []
        }
    },
    mounted() {
        fetch('http://192.168.99.59:9000/api/models')
            .then(res => res.json())
            .then(data => {
                this.modellsits = data;
            });

        fetch('http://192.168.99.59:9000/api/station/1')
            .then(res => res.json())
            .then(data => {
                this.stationlists = data;
                this.AddCheckdProp();
            });
    },
    methods: {
        AddCheckdProp: function () {
            this.stationlists = this.stationlists.map(s => ({...s, checked: false}));
        }
    },
    computed: {
        FilterStationSelect() {
            return this.stationlists.filter((s => s.checked))
        }
    }
}
</script>
