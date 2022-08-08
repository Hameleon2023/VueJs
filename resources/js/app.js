// Подключаем Vue
import Vue from 'vue'
// Подключение других компонентов
import MyComponent from "./components/MyComponent";


require('./bootstrap');

// Сoздаем объект на основе класса Vue
const app= new Vue({
    el:'#app',    
    components:{
        MyComponent
    }
})
