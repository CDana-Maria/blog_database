/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import Alert from "./components/Alert.vue";
import AddToCartButton from "./components/AddToCartButton.vue";
import Cart from "./components/Cart.vue";
import Checkout from "./components/Checkout.vue";
import FormCheckout from "./components/FormCheckout.vue";
import Navbar from "./components/Navbar.vue";

require('./bootstrap');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('alert', Alert);
Vue.component('add-to-cart-button', AddToCartButton);
Vue.component('Cart', Cart);
Vue.component('checkout', Checkout);
Vue.component('form-checkout', FormCheckout);
Vue.component('navbar', Navbar);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


 const app = new Vue({
    el: '#app',
    data(){
        return {
            cart: []
        }
    },
    methods: {
        addToCart(productId){
            if(!this.isProductAdded(productId)){
                this.cart.push(productId);
                localStorage.setItem('cart', JSON.stringify(this.cart));
            }
        },
        isProductAdded(productId) {
            const productIndex = this.cart.some(product => product.id === productId);
            return productIndex;
        }
    },
    mounted: {

    }
});