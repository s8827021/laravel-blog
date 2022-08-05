<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        <label class="typo__label">Select with search</label>
                        <Multiselect v-model="modellsits" :options="modellsits" custom-label="nameWithLang"
                                     placeholder="Select one"
                                     label="name" track-by="name"></Multiselect>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Multiselect from 'vue-multiselect'

export default {
    components: {
        Multiselect
    },
    data() {
        return {
            value: {},
            modellsits: []
        }
    },
    mounted() {
        fetch('http://192.168.99.59:9000/api/models')
            .then(res => res.json())
            .then(data => {
                this.modellsits = data;
            })
    },
    methods: {
        nameWithLang({name}) {
            return `${name}`
        }
    }
}
</script>
