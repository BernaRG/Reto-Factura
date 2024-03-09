<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <div class="flex justify-between">
                <div>
                    <svg viewBox="0 0 24 24" fill="none" class="pointer-events-none absolute w-10 ml-7" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8V12L14.5 14.5" stroke="#4661b9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5.60423 5.60423L5.0739 5.0739V5.0739L5.60423 5.60423ZM4.33785 6.87061L3.58786 6.87438C3.58992 7.28564 3.92281 7.61853 4.33408 7.6206L4.33785 6.87061ZM6.87963 7.63339C7.29384 7.63547 7.63131 7.30138 7.63339 6.88717C7.63547 6.47296 7.30138 6.13549 6.88717 6.13341L6.87963 7.63339ZM5.07505 4.32129C5.07296 3.90708 4.7355 3.57298 4.32129 3.57506C3.90708 3.57715 3.57298 3.91462 3.57507 4.32882L5.07505 4.32129ZM3.75 12C3.75 11.5858 3.41421 11.25 3 11.25C2.58579 11.25 2.25 11.5858 2.25 12H3.75ZM16.8755 20.4452C17.2341 20.2378 17.3566 19.779 17.1492 19.4204C16.9418 19.0619 16.483 18.9393 16.1245 19.1468L16.8755 20.4452ZM19.1468 16.1245C18.9393 16.483 19.0619 16.9418 19.4204 17.1492C19.779 17.3566 20.2378 17.2341 20.4452 16.8755L19.1468 16.1245ZM5.14033 5.07126C4.84598 5.36269 4.84361 5.83756 5.13505 6.13191C5.42648 6.42626 5.90134 6.42862 6.19569 6.13719L5.14033 5.07126ZM18.8623 5.13786C15.0421 1.31766 8.86882 1.27898 5.0739 5.0739L6.13456 6.13456C9.33366 2.93545 14.5572 2.95404 17.8017 6.19852L18.8623 5.13786ZM5.0739 5.0739L3.80752 6.34028L4.86818 7.40094L6.13456 6.13456L5.0739 5.0739ZM4.33408 7.6206L6.87963 7.63339L6.88717 6.13341L4.34162 6.12062L4.33408 7.6206ZM5.08784 6.86684L5.07505 4.32129L3.57507 4.32882L3.58786 6.87438L5.08784 6.86684ZM12 3.75C16.5563 3.75 20.25 7.44365 20.25 12H21.75C21.75 6.61522 17.3848 2.25 12 2.25V3.75ZM12 20.25C7.44365 20.25 3.75 16.5563 3.75 12H2.25C2.25 17.3848 6.61522 21.75 12 21.75V20.25ZM16.1245 19.1468C14.9118 19.8483 13.5039 20.25 12 20.25V21.75C13.7747 21.75 15.4407 21.2752 16.8755 20.4452L16.1245 19.1468ZM20.25 12C20.25 13.5039 19.8483 14.9118 19.1468 16.1245L20.4452 16.8755C21.2752 15.4407 21.75 13.7747 21.75 12H20.25ZM6.19569 6.13719C7.68707 4.66059 9.73646 3.75 12 3.75V2.25C9.32542 2.25 6.90113 3.32791 5.14033 5.07126L6.19569 6.13719Z" fill="#4661b9"></path> </g>
                    </svg>
                    <h1 class="ml-20 font-semibold mt-1 text-2xl font-medium text-gray-600">
                        Historial de CFDI
                    </h1>

                    <p class="mt-10 text-gray-500 leading-relaxed">
                    </p>
                </div>
                <div>
                    
                    <a :href="route('createCfdi')" class="mr-10 rounded-lg relative w-36 h-10 cursor-pointer flex items-center border border-blue-800 bg-blue-800 group hover:bg-blue-800 active:bg-blue-800 active:border-blue-800">
                        <span class=" font-semibold text-white ml-5 transform group-hover:translate-x-20 transition-all duration-300">
                            Crear CFDI
                        </span>
                        <span class="absolute right-0 h-full w-7  rounded-lg bg-blue-800 flex items-center justify-center transform group-hover:translate-x-0 group-hover:w-full transition-all duration-300">
                            <svg class="svg w-8 text-white" height="24" width="24" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M5,22H19a1,1,0,0,0,1-1V6.414a1,1,0,0,0-.293-.707L16.293,2.293A1,1,0,0,0,15.586,2H5A1,1,0,0,0,4,3V21A1,1,0,0,0,5,22ZM9,11h2V9a1,1,0,0,1,2,0v2h2a1,1,0,0,1,0,2H13v2a1,1,0,0,1-2,0V13H9a1,1,0,0,1,0-2Z"></path></g></svg>
                        </span>
                    </a>
                    
                </div>
            </div>
            <div class="flex-1  h-10">
                <div class="flex pt-3 justify-end">
                    <div class="rounded-lg bg-green-200  mr-9">
                        <div class="flex w-200">
                        <div class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg border-r border-gray-200 bg-gray-100 p-5">
                            <svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
                            <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                            </svg>
                        </div>
                        <input type="text" class="w-60  bg-white pl-2 text-base font-semibold outline-0" placeholder="CFDI..." id="">
                        <button type="submit"  class="bg-blue-100 p-2 rounded-tr-lg rounded-br-lg text-blue-800 font-semibold hover:bg-blue-200 transition-colors">Buscar</button>
                        </div>
                    </div>
                    </div>
                </div>
            
        </div>

        <div class="bg-gray-200 bg-opacity-25 h-90 overflow-auto">
            <div class="min-w-full divide-y divide-gray-200  lg:overflow-visible pl-5 pr-3 pb-5 ">
                
                <table class="min-w-full lg:w-auto table-auto">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider">
                            Tipo de CFDI
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider">
                            Folio
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider">
                            Serie
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider">
                            Estatus
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-800 uppercase tracking-wider">
                            Opciones
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr v-for="(item,index) in $page.props.response.data" :key="index">
                            
                            <!-- debido a que no estoy recibiendo TipoDocumento de la api, lo siguiente es algo provisional -->
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800" v-if="item.Folio!='R 1'">
                                Factura
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800" v-else>
                                Recibo
                            </td>

                            <td  class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ item.Folio }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ item.Version }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                $ {{  parseFloat(item.Total).toFixed(2) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ item.FechaTimbrado }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap ">
                                <span v-if="item.Status!='enviada'" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    {{ item.Status }}
                                </span>
                                <span v-else class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{ item.Status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="paste-button">
                                    <button class="button">•••</button>
                                    <div class="dropdown-content">
                                        <a id="cancel" href="#">cancelar CFDI</a>
                                        <a id="enviar" href="#">enviar CFDI</a>
                                    </div>
                                </div>
                                <span v-if="$page.props.ind<=index" class="hidden">{{$page.props.ind=index}}</span>
                            </td>
                            
                            
                        </tr>
                    </tbody>
                </table>
                <div class=" flex-1 bg-white">
                    <div class=" flex justify-end h-20 pt-3 pr-5">
                        {{ $page.props.ind+1 }} CFDI's encontrados
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
thead th {
  position: sticky;
  top: 0;
  background: #f3f3f3;
  z-index: 10;
}

.paste-button {
  position: relative;
  display: inline-block;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.button {
  background-color: #ebf8ff; /* bg-blue-100 */
  color: #2c5282; /* text-blue-800 */
  padding: 8px 13px;
  font-size: 15px;
  font-weight: bold;
  
  border-radius: 15px;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  font-size: 13px;
  position: absolute;
  z-index: 1;
  min-width: 200px;
  background-color: #ebf8ff; /* bg-blue-100 */
  border: 2px solid #86afc9;
  border-radius: 0px 15px 15px 15px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  color: #2c5282; /* text-blue-800 */
  padding: 8px 10px;
  text-decoration: none;
  display: block;
  transition: 0.3s;
}

.dropdown-content #cancel:hover {
  background-color: #FED7D7;
  color: #991B1B;
}
.dropdown-content #enviar:hover{
    background-color: #dcfce7;
    color: #276749;
}
.dropdown-content a:focus {
  background-color: #7eafce;
  color: #f0f0f0;
}

.dropdown-content #top:hover {
  border-radius: 0px 13px 0px 0px;
}

.dropdown-content #bottom:hover {
  border-radius: 0px 0px 13px 13px;
}

.paste-button:hover button {
  border-radius: 15px 15px 0px 0px;
}

.paste-button:hover .dropdown-content {
  display: block;

}


</style>
