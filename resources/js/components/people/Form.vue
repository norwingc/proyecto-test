<template>
	<form @submit.prevent="save()" method="POST" class="form">
		<div class="form-group">
			<label>Full Name</label>
			<input type="text" class="form-control" v-model="person.full_name" required>
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input type="text" class="form-control" v-model="person.phone" required>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</form>
</template>

<script>
export default {
	data(){
		return{
			person: {
				full_name: '',
				phone: ''
			}
		}
	},
	methods:{
		async save(){
			await axios.post(`/People/store`, this.person).then(res => {
				if(res.data.saved){
					this.person = {
						full_name: '',
						phone: ''
					}
					this.$parent.all_people.push(res.data.person)
					alert('Persona guardada')
				}
			})
		}
	}
}
</script>
