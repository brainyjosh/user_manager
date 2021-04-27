<template>
    <div>
          <div class="container-fluid">
       <marquee>
         <h3>
           Congratulations, your account is now active, please contact your accout officer if you have any question.
         </h3>
 
        </marquee>
           <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h2> {{ user.balance }}</h2>

                <p>Balance</p>
              </div>
              <div class="icon">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h2>{{ user.total_withdrawals }}</h2>

                <p>Total Withdrawals</p>
              </div>
              <div class="icon">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>

                <p>Transactions</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>Pending Transactions</p>
              </div>
              <div class="icon">
                <i class="fas fa-history"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

            <div class="row">
                
              <div class="col-lg-6">


            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Owner Details</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <!-- Morris chart - Sales -->
                  <!-- <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                   </div> -->

                   <img src="/images/user.jpg" class="image-top thumbnail" alt="" style="max-width:100%;">

                   <div class="table-responsive">
                            <table
                              class="dbkit-table table table-bordered table-striped table-hover"
                            >
                              <tr class="">
                                <td class="bg-primary">Full Name</td>
                                <td>{{user.name}}</td>
                              </tr>
                              <tr>
                                <td class="bg-primary">Gender</td>
                                <td>{{user.gender}}</td>
                              </tr>
                              <tr>
                                <td class="bg-primary">Date of Birth</td>
                                <td>{{user.dob}}</td>
                              </tr>
                               <tr>
                                <td class="bg-primary">Account Name</td>
                                <td>{{user.account_name}}</td>
                              </tr>

                              <tr>
                                <td class="bg-primary">Account Number</td>
                                <td>{{user.account_number}}</td>
                              </tr>

                              <tr>
                                <td class="bg-primary">Account Type</td>
                                <td>{{user.account_type}}</td>
                              </tr>

                              <tr>
                                <td class="bg-primary">Email</td>
                                <td>{{user.email}}</td>
                              </tr>

                               <tr>
                                <td class="bg-primary">Phone</td>
                                <td>{{user.phone}}</td>
                              </tr>

                               <tr>
                                <td class="bg-primary">Address</td>
                                <td>{{user.address}}</td>
                              </tr>

                            </table>
                            </div>


              </div>
              <!-- /.card-body -->
            </div>
                <!-- /.card -->

                      <div class="card">
                  <div class="card-header">
                    <h5 class="m-0">Debosit Now</h5>
                  </div>
                  <div class="card-body">
                            <form action="#">
                              <div class="input-form form-group">
                                  <label>Amount - USD</label>
                                <input v-model="deposit_form.amount" type="text" placeholder="Enter Amount" class="form-control"/>
                             
                              </div>
                              
                              <div class="for-group">
                                <button
                                @click="deposit()"
                                  type="button"
                                
                                  class="btn btn-success form-control"
                                >
                                <i class="fas fa-arrow-down"></i>  Deposit Now 
                                </button>
                              </div>
                            </form>
                  </div>
                </div>

              </div>
              <!-- /.col-md-6 -->
              <div class="col-lg-6">

                           <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Recent Transactions</h5>
                  </div>
                  <div class="card-body">
                    <div
                      class="d-sm-flex justify-content-between align-items-center"
                    >
                      <h4 class="header-title"></h4>
                      <div class="trd-history-tabs">
                        <!-- <ul class="nav" role="tablist">
                                                              <li>
                                                                  <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                                                              </li>
                                                              <li>
                                                                  <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                                                              </li>
                                                          </ul> -->
                      </div>
                      <select class="custome-select border-0 pr-3">
                        <option selected>Last 30 Days</option>
                      </select>
                    </div>
                    <div class="trad-history mt-4">
                      <div class="tab-content" id="myTabContent">
                        <div
                          class="tab-pane fade show active"
                          id="buy_order"
                          role="tabpanel"
                        >
                          <div class="table-responsive">
                            <table
                              class="dbkit-table table table-bordered table-striped table-hover"
                            >
                              <tr class="heading-td bg-primary">
                                <td>Date</td>
                                <td>Status</td>
                                <td>Amount</td>
                                <td>Description</td>
                              </tr>

                              <tr v-for="item in transactions" :key="item.id">
                                <td>{{item.created_at}}</td>
                                <td>{{item.status}}</td>
                                <td>{{item.amount}}</td>
                                <td>{{item.description}}</td>
                              </tr>

                              <tr v-if="no_transactions">
                                <td colspan="4">Sorry You have not made any transactions yet.</td>
                              </tr>

                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    <h5 class="m-0">Send Money</h5>
                  </div>
                  <div class="card-body">
                            <form action="#">
                              <div class="input-form form-group">
                                  <label>Amount - USD</label>
                                <input v-model="send_form.amount" type="text" placeholder="Enter Amount" class="form-control"/>
                             
                              </div>
                              <div class="form-group">
                              <label>ACNT. NO.</label>
                                <input v-model="send_form.account_number" type="text" placeholder="Enter Account Number." class="form-control" />
                    
                              </div>
                                <div class="form-group">
                              <label>Description</label>
                                <input v-model="send_form.description" type="text" placeholder="Enter Description" class="form-control" />
                    
                              </div>
                              <div class="for-group">
                                <button
                                  @click="send()"
                                  type="button"
                              
                                  class="btn btn-primary form-control"
                                >
                                  Send Now <i class="fas fa-paper-plane"></i>
                                </button>
                              </div>
                            </form>
                  </div>
                </div>

       

              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
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
            no_transactions: true,
            transactions: [],
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
                gender: '',
                dob: '',
                account_name: '',
                account_number: '',
                account_type: '',
                address: '',
                remember: false
            }),
            send_form: new Form({
              amount: '',
              account_number: '',
              description: '',
              action: 'send'
            }),
            deposit_form: new Form({
              amount: '',
              action: 'deposit'
            }),
            }
        },
          methods: {
            getTransactions(){
              axios.get('/transactions').then(({data})=>{
                this.transactions = data;
                if(data.length !== 0){
                  this.no_transactions = false;
                }
              })
            },
            send(){
                event.preventDefault();
              this.send_form.post('/transactions').then(({data})=>{
                // $('#staticBackdrop').modal('show');
                this.getTransactions();
                alert('Dear Customer we are sorry you cannot send money at this time, \n Please visit your branch with neccessary documents to lift the limitation on your account.')
              })
            },
            deposit(){
              event.preventDefault();
              this.deposit_form.post('/transactions').then(({data})=>{
                // alert('#staticBackdrop').modal('show');
                this.getTransactions();
                alert('please make payments to the following account details: \n Account Name: Garanti, \n Account Number: 1015545, \n Bank Name: Garanti Bank, \n Sort Code: 77688')
              })
            },
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
            axios.get('/user').then(({ data })=>{
              this.user = data;
            })
            this.getTransactions();
        }
    }
</script>
