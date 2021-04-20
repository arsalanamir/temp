@extends('layouts.admin')
@section('content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="row">
              <div class="col-12">
                <div class="card">
                <div class="card-statistic-4">
                  <div class="card-body">
                    <div class="row"> 
                      <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Agreement number</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div> 

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Main user first name</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div> 

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Social reason (company name)</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div> 

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Main user last name</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div> 

                      <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Company creation date</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div> 

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Main user last name</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div>

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Adress (Optional)</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div>


                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Main user e-mail</label>
                          <input type="email" class="form-control" placeholder="Example input">
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Numéro de téléphone</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div>

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group">
                          <label >Main user e-mail confirmation</label>
                          <input type="text" class="form-control" placeholder="Example input">
                        </div>
                      </div>

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group mt-md-4">
                          <label >Company brand (logo)</label> <br>
                          <div class="d-inline-block">
                            <i class="fas fa-camera mr-2"></i>
                            <i class="fas fa-download mr-2"></i>
                            <small>xxxxxxxxxxxx.jpg</small>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group mt-md-4">
                          <label >Profile picture (optional)</label> <br>
                          <div class="d-inline-block">
                            <i class="fas fa-camera mr-2"></i>
                            <i class="fas fa-download mr-2"></i>
                            <small>xxxxxxxxxxxx.jpg</small>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="form-group mt-md-4">
                           <button class="btn btn-primary">Summery</button>
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