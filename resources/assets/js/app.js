
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


import AuthorizedClients from './components/passport/AuthorizedClients.vue';
import Clients from './components/passport/Clients.vue';
import PersonalAccessToken from './components/passport/PersonalAccessTokens.vue'

Vue.component('authorized-clients',AuthorizedClients);
Vue.component('clients',Clients);
Vue.component('personal-access-token',PersonalAccessToken);

const app = new Vue({
    el: '#root'
});
