@extends('layouts.app')

@section('content')
     <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Balance</h5>
                    <br />
                    <br />
                    <p class="card-text">
                       {{ Auth::user()->balance }}
                    </p>

                    <a href="#" class="card-link">Savings</a>
                  </div>
                </div>

                <div class="card card-primary card-outline">
                  <div class="card-body">
                    <h5 class="card-title">Withdrawals</h5>
                    <br /><br />
                    <p class="card-text">
                        {{ Auth::user()->total_withdrawals }}
                    </p>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-md-6 -->
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h5 class="m-0">Send Money</h5>
                  </div>
                  <div class="card-body">
                            <form action="#">
                              <div class="input-form form-group">
                                  <label>USD</label>
                                <input type="text" value="100" class="form-control"/>
                             
                              </div>
                              <div class="form-group">
                              <label>ACNT. NO.</label>
                                <input type="text" value="0068977" class="form-control" />
                    
                              </div>
                              <div class="for-group">
                                <button
                                  type="button"
                                  data-toggle="modal"
                                  data-target="#staticBackdrop"
                                  class="btn btn-primary form-control"
                                >
                                  Send Now
                                </button>
                              </div>
                  </div>
                </div>

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
                              <tr class="heading-td">
                                <td>Transaction ID</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Amount</td>
                                <td>Charge</td>
                              </tr>
                              <tr>
                                <td>78211</td>
                                <td>16/06/2020</td>
                                <td>Successful</td>
                                <td>$17,500.90</td>
                                <td>$17.00</td>
                              </tr>
                              <tr>
                                <td>782782</td>
                                <td>17/06/2020</td>
                                <td>Successful</td>
                                <td>$20,878.90</td>
                                <td>$20</td>
                              </tr>
                              <tr>
                                <td>89,600.00</td>
                                <td>18/06/2020</td>
                                <td>Successful</td>
                                <td>$50,680.90</td>
                                <td>$35.090</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
@endsection
