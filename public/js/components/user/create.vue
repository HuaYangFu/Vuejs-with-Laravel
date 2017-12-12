<template>
  <div class="container">
      <form v-on:submit.prevent="createUser">
        <h2>Create User</h2>
        <div class="form-group">
          <label for="Name">Name:</label>
          <input class="form-control" v-model="name" id="Name" placeholder="Enter name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>
</template>

<script>
module.exports = {
  data () {
      name:''
  },
  methods: {
    createUser: function() {
      axios.post('/api/users',{
          name: this.name,
      }).then(response => {
        console.log(this.user.name)
      })
      router.push('/');
    },
  }
}
</script>