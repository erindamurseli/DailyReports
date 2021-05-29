<template>
<div>


  <div class="text-black bg-whitee">
   
    <div class="px-2 py-4 ">
        <!-- <table class="w-full text-md bg-white shadow-md rounded mb-4 ">
            <tbody>
                <tr class="border ">
                    <th class="text-left p-2  border px-2">Prioriteti</th>
                    <th class="text-left p-2 border px-2">LlDoc</th>
                    <th class="text-left p-2 px-2">LlojiDet</th>
                     <th class="text-left p-2 px-2">Detyruesi</th>
                     
                    <th class="text-left border p-2 px-2">Idetyruari</th>
                    <th class="text-left border p-2 px-2">KNP</th>
                    <th class="text-left border p-2 px-2">	Titulli</th> 
                  <th class="text-left p-2  border px-2">Pershkrimi</th> 
                   <th class="text-left p-2  border px-2 ">	KomentiPnt</th>  
                   <th class="text-left p-2  border  px-2">KomentiMng</th>
                  <th class="text-left p-2  border px-2">	v</th>
                    <th class="text-left p-3 px-2">	Prog_PNT</th>   

                   <th class="text-left p-2   border px-2">Prog_adm</th>
                    <th class="text-left p-2  border px-2">		Kryer</th>
                     <th class="text-left p-2  border px-2">DataKryer</th>
                    <th class="text-left p-2  border px-2">	DataCaktuar</th>
                    <th class="text-left p-2  border px-2">		Sektori</th>  



               
                </tr>
                <tr class="border hover:bg-orange-100 bg-gray-100 " v-for="test in data" :key="test.id">
                   <td class="p-2 border  px-2">  {{test.Prioriteti}} </td>
                    <td class="p-2 border px-2">  {{test.LlDoc}} </td>
                     <td class="p-2 border px-2"> {{test.LlojiDet}} </td>
                      <td class="p-2 border px-2">   {{test.Detyruesi}} </td>
                       <td class="p-2  border px-2">  {{test.iDetyruari}} </td>
                        <td class="p-2 border px-2">{{test.KNP}} </td>
                     <td class="p-2  border px-2">  {{test.Titulli}} </td> 
                    <td class="p-2  border px-2">  {{test.Pershkrimi}} </td>   
            
             <td class="p-2 px-2  border" >  <span v-html="test.KomentiPnt"></span> </td>
                     <td class="p-3 px-2  border">   {{test.KomentiMng}} </td>
                       <td class="p-3 px-2  border">  {{test.v}} </td>
                        <td class="p-3 px-2  border">{{test.Prog_PNT}} </td>    
                       

                              <td class="p-3 px-2  border">  {{test.Prog_adm}} </td>
                    <td class="p-3 px-2  border">  {{test.Kryer}} </td>
                     <td class="p-3 px-2  border"> {{test.DataKryer}} </td>
                      <td class="p-3 px-2 border">   {{test.DataCaktuar}} </td>
                       <td class="p-3 px-2 border">  {{test.Sektori}} </td>
                      
                  
                   
                </tr>
              
            </tbody>
        </table> -->



            <div class="px-2 py-2 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out">
        <div class="mt-1 mb-2 flex items-center justify-between">
        </div>
        <div class="pt-0">
            <div class="container mx-auto px-4 sm:px-2">

 <!-- <a
          target="_blank"
          class="bg-green border   text-white font-bold py-1 px-2 rounded"
          :href="'http://127.0.0.1:8000/download/' "
          >EksportoNeExcel</a
        >
         -->

    
        <a 
          target="_blank"
          class="bg-green ml-0  text-white   text-xs px-4  p-1"
          :href="`http://127.0.0.1:8000/test/${this.prioriteti}` "
          >PRIORITETI </a>
          
         
           
          
    <a 
          target="_blank"
          class="bg-green  ml-5 text-white px-4 text-xs p-1"
          :href="`http://127.0.0.1:8000/lldoc/${this.LlDoc}` "
          >LLDOC
          </a> 
          
             <a 
          target="_blank"
          class="bg-green ml-6 text-white text-xs  px-4  p-1"
          :href="`http://127.0.0.1:8000/llojidet/${this.LlojiDet}` "
          >LLOJIDET
          </a> 

         <a 
          target="_blank"
          class="bg-green  ml-3 text-white  text-xs  px-4 p-1"
          :href="`http://127.0.0.1:8000/detyruesi/${this.Detyruesi}` "
          >DETYRUESI
          </a> 
            <a 
          target="_blank"
          class="bg-green  ml-2 text-white  text-xs  px-4 p-1"
          :href="`http://127.0.0.1:8000/idetyruari/${this.iDetyruari}` "
          >IDETYRUARI
          </a> 
           <a 
          target="_blank"
          class="bg-green  ml-4  text-white text-xs px-4  p-1"
          :href="`http://127.0.0.1:8000/knp/${this.KNP}` "
          >KNP
          </a> 

            <a 
          target="_blank"
          class="bg-green   text-white text-xs  ml-8 px-4 p-1"
          :href="`http://127.0.0.1:8000/titulli/${this.Titulli}` "
          >TITULLI
          </a> 


              <a 
          target="_blank"
          class="bg-green  ml-10 text-white text-xs  px-4  p-1"
          :href="`http://127.0.0.1:8000/v/${this.v}` "
          >V
          </a> 
              <a 
          target="_blank"
          class="bg-green ml-9 text-white text-xs  px-4  p-1"
          :href="`http://127.0.0.1:8000/prog_pnt/${this.Prog_PNT}` "
          >PROG_PNT
          </a> 

              <a 
          target="_blank"
          class="bg-green  ml-3 text-white text-xs   px-4 p-1"
          :href="`http://127.0.0.1:8000/prog_adm/${this.Prog_adm}` "
          >Prog_adm
          </a> 

              <a 
          target="_blank"
          class="bg-green ml-4 text-white text-xs   px-4  p-1"
          :href="`http://127.0.0.1:8000/kryer/${this.Kryer}` "
          >Kryer
          </a> 
         
   <a 
          target="_blank"
          class="bg-green ml-8 text-white text-xs  px-4  p-1"
          :href="`http://127.0.0.1:8000/datakryer/${this.DataKryer}` "
          >DataKryer
          </a> 
   <a 
          target="_blank"
          class="bg-green ml-2 text-white text-xs px-4 p-1"
          :href="`http://127.0.0.1:8000/datacaktuar/${this.DataCaktuar}` "
          >DataCaktuar
          </a> 

           <a 
          target="_blank"
          class="bg-green ml-3  text-white text-xs  px-4  p-1"
          :href="`http://127.0.0.1:8000/sektori/${this.Sektori}` "
          >Sektori
          </a> 
  
            
          
