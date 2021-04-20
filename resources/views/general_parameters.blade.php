@extends('layouts.admin')
@section('content')
        <section class="section">
          
          <div class="row ">
            <div class="col-12">
                <div class="card">
                <div class="card-statistic-4">
                  <div class="card-body">
                    <div class="row"> 
                      <div class="col-md-6">
                        <div class="d-flex">
                          <img src="assets/img/banner/1.png" class="img-fluid" width="80">
                          <div class="d-flex align-items-center ml-3">
                            <h4>Matricule fournisseur</h4> 
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 text-right font-18">
                        <p><strong>Date de fin de licence:</strong><span class="ml-3">21/01/2022</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                     <form>
                       <div class="row">
                         <div class="col-md-6">
                           <div class="form-group">
                             <label>Agreement number</label>
                             <input type="text" name="" class="form-control" placeholder="xxxxxxxxx">
                           </div>
                         </div>
                         <div class="col-md-6">
                           <div class="form-group">
                             <label>Adress</label>
                             <input type="text" name="" class="form-control" placeholder="xxxxxxxxx">
                           </div>
                         </div>

                           <div class="col-md-6">
                           <div class="form-group">
                             <label>Social reason (company name)</label>
                             <input type="text" name="" class="form-control" placeholder="xxxxxxxxx">
                           </div>
                         </div>
                         <div class="col-md-6">
                           <div class="form-group">
                             <label>Phone number</label>
                             <input type="text" name="" class="form-control" placeholder="xxxxxxxxx">
                           </div>
                         </div>

                          <div class="col-md-6">
                           <div class="form-group">
                             <label>Company insurance code</label>
                             <input type="text" name="" class="form-control" placeholder="xxxxxxxxx">
                           </div>
                         </div>
                         <div class="col-md-6">
                           <div class="d-flex align-items-center">
                             <span class="badge badge-success rounded-circle p-2"><i class="fas fa-plus"></i></span>
                             <p class="ml-3 mt-3"><strong>Add Payment Method</strong></p>
                           </div>
                         </div>

                           <div class="col-md-6">
                           <div class="form-group">
                             <label>Company creation date</label>
                             <input type="text" name="" class="form-control" placeholder="xxxxxxxxx">
                           </div>
                         </div>

                       </div>
                     </form>
                  </div>
                </div>
              </div> 
            </div> 
          
        </div>

        </section>
       @endsection