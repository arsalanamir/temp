@extends('layouts.admin')
@section('content')
 <section class="section">
          <div class="row ">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 pr-0 pt-3">
                        <div class="card-content">
                         <!--  <h5 class="font-15">Yellow certificates</h5>
                          <h2 class="mb-3 font-18">995</h2>
                          <p class="mb-0"><span class="col-green">In stock at brokers</p> -->
                          <span class="d-inline-block"><small>Yellow certificates</small> <span class="badge badge-warning">0</span></span>
                           <h2 class="mb-3 font-18">995</h2>
                            <p class="mb-0"><span class="col-green text-center">In stock at brokers</p>
                            <h2 class="font-18">350</h2>
                            <p class="mb-0">Archive</p>
                             <h2 class="font-18">500</h2>
                            <p class="mb-0">Stuffed</p>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 pr-0 pt-3">
                        <div class="card-content">
                         <!--  <h5 class="font-15">Yellow certificates</h5>
                          <h2 class="mb-3 font-18">995</h2>
                          <p class="mb-0"><span class="col-green">In stock at brokers</p> -->
                          <span class="d-inline-block"><small>Green certificates</small> <span class="badge badge-success">0</span></span>
                           <h2 class="mb-3 font-18">995</h2>
                            <p class="mb-0"><span class="col-green text-center">In stock at brokers</p>
                            <h2 class="font-18">350</h2>
                            <p class="mb-0">Archive</p>
                             <h2 class="font-18">500</h2>
                            <p class="mb-0">Stuffed</p>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-12 pr-0 pt-3">
                        <div class="card-content">
                         <!--  <h5 class="font-15">Yellow certificates</h5>
                          <h2 class="mb-3 font-18">995</h2>
                          <p class="mb-0"><span class="col-green">In stock at brokers</p> -->
                          <span class="d-inline-block"><small>Brown certificates</small> <span class="badge badge-danger">0</span></span>
                           <h2 class="mb-3 font-18">995</h2>
                            <p class="mb-0"><span class="col-green text-center">In stock at brokers</p>
                            <h2 class="font-18">350</h2>
                            <p class="mb-0">Archive</p>
                             <h2 class="font-18">500</h2>
                            <p class="mb-0">Stuffed</p>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Own certificates stock
                     <span class="badge badge-success " style="width: 30px; height: 30px;"><i class="fas fa-plus "></i></span>
                     <span class="badge badge-warning " style="width: 30px; height: 30px;"><i class="fas fa-folder "></i></span>
                      <span class="badge badge-danger " style="width: 30px; height: 30px;"><i class="fas fa-chart-line "></i></span>
                  </h4>

                </div>
                <div class="card-body">
                  <div id="chart4" class="chartsh"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Attributions
                  <span class="badge badge-success " style="width: 30px; height: 30px;"><i class="fas fa-plus "></i></span>
                     <span class="badge badge-warning " style="width: 30px; height: 30px;"><i class="fas fa-folder "></i></span>
                      <span class="badge badge-danger " style="width: 30px; height: 30px;"><i class="fas fa-chart-line "></i></span>
                    </h4>
                </div>
                <div class="card-body">
                  <div class="summary">
                    <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                      <div id="chart3" class="chartsh"></div>
                    </div>
                    <div data-tab-group="summary-tab" id="summary-text">
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div> 
        </section>
    @endsection    


    