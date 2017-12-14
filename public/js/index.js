var router = new VueRouter({
  routes: [
    { path: '/', component: httpVueLoader('js/components/user/index.vue') },
    { path: '/create', component: httpVueLoader('js/components/user/create.vue') },
    { path: '/delete', component: httpVueLoader('js/components/user/delete.vue') },
    { path: '/edit/:id', component: httpVueLoader('js/components/user/edit.vue') },
  ],
});

var vm = new Vue({
	el: '#app',
	router:router,
	components: {
		'myfooter'   : httpVueLoader('js/components/footer.vue'),
	  'myheader'   : httpVueLoader('js/components/header.vue')
	}
});