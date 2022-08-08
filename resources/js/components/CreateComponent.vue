<template>
    <div>
      <div class="mb-3 w-25">        
        <input type="text" class="form-control" v-model="name" placeholder="name">
      </div> 
      <div class="mb-3 w-25">
        <input type="number" class="form-control" v-model="age" placeholder="age">
      </div> 
      <div class="mb-3 w-25">
        <input type="text" class="form-control" v-model="job" placeholder="job">
      </div> 
      <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Create" @click.prevent="addPerson">
      </div>      
    </div>
                    
</template>

<script>
import axios from "axios";
export default{
    name: "CreateComponent",
    data(){
      return{
        name:null,
        age:null,
        job:null
      }
    },
    mounted(){              
    },
    
    methods:{
      addPerson(){
       axios.post('/api/people',{name: this.name, age: this.age, job: this.job})
       .then(res=>{
        this.name = null
        this.age = null
        this.job=null
        this.$parent.$refs.index.getPeople()        
        })
      }      
      },
    components:{     
    }    
  }

</script>
<style scoped>
</style>