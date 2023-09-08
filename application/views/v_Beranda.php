<div class="row">
    <!-- View sales -->
    <div class="col-xl-4 mb-4 col-lg-5 col-12">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-7">
                    <div class="card-body text-nowrap">
                        <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
                        <p class="mb-2">Best seller of the month</p>
                        <h4 class="text-primary mb-1">$48.9k</h4>
                        <a href="javascript:;" class="btn btn-primary">View Sales</a>
                    </div>
                </div>
                <div class="col-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="./assets/img/illustrations/card-advance-sale.png" height="140" alt="view sales" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View sales -->

    <!-- Statistics -->
    <div class="col-xl-8 mb-4 col-lg-7 col-12">
        <div class="card h-100">
            <div class="card-header">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="card-title mb-0">Statistics</h5>
                    <small class="text-muted">Updated 1 month ago</small>
                </div>
            </div>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-primary me-3 p-2">
                                <i class="ti ti-chart-pie-2 ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">230k</h5>
                                <small>Sales</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-info me-3 p-2">
                                <i class="ti ti-users ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">8.549k</h5>
                                <small>Customers</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-danger me-3 p-2">
                                <i class="ti ti-shopping-cart ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">1.423k</h5>
                                <small>Products</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                            <div class="badge rounded-pill bg-label-success me-3 p-2">
                                <i class="ti ti-currency-dollar ti-sm"></i>
                            </div>
                            <div class="card-info">
                                <h5 class="mb-0">$9745</h5>
                                <small>Revenue</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Statistics -->

    <div class="col-xl-4 col-12">
        <div class="row">
            <!-- Expenses -->
            <div class="col-xl-6 mb-4 col-md-3 col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">82.5k</h5>
                        <small class="text-muted">Expenses</small>
                    </div>
                    <div class="card-body">
                        <div id="expensesChart"></div>
                        <div class="mt-md-2 text-center mt-lg-3 mt-3">
                            <small class="text-muted mt-3">$21k Expenses more than last month</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Expenses -->

            <!-- Profit last month -->
            <div class="col-xl-6 mb-4 col-md-3 col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5 class="card-title mb-0">Profit</h5>
                        <small class="text-muted">Last Month</small>
                    </div>
                    <div class="card-body">
                        <div id="profitLastMonth"></div>
                        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                            <h4 class="mb-0">624k</h4>
                            <small class="text-success">+8.24%</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Profit last month -->

            <!-- Generated Leads -->
            <div class="col-xl-12 mb-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column">
                                <div class="card-title mb-auto">
                                    <h5 class="mb-1 text-nowrap">Generated Leads</h5>
                                    <small>Monthly Report</small>
                                </div>
                                <div class="chart-statistics">
                                    <h3 class="card-title mb-1">4,350</h3>
                                    <small class="text-success text-nowrap fw-semibold"><i class="ti ti-chevron-up me-1"></i> 15.8%</small>
                                </div>
                            </div>
                            <div id="generatedLeadsChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Generated Leads -->
        </div>
    </div>

    <!-- Revenue Report -->
    <div class="col-12 col-xl-8 mb-4 col-lg-7">
        <div class="card">
            <div class="card-header pb-3">
                <h5 class="m-0 me-2 card-title">Revenue Report</h5>
            </div>
            <div class="card-body">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <div id="totalRevenueChart"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center mt-4">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="budgetId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                                    <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                        <script>
                                            document.write(new Date().getFullYear() - 1);
                                        </script>
                                    </a>
                                    <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                        <script>
                                            document.write(new Date().getFullYear() - 2);
                                        </script>
                                    </a>
                                    <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                        <script>
                                            document.write(new Date().getFullYear() - 3);
                                        </script>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h3 class="text-center pt-4 mb-0">$25,825</h3>
                        <p class="mb-4 text-center"><span class="fw-semibold">Budget: </span>56,800</p>
                        <div class="px-3">
                            <div id="budgetChart"></div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary">Increase Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Revenue Report -->


</div>