<br>
          
        

                      <input type="text" class="  w-24   bg-grayy " name="Prioriteti" id="Prioriteti" v-model="prioriteti">
                     <input type="text" class="mt-3  w-24 bg-grayy " name="LlDoc" id="LlDoc" v-model="LlDoc">
       
                     <input type="text" class="mt-3 w-24 bg-grayy " name="LlojiDet" id="LlojiDet" v-model="LlojiDet">
                     <input type="text" class="mt-3  w-24 bg-grayy " name="Detyruesi" id="Detyruesi" v-model="Detyruesi">
                     <input type="text" class="mt-3 w-24 bg-grayy " name="iDetyruari" id="iDetyruari" v-model="iDetyruari">
                     <input type="text" class="mt-3  w-24  bg-grayy " name="KNP" id="KNP" v-model="KNP">
                     <input type="text" class="mt-3  w-24  bg-grayy " name="Titulli" id="Titulli" v-model="Titulli">
                     <input type="text" class="mt-3  w-24 bg-grayy " name="v" id="v" v-model="v">
                     <input type="text" class="mt-3 w-24 bg-grayy " name="Prog_PNT" id="Prog_PNT" v-model="Prog_PNT">
                     <input type="text" class="mt-3 w-24 bg-grayy " name="Prog_adm" id="Prog_adm" v-model="Prog_adm">
                       <input type="text" class="mt-3 w-24 bg-grayy " name="Kryer" id="Kryer" v-model="Kryer">
         <input type="text" class="mt-3 w-24 bg-grayy " name="DataKryer" id="DataKryer" v-model="DataKryer">
       <input type="text" class="mt-3 w-24 bg-grayy " name="DataCaktuar" id="DataCaktuar" v-model="DataCaktuar">
 <input type="text" class="mt-3 w-24 bg-grayy " name="Sektori" id="Sektori" v-model="Sektori">


         
                          


   <div class="-mx-4 sm:-mx-2 px-4 sm:px-2 overflow-auto h-auto">
   <div class="inline-block min-w-full rounded-lg">
                            <div class="">
                                <div>
                                  
                                    <div class="flex flex-col py-4 font-semibold  mt-4"> 
                                        <div class="align-middle inline-block min-w-full overflow-y-auto h-screen">
                                            <table class="min-w-full border">
                                     <!-- <input type="text" name="Prioriteti" id="Prioriteti" v-model="prioriteti"> -->
                                                <thead>
                                                  <!-- <input type="text" name="Prioriteti" id="Prioriteti" v-model="prioriteti"> -->
                                              
                                                    <tr>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green text-left text-xs font-semibold text-gray-100 uppercase ">Prioriteti</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green text-left text-xs font-semibold text-gray-100 uppercase ">LlDoc</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green text-left text-xs font-semibold text-gray-100 uppercase ">LlojiDet</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">Detyruesi</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">Idetyruari</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">KNP</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">Titulli</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">Pershkrimi</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">KomentiPnt</th>
                                                       
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase " >KomentiMng</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">v</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">Prog_PNT</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green text-left text-xs font-semibold text-gray-100 uppercase ">Prog_adm</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">Kryer</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green text-left text-xs font-semibold text-gray-100 uppercase ">DataKryer</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">DataCaktuar</th>
                                                        <th class="px-2 py-2 border-b-2 border-gray-200 bg-green  text-left text-xs font-semibold text-gray-100 uppercase ">Sektori</th>
                         
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                        <tr class="bg-white border " v-for="test in data" :key="test.id">
                                                        <td class="px-1 py-1 border text-xs text-gray-900 "> {{test.Prioriteti}}</td>
                                                        <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.LlDoc}}</td>
                                                        <td class="px-1 py-1 border text-xs text-gray-900 "> {{test.LlojiDet}}</td>
                                                        <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.Detyruesi}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 "> {{test.iDetyruari}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.KNP}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 "> {{test.Titulli}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.Pershkrimi}}</td>
                                                         <td class="px-1 py-4 border text-xs text-gray-900 "><span v-html="test.KomentiPnt"></span> </td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.KomentiMng}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 "> {{test.v}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.Prog_PNT}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 "> {{test.Prog_adm}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.Kryer}}</td>
                                                          <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.DataKryer}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 "> {{test.DataCaktuar}}</td>
                                                         <td class="px-1 py-1 border text-xs text-gray-900 ">{{test.Sektori}}</td>
                                               
                                                    </tr>
                                                </tbody>
                                            </table> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
    
