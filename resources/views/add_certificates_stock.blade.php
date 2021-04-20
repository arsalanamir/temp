@extends('layouts.admin')
@section('content')
        <section class="section">
          <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-statistic-4">
                  <div class="card-body">
                    <div class="row"> 
                      <div class="col-12">
                        <div class="d-flex">
                          <img src="assets/img/banner/1.png" class="img-fluid" width="80">
                          <div class="d-block ml-3 align-items-center">
                            <h4>Yellow certificate</h4>
                          <p>Private</p>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div> 
            </div>

             <div class="col-12">
                <div class="card">
                <div class="card-statistic-4">
                  <div class="card-body">
                    <div class="row"> 
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-6"><strong>Insurance zone</strong></div>
                          <div class="col-6">CIMA</div>
                        </div>
                          <div class="row">
                          <div class="col-6"><strong>Country</strong></div>
                          <div class="col-6">Senegal</div>
                        </div>
                         <div class="row">
                          <div class="col-6"><strong>Issuing company</strong></div>
                          <div class="col-6">Prévoyance Assurances</div>
                        </div>
                        <div class="row">
                          <div class="col-6"><strong>Insurance policy</strong></div>
                          <div class="col-6">SN-060-0283547</div>
                        </div>
                         <div class="row">
                          <div class="col-6"><strong>Distributing broker</strong></div>
                          <div class="col-6">-</div>
                        </div>

                         <div class="row">
                          <div class="col-6"><strong>Sub-distributor</strong></div>
                          <div class="col-6">-</div>
                        </div>

                         <div class="form-group row mt-5">
                          <div class="col-12 text-center mb-2">
                            <h3><strong>Subscriber</strong></h3>
                          </div>

                          <label for="fname" class="col-sm-3 col-form-label mb-2">First Name</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="fname">
                          </div>

                           <label for="lname" class="col-sm-3 col-form-label mb-2">Last Name</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="lname" >
                          </div>

                           <label for="lname" class="col-sm-3 col-form-label mb-2">Profession</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="lname" >
                          </div>

                           <label for="lname" class="col-sm-3 col-form-label mb-2">Adress</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="lname" >
                          </div>

                        </div>


                        <div class="form-group row mt-4">
                          <div class="col-12 text-center mb-2">
                            <h3><strong>Vehicle</strong></h3>
                          </div>

                          <label for="fname" class="col-sm-3 col-form-label mb-2">Car brand</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="fname">
                          </div>

                           <label for="lname" class="col-sm-3 col-form-label mb-2">Type/Model</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="lname" >
                          </div>

                           <label for="lname" class="col-sm-3 col-form-label mb-2">Registration number</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="lname" >
                          </div>

                           <label for="lname" class="col-sm-3 col-form-label mb-2">Vehicle Policy Number</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="lname" >
                          </div>

                        </div>
                      </div>

                      <div class="col-md-6">
                      <div class="row">
                        <div class="col-6"><strong>Date/Hour of creation</strong></div>
                        <div class="col-6">XX/XX/XXXX</div>
                      </div>

                      <div class="form-group row mt-4"> 
                          <label for="fname" class="col-sm-3 col-form-label mb-2">Validity beginning</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="fname">
                          </div>
                           <label for="fname" class="col-sm-3 col-form-label mb-2">Validity ending</label>
                          <div class="col-sm-9 mb-2">
                            <input type="text" class="form-control" id="fname">
                          </div>
                        </div>

                        <div class="form-group row mt-4">
                          <div class="col-12 text-center mb-2">
                            <h3><strong>Stuffing case</strong></h3>
                          </div>


                           <label for="lname" class="col-sm-3 col-form-label mb-2">Reason</label>
                          <div class="col-sm-9 mb-2">
                            <select class="form-control">
                              <option>Option 1</option>
                              <option>Option 2</option>
                              <option>Option 3</option>
                              <option>Option 4</option>
                            </select>
                          </div>

                          <label for="fname" class="col-sm-3 col-form-label mb-2">Date/Hour of stuffing</label>
                          <div class="col-sm-9 mb-2">
                            <input type="date" class="form-control" id="fname">
                          </div>

                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </section>
     @endsection