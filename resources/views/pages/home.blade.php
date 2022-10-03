@extends('layouts.default')

@section('content')

    <div class="container padding-bottom-3x mb-1 mt-4">
        <div class="row">
            <!-- Blog Posts-->
            <div class="col-xl-6 col-lg-6 order-lg-2">
                <div class="widget-title">
                    <div class="text-left">Available Tuitions (1)</div>
                </div>

                <div class="card mb-30">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Tuition ID #</td>
                                    <td>9242022101933</td>
                                </tr>
                                <tr>
                                    <td>Class/ Subject:</td>
                                    <td>Class IX , All Subject</td>
                                </tr>
                                <tr>
                                    <td>Location:</td>
                                    <td>DHAKA, Basundhara Residential </td>
                                </tr>
                                <tr>
                                    <td>Days:</td>
                                    <td>4 days/week</td>
                                </tr>
                                <tr>
                                    <td>Salary Range:</td>
                                    <td>5500-6500 tk/month</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-right"> Posted on: 24 Sep, 2022 10:19 PM </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar          -->
            <div class="col-xl-6 col-lg-6 order-lg-1">
                <aside class="sidebar sidebar-offcanvas">
                    <!-- Widget Categories-->
                    <section class="widget widget-categories">
                        <h3 class="widget-title">SEARCH FOR TUTORS</h3>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">All Districts</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">All Areas</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">Any Medium</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">Any Class</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <select class="form-control" id="validationCustom03" required="">
                                        <option value="">All Subjects</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="Houston">Houston</option>
                                    </select>
                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <button class="btn btn-primary" type="submit">Search Tutor</button>
                                </div>
                            </div>
                        </form>
                    </section>

                </aside>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 order-lg-1">
            <aside class="sidebar sidebar-offcanvas">
                <!-- Widget Categories-->
                <section class="widget widget-categories">
                    <h3 class="widget-title">Featured Tutors</h3>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 ">
                            <div class="product-card product-list">
                                <a style="position: relative; width: 120px; padding: 18px; border-right: 1px solid #e1e7ec; display: table-cell; vertical-align: middle;"
                                    href="/tutor/1"><img src="{{ asset('assets/img/team/03.jpg') }}" alt="Product"></a>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.html">ELIAS AHMED</a></h3>
                                    <h4 class="product-price">8000 tk/month</h4>
                                    <p class="hidden-xs-down">DHAKA</p>
                                    <p class="hidden-xs-down">01677651442</p>
                                    <button class="btn btn-outline-primary btn-sm" data-toast="" data-toast-type="success"
                                        data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                        data-toast-title="Product"
                                        data-toast-message="successfuly added to cart!">Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 ">
                            <div class="product-card product-list">
                                <a style="position: relative; width: 120px; padding: 18px; border-right: 1px solid #e1e7ec; display: table-cell; vertical-align: middle;"
                                    href="shop-single.html"><img src="{{ asset('assets/img/team/01.jpg') }}"
                                        alt="Product"></a>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.html">shakila jahan sayma</a></h3>
                                    <h4 class="product-price">4000 tk/month</h4>
                                    <p class="hidden-xs-down">DHAKA</p>
                                    <p class="hidden-xs-down">01677652242</p>
                                    <button class="btn btn-outline-primary btn-sm" data-toast=""
                                        data-toast-type="success" data-toast-position="topRight"
                                        data-toast-icon="icon-circle-check" data-toast-title="Product"
                                        data-toast-message="successfuly added to cart!">Chat</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 ">
                            <div class="product-card product-list">
                                <a style="position: relative; width: 120px; padding: 18px; border-right: 1px solid #e1e7ec; display: table-cell; vertical-align: middle;"
                                    href="shop-single.html"><img src="{{ asset('assets/img/team/05.jpg') }}"
                                        alt="Product"></a>
                                <div class="product-info">
                                    <h3 class="product-title"><a href="shop-single.html">Sazzadul Akbar Shuvo</a></h3>
                                    <h4 class="product-price">6000 tk/month</h4>
                                    <p class="hidden-xs-down">DHAKA</p>
                                    <p class="hidden-xs-down">01674651442</p>
                                    <button class="btn btn-outline-primary btn-sm" data-toast=""
                                        data-toast-type="success" data-toast-position="topRight"
                                        data-toast-icon="icon-circle-check" data-toast-title="Product"
                                        data-toast-message="successfuly added to cart!">Chat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>

    @stop
