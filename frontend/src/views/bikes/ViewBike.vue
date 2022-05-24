<template>
    <h1>Big Bikes Info</h1>
   
<div class="card " style="width: 60rem; height:13rem; position:relative;
     left:7%;">  
          <div class="card-header">
                <button class="btn btn-sm bg-success " style="color:white; position:relative; left: 93.5%;" @click="deleteBike"> Delete</button>
                    <button class=" btn btn-sm bg-success" @click="toggleEditor" style= "position:relative; left: -60px;">{{editor.label}}</button>
                      <table class="table table-hover text-center" style="margin-top:20px;">
                            <tr>

                                <th >Model Name</th>
                                <th >RPM</th>
                                <th >Price</th>
                                <th >Color</th>
                               
                            </tr>
                          
                            <tr>
                                <td>{{bike.model_name}}</td>
                                <td>{{bike.rpm}}</td>
                                <td>{{bike.price}}</td>
                                <td>{{bike.color}}</td>
                            </tr>             
                            
                    </table>
             </div>
            <div>
      
            <div class="card " style="width:20rem; position:absolute; top:120%; left:0%; ">
             <div v-if="editor.show">
                  <h3 class="text-center" style="color:dimgray; padding-top:10px; padding-bottom: 10px;">
                      Edit 
                  </h3>
                   <hr>
                  <div class="card-body bg-light">
                 <div>
                      <label for="title">Model Name </label><br>
                      <input type="text" v-model="bike.model_name"  class="w3-input w3-border" ><br>
                   
                      <label for="title">RPM </label><br>
                      <input type="text" v-model="bike.rpm"  class="w3-input w3-border" ><br>
                      
                      <label for="title">Price </label><br>
                      <input type="text" v-model="bike.price"  class="w3-input w3-border" ><br>
                      
                   
                   
                      <label for="title">Color </label><br>
                      <input type="text" v-model="bike.color"  class="w3-input w3-border" ><br>

                     </div>

                     <button class="btn btn-sm btn-success" style="color:white; position:relative; left: 70%;" @click="saveBike">Update</button>
                   </div>
                 </div>
          </div>
        </div>
     </div>

</template>

<script>
export default{
    props:['id'],
  
   data(){
       return{
           bike: {},
           editor: {
               show: false,
               label: "Edit"
           }
       }
   },

   methods: {

       toggleEditor(){
           if(this.editor.show){
               this.editor = {show:false, label:"Edit"}
           }else{
                this.editor = {show:true, label:"Cancel"}
           }
       },
       saveBike(){
                fetch('http://localhost:8000/api/bikes/' + this.bike.id,{
                    method: 'put',
                    headers: {
                        'Content-Type' : "application/json"
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify(this.bike)
                 })
                 .then(res=>res.json())
                 .then(data=>{
                     alert("Updated")

                 })
                 .catch(err => console.log(err))
       },
          deleteBike(){
                 fetch('http://localhost:8000/api/bikes/' + this.bike.id,{
                       method:'delete'
                 })
                 .then(res=>res.json())
                 .then(data=>{
                     alert("Deleted")
                     this.$router.push({
                        name: 'all-bikes'
                     })
                    
                 })
                 .catch(err=>console.log(err))
         }
   },

   mounted(){
       fetch('http://localhost:8000/api/bikes/' + this.id)
       .then(res => res.json())
       .then(data => this.bike = data)
       .then(err => console.log(err))
   }

}

</script>

<style scoped>
 h1{
     color:DarkSlateGray;
     font-weight:normal;
     font-size:35px;
 }

 td{
     color:DarkSlateGray;
 }

</style>