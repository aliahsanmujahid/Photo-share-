/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



Vue.component('pagination', require('./components/PaginationComponenet.vue').default);
Vue.component('avatar', require('./components/AvatarComponent.vue').default);
Vue.component('bg', require('./components/BackgroundPictureComponent.vue').default);

Vue.component('follow', require('./components/FollowComponent.vue').default);

Vue.component('upload', require('./components/UploadComponent.vue').default);

Vue.component('edit', require('./components/EditComponent.vue').default);

Vue.component('album', require('./components/AlbumComponent.vue').default);
Vue.component('index', require('./components/IndexComponent.vue').default);





const app = new Vue({
    el: '#app',
});
