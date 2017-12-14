<template>
  <div class="container">
      <form class="form-control">
        <h2>Create User</h2>
        <div class="form-group">
          <label for="Name">Name:</label>
          <input class="form-control" v-model="name" id="Name" placeholder="Enter name">
        </div>
        <button v-on:click.prevent="createUser" class="btn btn-default">Submit</button>
      </form>
  </div>
</template>

<script>
module.exports = {
  data () {
    return {
      name:''
    }
  },
  methods: {
    createUser: function() {
      axios.post('/api/users',{
          name: this.name,
      }).then(response => {
        this.$router.push('/');
      }).catch(error => {
          console.log(error)
      });
    },
  }
}
</script>