{{--<template>
    <div>
        <h1>Add User</h1>
        <form @submit.prevent="created" id="formData">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" v-model="user.name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" v-model="user.email">
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Add New</button>
                <router-link to="/" class="btn btn-primary" role="button">Back</router-link>
            </div>
        </form>
    </div>
</template> --}}

<template>
 <div class="row">
  <div class="col-md-6">
    <div class="card">
        <div class="card-header"><h1>Add User</h1></div>
        <div class="card-body">
                    <form @submit.prevent="created" id="formData">
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
                            <button class="btn btn-primary">Add New</button>
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
                user:{
                    name:'',
                    email:''
                }
            }
        },
        methods: {
            created() {
                 var formData = new FormData(document.getElementById("formData"));
                this.axios.post('/api/user',this.user).then((response) => {
                    this.$router.push({name: 'home'});
                    //console.log(response.data)
                });
            }
        }
    }
</script>