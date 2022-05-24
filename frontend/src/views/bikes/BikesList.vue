<template>
  <div>
     
    
       <div class="w3-col m3">
           <div class="card" style="width: 17rem; margin-top:43px; position:fixed;">
            <h1 style="color:DarkSlateGray; font-weight:normal; font-size:30px;">Create Bikes</h1>
            <hr>
               <div class="card-body ">
                 <div>
                   <label for="title">Model Name &nbsp;</label><br>
                   <input type="text" v-model="bike.model_name" class="w3-input w3-border" >
                 </div>
                 
                 <div>
                  <label for="title">RPM &nbsp;</label><br>
                  <input type="text" v-model="bike.rpm" class="w3-input w3-border">
                 </div>

                  <div>
                  <label for="title">Price &nbsp;</label><br>
                  <input type="text" v-model="bike.price" class="w3-input w3-border">
                 </div>
                 
                  <div>
                  <label for="title">Color &nbsp;</label>
                  <input type="text" v-model="bike.color" class="w3-input w3-border">
                 </div>
                 
                
                 
                  <button class="btn btn-sm btn-secondary border border-light" @click="submitBike" style="margin-top:30px; margin-left:75px;">Create Bikes</button>
          
          </div>

         </div>
        </div>
     
          <div class="col-md-8  " style="position:absolute; left:31%; top:100px; ">
           <h1 style="color:DarkSlateGray; font-weight:normal; font-size:30px;">List of Big Bikes</h1>
              <table class="table table-striped table-hover">
                   
                <thead class="text-center">
                    <tr>
                        <th >Model Name</th>
                        <th >RPM</th>
                        <th >Price</th>
                        <th >Color</th>
                       
                      
                       
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="bike in bikes" :key="bike.id" class="w3-hover-light-gray" style="cursor:pointer" @click="openBike(bike.id)">
                        <td>{{bike.model_name}}</td>
                        <td>{{bike.rpm}}</td>
                        <td>{{bike.price}}</td>
                        <td>{{bike.color}}</td>
                      
                      
                      
                    </tr>
                </tbody>
            </table>
          </div>
      </div>
 
</template>

<script>
export default {
    data() {
        return {
            bike: {
                id:null,
                model_name:'',
                rpm:'',
                price:'',
                color:''
            },

            bikes:[]
        }
    },
    methods: {
        addBike() {
           
        },
        getData(){
          fetch('http://localhost:8000/api/bikes')
          .then(response=>response.json())
          .then(data=>this.bikes = data)
          .catch(err=>console.log(err) )
        },

         openBike(bikeId) {
            this.$router.push({
                name: 'view-bike',
                params: {
                    id: bikeId
                }
            })
        },
           
         submitBike()  {
               fetch('http://localhost:8000/api/bikes', {
                   method: 'post',
                   headers: {
                       "Content-Type":"application/json"
                   },
                   credentials: 'same-origin',
                  body: JSON.stringify(this.bike)

               })
                    .then(res=>res.json())
                    .then(data=>{
                        this.bikes.unshift(data)
                        this.bike = {}
                    })
                    .catch(err=>console.log(err))

         },


    },

    mounted() {
      this.getData();
    },
}


    


</script>

<style>
</style>