<!-- 
    <tr class="border hover:bg-orange-100 bg-gray-100 " v-for="test in data" :key="test.id">
                   <td class="p-2 border  px-2">  {{test.Prioriteti}} </td>
                    <td class="p-2 border px-2">  {{test.LlDoc}} </td>
                     <td class="p-2 border px-2"> {{test.LlojiDet}} </td>
                      <td class="p-2 border px-2">   {{test.Detyruesi}} </td>
                       <td class="p-2  border px-2">  {{test.iDetyruari}} </td>
                        <td class="p-2 border px-2">{{test.KNP}} </td>
                     <td class="p-2  border px-2">  {{test.Titulli}} </td> 
                    <td class="p-2  border px-2">  {{test.Pershkrimi}} </td>   
            
             <td class="p-2 px-2  border" >  <span v-html="test.KomentiPnt"></span> </td>
                     <td class="p-3 px-2  border">   {{test.KomentiMng}} </td>
                       <td class="p-3 px-2  border">  {{test.v}} </td>
                        <td class="p-3 px-2  border">{{test.Prog_PNT}} </td>    
                       

                              <td class="p-3 px-2  border">  {{test.Prog_adm}} </td>
                    <td class="p-3 px-2  border">  {{test.Kryer}} </td>

                     <td class="p-3 px-2  border"> {{test.DataKryer}} </td>
                      <td class="p-3 px-2 border">   {{test.DataCaktuar}} </td>
                       <td class="p-3 px-2 border">  {{test.Sektori}} </td>
  -->





    </div>
