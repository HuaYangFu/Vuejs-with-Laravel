<template>
  <div class="container">
    <p>{{ message  }}</p>
    <p><a class="btn btn-primary" href="#/create">create</a></p>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users" v-bind="user" v-bind:key="user.id">
        <td>{{ user.id  }}</td>
        <td>{{ user.name }}</td>
        <td><a class="btn btn-warning" v-bind:href="'#/edit/'+ user.id">edit</a></td>
        <td><a class="btn btn-danger"  v-on:click="deleteUser(user)">delete</a></td>
      </tr>
    </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="">Previous</a></li>
            <li class="page-item"><a class="page-link" href="">1</a></li>
        <li class="page-item"><a class="page-link" href="">Next</a></li>
      </ul>
    </nav>
  </div>
</template>

<script>
var users = [
  {id:'',name:''},
];
module.exports = {
  data () {
    return {
      message:'',
      users: users
    }
  },
  created(){
    this.fetchUsers();
  },
  methods: {
    fetchUsers: function() {
      axios.get('api/users').then(response => {
        this.users = response.data.data;
      })
    },
    deleteUser: function(user) {
      axios.delete('api/users/'+user.id).then(response => {
      })
      this.$router.push('/');
    },
  }
}
</script>