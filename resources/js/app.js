require('./bootstrap');

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

window.Vue = require('vue');

Vue.use(Vuetify);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//for template doc
// Vue.component('document-template-form', require('./vendor/document-templates/components/DocumentTemplateFormComponent.vue').default);
require('./vendor/document-templates/js/document-templates');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('chat', require('./components/Chat.vue').default);
// Vue.component('private-chat', require('./components/PrivateChat.vue').default);
// Vue.component(
//     'passport-clients',
//     require('./components/passport/Clients.vue').default
// );
//
// Vue.component(
//     'passport-authorized-clients',
//     require('./components/passport/AuthorizedClients.vue').default
// );
//
// Vue.component(
//     'passport-personal-access-tokens',
//     require('./components/passport/PersonalAccessTokens.vue').default
// );

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.onload = function () {
    const app = new Vue ({
        el: '#app',
        vuetify: new Vuetify(),
        components: {
        },
    });
};
