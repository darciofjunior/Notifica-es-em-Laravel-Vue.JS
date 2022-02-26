require('./bootstrap');
import store from './vuex/store'

window.Vue = require('vue').default;

/**
 * Components
 */

Vue.component('notifications', require('./components/notifications/Notifications').default)
Vue.component('notification', require('./components/notifications/Notification').default)

const app = new Vue({
    store,
    el: '#app',
});
