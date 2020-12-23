<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add new User</div>

                    <div class="card-body">
                        <h3>{{user.email}}</h3>
                        <h3>{{user.password}}</h3>
                        
                        
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input v-model="form.name" type="text" placeholder="Enter Full Name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input v-model="form.email" type="text" placeholder="Enter Email Address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input v-model="form.password" type="text" placeholder="Enter Email Address" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Account Balance</label>
                            <input v-model="form.balance" type="text" placeholder="Enter Email Address" class="form-control">
                        </div>

                         <div class="form-group">
                            <label for="">Total Withdrawals</label>
                            <input v-model="form.withdrawals" type="text" placeholder="Enter Email Address" class="form-control">
                        </div>


                         <div class="form-group">
                            <button @click="newUser()" class="btn btn-primary form-control">Create New User</button>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Vue from 'vue'
import { Form, HasError, AlertError } from 'vform'
 
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

    export default {
         data () {
            return {
            user: {
                email: '',
                password: '',
            },
            // Create a new form instance
            form: new Form({
                name: '',
                email: '',
                balance: '',
                withdraws: '',
                password: '',
                remember: false
            })
            }
        },
          methods: {
            newUser () {
                event.preventDefault();
            // Submit the form via a POST request
            this.form.post('/newuser')
             
                .then(({ data }) => { 
                    this.user.email = 'EMAIL: ' + data.email;
                    this.user.password = 'PASSWORD: ' + this.form.password;
                    alert('Account was succesfully Created. login with the login details you provided.')
                 })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
