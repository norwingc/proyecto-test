<template>
	<section>
		<form-people />
		<table-people :all_people="all_people" />
	</section>
</template>

<script>
import TablePeople from './Table'
import FormPeople from './Form'
export default {
	props: ['people'],
	data(){
		return{
			all_people: this.people
		}
	},
	components: {
		TablePeople,
		FormPeople
	}
}
</script>
