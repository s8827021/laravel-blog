<template>
    <div>
        <!--        <ul>-->
        <!--            <li v-for="item in stops.drinks" :key="item.idDrink">-->
        <!--                {{ item.idDrink }} {{ item.strCategory }} {{ item.strAlcoholic }} {{ item.strGlass }}-->

        <div class="container flex justify-center mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-12 border-b border-gray-200 shadow">
                        <table class="divide-y divide-gray-300" id="dataTable">
                            <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Note
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Script Version
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Model
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Log Path
                                </th>

                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Created Date
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
                                        {{ item.note }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">
                                        {{ item.script_ver }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-500">
                                        {{ item.model }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{ item.log_path }}
                                </td>
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                    {{ item.created_date }}
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
    name: 'App',
    data() {
        return {
            UploadRecords: []
        }
    },
    mounted() {
        fetch('http://192.168.99.59:9000/api/loginfos/0/')
            //fetch('/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json/preview')
            .then(res => res.json())
            .then(data => {
                this.UploadRecords = data;
            })
            .then(dataA => $('#dataTable').DataTable());
    }
}
</script>
