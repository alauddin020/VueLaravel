<template>
<div class="row">
    <div class="col-md-6">
    <div class="card">
        <div class="card-header"><h1>Edit User Information</h1></div>
        <div class="card-body">
                    <form @submit.prevent="updatePost">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control" v-model="user.name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control" v-model="user.email">
                                </div>
                            </div>
                        </div><br />
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <router-link to="/" class="btn btn-primary" role="button">Back</router-link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                user: {}
            }
        },
        created() {
            let url = `${this.$route.params.id}`;
            //console.log(url);
            this.axios.get('/api/user/'+url+'/edit').then((response) => {
                this.user = response.data;
                //console.log(response.data);
            });
        },
        methods: {
            updatePost() {
                let uri = `${this.$route.params.id}`;
                 //console.log(uri);
                this.axios.put('/api/user/'+uri,this.user).then((response) => {
                    this.$router.push({name: 'home'});
                });
            }
        }
    }
</script>
