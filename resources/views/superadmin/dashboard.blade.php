<x-panel.dash>
    <div class="container-fluid">
          @if (session('success'))
  <div class="alert alert-success text-center mb-4 rounded-0">
   <strong> {{ session('success') }}</strong>
  </div>
@endif
        <div class="row dash-row">
            <div class="col-xl-4">
                <div class="stats stats-primary">
                    <h3 class="stats-title"> Sign ups </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">114</div>
                            <div class="stats-change">
                                <span class="stats-percentage">+25%</span>
                                <span class="stats-timeframe">from last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-success ">
                    <h3 class="stats-title"> Revenue </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-cart-arrow-down"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">$25,541</div>
                            <div class="stats-change">
                                <span class="stats-percentage">+17.5%</span>
                                <span class="stats-timeframe">from last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="stats stats-danger">
                    <h3 class="stats-title"> Open tickets </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">5</div>
                        </div>
                    </div>
                </div>
            </div>


              <div class="col-xl-4">
                <div class="stats stats-success ">
                    <h3 class="stats-title"> Revenue </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-cart-arrow-down"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">$25,541</div>
                            <div class="stats-change">
                                <span class="stats-percentage">+17.5%</span>
                                <span class="stats-timeframe">from last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="col-xl-4">
                <div class="stats stats-success ">
                    <h3 class="stats-title"> Revenue </h3>
                    <div class="stats-content">
                        <div class="stats-icon">
                            <i class="fas fa-cart-arrow-down"></i>
                        </div>
                        <div class="stats-data">
                            <div class="stats-number">$25,541</div>
                            <div class="stats-change">
                                <span class="stats-percentage">+17.5%</span>
                                <span class="stats-timeframe">from last month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</x-panel.dash>
