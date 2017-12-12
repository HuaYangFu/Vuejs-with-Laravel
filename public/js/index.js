var router = new VueRouter({
  routes: [
    { path: '/', component: httpVueLoader('js/components/user/index.vue') },
    { path: '/create', component: httpVueLoader('js/components/user/create.vue') },
    { path: '/delete', component: httpVueLoader('js/components/user/delete.vue') },
    { path: '/edit/:id', component: httpVueLoader('js/components/user/edit.vue') },
  ],
});

new Vue({
	el: '#app',
	router:router,
	template: '<router-view></router-view>',
});

new Vue({
	el: '#foot',
	components: {
      'myfooter'   : httpVueLoader('js/components/footer.vue'),
	}
});

new Vue({
	el: '#head',
	components: {
	  'myheader'   : httpVueLoader('js/components/header.vue'),
	}
});

