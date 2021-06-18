<template>
	<table class="mt-4 table">
		<thead>
			<tr>
				<th>Full Name</th>
				<th>Phone</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="(person, index) in all_people" :key="index">
				<td>{{ person.full_name }}</td>
				<td>{{ person.phone }}</td>
				<td>
					<a :href="`/People/Edit/${person.id}`" class="btn btn-success">Edit</a>
					<a href="#" class="btn btn-danger" @click.prevent="deletePerson(person, index)">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</template>

<script>
export default {
	props: ['all_people'],
	methods:{
		async deletePerson(person, index){
			await axios.delete(`/People/delete/${person.id}`).then(res => {
				if(res.data.deleted){
					this.$parent.all_people.splice(index, 1)
					alert('persona borrada')
				}
			})
		}
	}

}
</script>