</div>
    </div>
</div>
  
    <!-- <div>
      <table class="min-w-full table-auto">
        <thead class="justify-between">
          <tr class="bg-gray-800">
            <th class="px-16 py-2">
              <span class="text-gray-300">Prioriteti</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">LlDoc</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">LlojiDet</span>
            </th>
            <th class="px-16 py-2">
              <span class="text-gray-300">Detyruesi</span>
            </th>

            <th class="px-16 py-2">
              <span class="text-gray-300">iDetyruari</span>
            </th>

            <th class="px-16 py-2">
              <span class="text-gray-300">KNP</span>
            </th>
          </tr>
        </thead>
        <tbody class="bg-gray-200">
          <tr class="bg-white border-4 border-gray-200" v-for="test in data" :key="test.id">
            <td class="px-16 py-2 text-center">
                {{test.Prioriteti}}
            </td>
            <td class="px-16 py-2 text-center">
              {{test.LlDoc}}
            </td>
            <td class="px-16 py-2 text-center">
              {{test.LlojiDet}}
            </td>
            <td class="px-16 py-2 text-center">
              {{test.Detyruesi}}
            </td>
            <td class="px-16 py-2 text-center">
              {{test.iDetyruari}}
            </td>

            <td class="px-16 py-2 text-center">
             {{test.KNP}}
            </td>
          </tr>
          
        </tbody>
      </table>
    </div> -->
</div>
</template>

<script>
import axios from "axios";
export default {


    data() {
        return {
            
			data:[],
      prioriteti: "",
      LlDoc: "",
      LlojiDet:"",
      Detyruesi:"",
      iDetyruari:"",
      KNP:"",
      Titulli:"",
      // Pershkrimi:"",
      v:"",
      Prog_PNT:"",
      Prog_adm:"",
      Kryer:"",
      DataKryer:"",
      DataCaktuar:"",
      Sektori:"",

        }
    },

    computed: {
  	strippedHtml() {
        let regex = /(<([^>]+)>)/ig;
        before_text = "text1 <br> text2 <a href = 'www.data.com' id = 'data'>text3</a> text4"

after_text = RemoveTags(before_text)
	return this.data.KomentiPnt.content.rendered.replace(regex, "");
    }
},

    created() 
	{
	   this.getRaportet();
	},

    methods:{

        getRaportet() 
		{
		
			axios.get('api/get-raportet-ditore')
				.then((response) => {
					this.data = response.data;
				});


		},	
        RDPrioriteti() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.Prioriteti}`)
				.then((response) => {
					this.data = response.data;
				});


		},

     LlDoc() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.LlDoc}`)
				.then((response) => {
					this.data = response.data;
				});


		},

      LlojiDet() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.LlojiDet}`)
				.then((response) => {
					this.data = response.data;
				});


		},

    

     Detyruesi() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.Detyruesi}`)
				.then((response) => {
					this.data = response.data;
				});


		},


      iDetyruari() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.iDetyruari}`)
				.then((response) => {
					this.data = response.data;
				});


		},
    
    KNP() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.KNP}`)
				.then((response) => {
					this.data = response.data;
				});


		},

      Titulli() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.Titulli}`)
				.then((response) => {
					this.data = response.data;
				});


		},

    
       v() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.v}`)
				.then((response) => {
					this.data = response.data;
				});


		},


       Prog_PNT() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.Prog_PNT}`)
				.then((response) => {
					this.data = response.data;
				});


		},
    

       Prog_adm() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.Prog_adm}`)
				.then((response) => {
					this.data = response.data;
				});


		},


        Kryer() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.Kryer}`)
				.then((response) => {
					this.data = response.data;
				});


		},
   

        DataKryer() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.DataKryer}`)
				.then((response) => {
					this.data = response.data;
				});


		},
   

        DataCaktuar() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.DataCaktuar}`)
				.then((response) => {
					this.data = response.data;
				});


		},

       Sektori() 
		{
		
			axios.get(`api/get-raportet-ditore/${this.Sektori}`)
				.then((response) => {
					this.data = response.data;
				});


		},


    

    }


}
</script>

