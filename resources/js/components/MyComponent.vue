<template>
    <div>
      <CreateComponent ></CreateComponent>
      <IndexComponent ref="index" ></IndexComponent>             
    </div>                
</template>

<script>
import axios from "axios";
import CreateComponent from "./CreateComponent";
import IndexComponent  from "./IndexComponent";
export default{
    name: "MyComponent",
    
    mounted(){
      
    },
    
   
   methods:{      
    },    
      
    components:{
      CreateComponent,
      IndexComponent,  
    }

}


</script>
<style scoped>
</style>