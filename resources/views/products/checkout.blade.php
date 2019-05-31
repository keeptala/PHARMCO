@extends('layouts.app')
@section('content')
    <div class="row">
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <!-- <div class="connecting-line"></div> -->
                    <ul class="nav  breadcrumb_checkout" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                <h3>Shipping</h3>
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                <h3>Payment</h3>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                <h3>Confirmations</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <form role="form">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="step1">
                                <!--  exiting customer end -->
                                <div class="row" style="">
                                    <div class="checkout_details">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <dl class="dl-horizontal">
                                                <dt>First Name:<span></span></dt>
                                                <dd>Priya</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>Mobile Number:<span></span></dt>
                                                <dd>970000000</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>Pincode:<span></span></dt>
                                                <dd>625014</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>Email:<span></span></dt>
                                                <dd>user@gmail.com</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>Flat / House No. / Floor / Building:<span></span></dt>
                                                <dd>#33/5</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>Colony / Street / Locality:<span></span></dt>
                                                <dd>Roja 1st Street</dd>
                                            </dl>
                                            <dl class="dl-horizontal">
                                                <dt>Landmark:<span></span></dt>
                                                <dd>Murugan Temple</dd>
                                            </dl>
                                            <div>
                                                <a class="btn btn-primary next-step btn-theme" data-toggle="modal" data-target="#myModal">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- exiting customer end-->
                                <!-- new customer start -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Pincode</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pincode">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Flat / House No. / Floor / Building</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Flat">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Colony / Street / Locality</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Colony">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Landmark</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Colony">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Landmark</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Colony">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <textarea rows="4" cols="50" class="form-control"></textarea>
                                    </div>
                                </div>
                                <!-- new customer end -->
                            </div><!-- step 1 end div tag -->
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-primary next-step btn-theme">Next</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2"> <!-- step 2 start -->
                            <div class="step2">
                                <div class="col-sm-4">
                                    <label class="radio-inline"><input type="radio" name="optradio">Credit card</label>
                                    <div class="credit_card">
                                        <ul class="payments_ul">
                                            <li>
                                                <img src="http://localhost/nukkad-shop/public/assets/img/credit-card.png">
                                            </li>
                                            <li>
                                                <img src="http://localhost/nukkad-shop/public/assets/img/mastercard.png">
                                            </li>
                                            <li>
                                                <img src="http://localhost/nukkad-shop/public/assets/img/paypal.png">
                                            </li>
                                            <li>
                                                <img src="http://localhost/nukkad-shop/public/assets/img/visa.png">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="name_of_card">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name on card</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name on card">
                                        </div>
                                    </div>
                                    <div class="name_of_card">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Card number</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Card number">
                                        </div>
                                    </div>
                                    <p>Expiration date</p>
                                    <div class="expir_date col-sm-3 p_rm">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>-- Select -- </option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="expir_date col-sm-5 p_rm">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>-- Year -- </option>
                                                <option>2006</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline"><input type="radio" name="optradio">Debit card</label>
                                    <div class="debit_card">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>-- Debit card -- </option>
                                                <option>All Visa/MasterCard Debit Card</option>
                                                <option>All Rupay Debit Cards</option>
                                                <option>All SBI Maestro Debit Cards</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline"><input type="radio" name="optradio">Net Banking</label>
                                    <div class="net_banking">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>-- Net Banking -- </option>
                                                <option>Allahabad Bank</option>
                                                <option>Andhra Bank</option>
                                                <option>Airtel Payments Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step btn-theme">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step btn-theme">Next</button></li>
                            </ul>
                        </div><!-- step 2 end -->
                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="col-sm-4">
                                <h5><strong>Shipping address</strong></h5>
                                <p>Name: John Albert</p>
                                <p>Address: #33, Kaveri nadhi st, </p>
                                <p>KK nagar, </p>
                                <p> Madurai - 02</p>
                            </div>
                            <div class="col-sm-3">
                                <h5><strong>Payment method </strong></h5>
                                <p>Net Banking: Allahabad Bank </p>
                            </div>
                            <div class="col-sm-5">
                                <h5><strong>Place your order and pay</strong></h5>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Sunflower oli</td>
                                        <td><i class="fa fa-usd" aria-hidden="true"></i> 45</td>
                                    </tr>
                                    <tr>
                                        <td>Sun rich oil</td>
                                        <td><i class="fa fa-usd" aria-hidden="true"></i> 90</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Total: <i class="fa fa-usd" aria-hidden="true"> 135
                                            </i></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix"></div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step btn-theme">Previous</button></li>
                                <li><button type="button" class="btn btn-default next-step btn-theme">Skip</button></li>
                                <li><button type="button" class="btn btn-primary btn-info-full next-step btn-theme">Next</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <div class="step44">
                                <h5>Completed</h5>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection