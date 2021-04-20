@extends('layouts.admin')
@section('content')
        <section class="section">
           <div class="row">
              <div class="col-12">
                <div class="card">
               <div class="card-header">
                  <h4>Add Broker
                  </h4>
                <div class="badge badge-pill badge-success mb-1 float-right"><i class="fas fa-plus"></i>
                </div>
                  
                </div>

                  <div class="card-body">
                    <div class="row ">
                    <div class="col-md-9">
                       <p> <i class="fas fa-link mr-2"></i><a href="#">Link with an existing broker</a></p>
                    </div>
                    <div class="col-md-3">
                      <form>
                        <div class="form-group">
                          <select class="form-control">
                            <option>Active</option>
                            <option>Expire</option>
                            <option>In Progrosess</option>
                            <option>xyz</option>
                          </select>
                        </div>
                      </form>
                    </div>
                  </div>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                             
                            <th>ID </th>
                            <th>Name</th>
                            <th>Agreement number</th>
                            <th>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </th>
                            <th>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </th>
                            <th>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>DSN0001</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td class="text-success">XXXXX</td>
                            <td class="text-warning">XXXXX</td>
                            <td class="text-danger">XXXXX</td>
                          </tr>

                           <tr>
                            <td>DSN0001</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td class="text-success">XXXXX</td>
                            <td class="text-warning">XXXXX</td>
                            <td class="text-danger">XXXXX</td>
                          </tr>


                           <tr>
                            <td>DSN0001</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td class="text-success">XXXXX</td>
                            <td class="text-warning">XXXXX</td>
                            <td class="text-danger">XXXXX</td>
                          </tr>

                           <tr>
                            <td>DSN0001</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td class="text-success">XXXXX</td>
                            <td class="text-warning">XXXXX</td>
                            <td class="text-danger">XXXXX</td>
                          </tr>

                           <tr>
                            <td>DSN0001</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td class="text-success">XXXXX</td>
                            <td class="text-warning">XXXXX</td>
                            <td class="text-danger">XXXXX</td>
                          </tr>

                           <tr>
                            <td>DSN0001</td>
                            <td>XXXXX</td>
                            <td>XXXXX</td>
                            <td class="text-success">XXXXX</td>
                            <td class="text-warning">XXXXX</td>
                            <td class="text-danger">XXXXX</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
        </section>
@endsection