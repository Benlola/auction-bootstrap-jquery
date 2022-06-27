require('./bootstrap');
import Vue from 'vue'
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product-new-bid', require('./components/ProductNewBid.vue').default);

const app = new Vue({
    el: '#app'
});
