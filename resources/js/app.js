
require('./bootstrap');

import Vue from 'vue'

import PeopleIndex from './components/people/Index.vue'

new Vue({
    el: '#app',
	components: {
		PeopleIndex,
	}
});
