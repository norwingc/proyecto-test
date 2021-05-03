<template>
	<div>
		<h1 class="my-5">People</h1>
		<form class="form" @submit.prevent="save">
			<div class="form-group">
				<label for="">Full Name</label>
				<input type="text" v-model="people.full_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Address</label>
				<textarea v-model="people.address" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="">Age</label>
				<input type="number" v-model="people.age" class="form-control">
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-info text-white">Guardar</button>
			</div>
		</form>
	</div>
</template>

<script>
export default {
	data(){
		return{
			people:{
				full_name: '',
				address: '',
				age: ''
			}
		}
	},
	methods:{
		async save(){
			await axios.post(`/People/store`, this.people).then(res => {
				this.$parent.all_people.push(res.data.people)
				alert('Persona Guardada')
				this.clear()
			})
		},
		clear(){
			this.people = {}
		}
	}
}
</script>
