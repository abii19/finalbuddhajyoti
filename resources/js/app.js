/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

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
Vue.component('create-blog', require('./components/Blog/CreateBlogComponent.vue').default);
Vue.component('notice-event', require('./components/Notice-Event/CreateNoticeEventComponent.vue').default);
Vue.component('setting-setup', require('./components/Blog/SettingSetupComponent.vue').default);
Vue.component('view-teacher', require('./components/Blog/ViewTeacherComponent.vue').default);
Vue.component('view-all-blog', require('./components/Blog/EditBlogComponent.vue').default);
Vue.component('create-testemonial', require('./components/Testemonial/CreateFrontTestemonial.vue').default);
Vue.component('view-testemonial', require('./components/Testemonial/ViewTestemonialComponent').default);
Vue.component('add-front-pic', require('./components/Front-Pic/ForntPicComponent').default);


//Website
Vue.component('upcoming-events', require('./components/Website/UpcomingEvents.vue').default);
Vue.component('news-events', require('./components/Website/RecentNewsEvents.vue').default);
Vue.component('testemonial', require('./components/Website/TestemonialComponent').default);

Vue.component('event-desk', require('./components/Website/index.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
