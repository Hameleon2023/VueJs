<template>
    <div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Job</th>
            <th scope="col">Edit</th>
            <th scope="col" :class = " ! inputVisibility? 'd-none' : '' ">Delete</th> 
          </tr>
        </thead>
        <tbody >
          <template v-for="person in people">          
          <tr :class = "isEdit(person.id) ? 'd-none' : '' ">
            <th scope="row">{{person.id}}</th>
            <td>{{person.name}}</td>
            <td>{{person.age}}</td>
            <td>{{person.job}}</td>
            <td><a href="#"  @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job), hideInput()" class="btn btn-success col-md-8">Edit</a></td>
            <td><a href="#" @click.prevent="deletePersonId(person.id)" :class = " ! inputVisibility? 'd-none' : 'btn btn-danger col-md-6'">Delete</a></td>
          </tr>
          <tr :class = "isEdit(person.id) ? '' : 'd-none' ">
            <th scope="row">{{person.id}}</th>
            <td><input v-model="name" type="text"></td>
            <td><input v-model="age" type="number"></td>
            <td><input v-model="job" type="text"></td>
            <td><a href="#"  @click.prevent="updatePerson(person.id)" class="btn btn-success col-md-8">Update</a></td>
          </tr> 
          </template>
        </tbody>  
      </table>               
    </div>                               
</template>

<script>

import axios from "axios";
export default{
    name: "IndexComponent",
    data(){
      return{ 
        people:null,
        editPersonId: null,
        name:null,
        age: null,
        job:null,
        inputVisibility: true               
      }            
    },

    mounted(){
      this.getPeople()
      
    },

    methods:{
      getPeople(){
        axios.get('/api/people')
        .then(res =>{
          this.people=res.data})
      },
      changeEditPersonId(id,name,age,job){
        this.editPersonId = id,
        this.name=name,
        this.age=age,
        this.job=job
        
      },
      isEdit(id){
        return this.editPersonId === id
      },

      updatePerson(id){
        this.inputVisibility = true;
        this.editPersonId = null
        axios.patch('/api/people/'+ id, {name: this.name, age:this.age, job:this.job} )
        .then(res=>{
          this.getPeople()
        })
      },

      deletePersonId(id){
        axios.delete('/api/people/'+ id)
        .then(res=>{
          this.getPeople()
        })
      },
      hideInput() {
        this.inputVisibility = false;
      }            
  }    
}
</script>
<style scoped>
</style>