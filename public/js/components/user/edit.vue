<template>
  <div class="container">
      <form class="form-control">
        <h2>Edit User</h2>
        <div class="form-group">
          <label for="Name">Name:</label>
          <input class="form-control" name="name" v-model="user.name" placeholder="Enter name" />
          <input class="form-control" name="id" type="hidden" v-model="user.id" />
        </div>
        <button type="submit" v-on:click.prevent="updateUser" class="btn btn-default">Submit</button>
      </form>
  </div>
</template>

<script>
var user = [
  {id:'',name:''},
];

module.exports = {
  data () {
    return {
      user: user,
    }
  },
  created(){
    this.findUser(this.$route.params.id);
  },
  methods: {
    updateUser: function() {
      axios.put('api/users/'+this.user.id,{
        name:this.user.name
      }).then(response => {
        this.$router.push('/');
      }).catch(error => {
          console.log(error)
      });
    },
    findUser: function(id){
      axios.get('api/users/'+id).then(response => {
        this.user = response.data;
      });
    }
  }
}
</script>