<template>
    <div>
        <!--        <ul>-->
        <!--            <li v-for="item in stops.drinks" :key="item.idDrink">-->
        <!--                {{ item.idDrink }} {{ item.strCategory }} {{ item.strAlcoholic }} {{ item.strGlass }}-->

        <div class="container flex justify-center mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-12 border-b border-gray-200 shadow">
                        <table class="divide-y divide-gray-300" id="TestItemdataTable">
                            <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Test Result
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Error Item
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Error Value
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Error Message
                                </th>

                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Test Duration
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Edit
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-500">
                            <tr v-for="item in UploadRecords" :key="item.id" class="whitespace-nowrap">

                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{ item.id }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                        {{ item.test_result }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">
                                        {{ item.error_item }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">
                                        {{ item.error_value }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">
                                        {{ item.error_message }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{ item.test_duration }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#"
                                       class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <a href="#"
                                       class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import "jquery/dist/jquery.min.js";
import "bootstrap/dist/css/bootstrap.min.css";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import axios from "axios";
import $ from "jquery";


export default {
    name: "axios_datatable",
    data() {
        return {
            UploadRecords: []
        };
    },
    // mounted() {
    //     fetch('http://192.168.99.59:9000/db/duttestresults/')
    //         .then(res => res.json())
    //         .then(data => {
    //             this.UploadRecords = data;
    //         })
    //         .then(dataA => $('#TestItemdataTable').DataTable());
    // }
    async created() {
        // GET request using axios with async/await
        await axios.get("http://192.168.99.59:9000/db/duttestresults/")
            .then(resp => {
                this.UploadRecords = resp.data;})
            .then(dataA => $('#TestItemdataTable').DataTable());
    }
}
</script>
