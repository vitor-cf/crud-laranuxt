<template>
    <div>
        
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID PRODUTO
                </th>
                <th scope="col" class="px-6 py-3">
                    NOME PRODUTO
                </th>
                <th scope="col" class="px-6 py-3">
                    DESCRIÇÃO
                </th>
                <th scope="col" class="px-6 py-3">
                    AÇÃO
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"
            >
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ produto[0].id }}
                </th>
                <td class="px-6 py-4">
                    {{ produto[0].name }}
                </td>
                <td class="px-6 py-4">
                    {{ produto[0].desc }}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700"
            >
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ produto[1].id }}
                </th>
                <td class="px-6 py-4">
                    {{ produto[1].name }}
                </td>
                <td class="px-6 py-4">
                    {{ produto[1].desc }}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    
    </div>
</template>
                
                
<script>
import axios from "axios"; 

    export default {
        name:'index',
        data() {
            return {
                produto:[],
            }
        },
        created() {
            this.getProdutos();
        },
        methods: {
            getProdutos() {
                axios
                .get(`http://127.0.0.1:8000/api/exibe`)
                .then((res) => {
                    this.produto = res.data;
                    console.log(res.data);
                })
                .catch((error) => {
                    console.log(error);
                })
            }
        }
    }
                    
</script>        
            
            