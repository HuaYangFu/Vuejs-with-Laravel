<template>
  <div class="container">
      <form v-on:submit.prevent="updateUser">
        <h2>Edit User</h2>
        <div class="form-group">
          <label for="Name">Name:</label>
          <input class="form-control" name="name" id="Name" value="name" placeholder="Enter name">
          <input class="form-control" type="hidden" value="id" name="id">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>
</template>

<script>
var user = {
  id: 1, name: 'Angular'
};

module.exports = {
  data () {
    return {
      user: user,
    }
  },
  methods: {
    updateUser: function(user) {
      axios.put('/').then(response => {
      })
      console.log(this.user.name)
      router.push('/');
    },
  }
}
</script>