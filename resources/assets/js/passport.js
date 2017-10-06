import Vue from 'vue';

import AuthorizedClients from './components/passport/AuthorizedClients.vue';
import Clients from './components/passport/Clients.vue';
import PersonalAccessToken from './components/passport/PersonalAccessTokens.vue'

Vue.component('authorized-clients',AuthorizedClients);
Vue.component('clients',Clients);
Vue.component('personal-access-token',PersonalAccessToken);

const app = new Vue({

    el:'#root',
    data:{},
    methods:{},


});
