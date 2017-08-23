
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

console.log('Test');
const app = new Vue({
    el: '#app',
    data: {
        test: "myTest",
        cx : 0,
        user: "",
        filter: "",
        url: "/tweets"

    },created() {
        this.user = $('#tuser').val() ;
        this.filter = $('#tfilter').val() ;
    },
    delimiters: ["%[","]%"],
    methods: {
        htag: function (event){

            this.filter = event.target.innerText.replace(/[^A-z0-9]/g,'').trim() ;
        }
    },
    watch: {
        user: function(val, oldVal){
            this.url = "/tweets/" + this.user +"/"+ this.filter;

        },
        filter: function (val, oldVal){
            this.url = "/tweets/" + this.user +"/"+ this.filter;
        }
    }

});
