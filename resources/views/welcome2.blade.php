<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DataTable</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>

<body>

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
                            Name
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Email
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Created_at
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
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            1
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-900">
                                Jon doe
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-500">jhondoe@example.com</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            2021-1-12
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
                    <tr class="bg-gray-50 whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            2
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-900">
                                Jon doe 2
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-500">jhondoe2@example.com</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            2021-1-12
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#"
                               class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="px-4 py-1 text-sm text-red-400 rounded-full">Delete</a>
                        </td>
                    </tr>
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            3
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-900">
                                Jon doe 3
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-500">jhondoe3@example.com</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            2021-1-12
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


                    <tr class="bg-gray-50 whitespace-nowrap">
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            4
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-900">
                                Jon doe 4
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="text-sm text-gray-500">jhondoe4@example.com</div>
                        </td>
                        <td class="px-6 py-4 text-sm text-center text-gray-500">
                            2021-1-12
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#"
                               class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="px-4 py-1 text-sm text-red-400 rounded-full">Delete</a>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dataTable').DataTable();

    });
</script>
</body>
</html>

