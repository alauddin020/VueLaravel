<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>All User List</strong>
                    <router-link to="/create">Go to Create</router-link>
                   </div>

                    <div class="card-body">
                        <table v-if="users.length>0" class="table table-bordered">
                            <thead class="thead-inverse">
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(user,i) in users" :id="i">
                                <td scope="row">{{i+1}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td>
                                    <router-link :to="{name: 'edit', params: { id: user.id }}" class="btn btn-primary btn-xs">Edit</router-link>
                                    <button @click="del(user.id,i)" class="btn btn-danger btn-xs">Del</button></td>
                            </tr>
                            </tbody>
                        </table>
                        <h4 v-else>No Data Found</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                users: [],
                user :{}
            }
        },
        mounted() {
            this.axios.get('/api/user').then(res => {
                this.users = res.data.alal;
            }).catch(resp=> {
                console.log(resp);
                alert("Could not load companies");
            });

        },
        methods:
        {
            del(id,i){
                this.axios.delete('/api/user/'+id).then((response) => {
                    //this.$router.go(0);
                    this.users.splice(i,1);
                });
            }
        }
    }
</script>
