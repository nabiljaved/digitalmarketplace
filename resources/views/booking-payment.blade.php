<?php $page = 'booking-payment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent

    <div class="content book-content">
        <div class="container">
            <div class="row">

                <!-- Booking -->
                <div class="col-md-12">

                    <div class="login-back">
                        <a href="{{ route('service-details', ['slug' => $serviceSlug ])  }}"><i class="feather-arrow-left"></i> Back</a>
                    </div>

                    <!-- Booking Step -->
                    <!-- <ul class="step-register row">
                        <li class="activate col-md-4">
                            <div class="multi-step-icon">
                                <span><img src="{{ URL::asset('/assets/img/icons/calendar-icon.svg') }}"
                                        alt="img"></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Appointment</h6>
                                <p>Choose time & date for the service</p>
                            </div>
                        </li>
                        <li class="active col-md-4">
                            <div class="multi-step-icon">
                                <span><img src="{{ URL::asset('/assets/img/icons/wallet-icon.svg') }}"
                                        alt="img"></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Appointment time date</h6>
                                <p>Select Payment Gateway</p>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="multi-step-icon">
                                <span><img src="{{ URL::asset('/assets/img/icons/book-done.svg') }}" alt="img"></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Done </h6>
                                <p>Completion of Booking</p>
                            </div>
                        </li>
                    </ul> -->
                    <!-- /Booking Step -->

                    <!-- Booking Payment -->
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="pay-title">Payment Methods</h5>

                                <div class="payment-card">
                                <div class="payment-head">
                                        <div class="payment-title">
                                            <label class="custom_radio">
                                                <input type="radio" name="payment" class="card-payment" value="check" onclick="updatePaymentOption()">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h6>Check Payment</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-card">
                                    <div class="payment-head">
                                        <div class="payment-title">
                                            <label class="custom_radio credit-card-option">
                                                <input type="radio" name="payment" class="card-payment" value="credit_card" onclick="updatePaymentOption()">
                                                <span class="checkmark"></span>
                                            </label>
                                            <h6>Credit / Debit Card</h6>
                                        </div>
                                    </div>
                                </div>

                                    <div class="payment-list" style="display:none">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-form-label">Name on Card</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Name on Card">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="col-form-label">Card Number</label>
                                                    <input class="form-control" placeholder="**** **** **** ****"
                                                        type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <div class="form-group">
                                                    <label class="col-form-label">&nbsp;</label>
                                                    <img src="{{ URL::asset('/assets/img/payment-card.png') }}"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Expiration date</label>
                                                    <input class="form-control" placeholder="MM/YY" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-form-label">Security code</label>
                                                    <input class="form-control" placeholder="CVV" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="credit-list" style="display:none">

                                        <form method="POST" action="{{ route('check-payment') }}">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="name">Name:</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="address">Address:</label>
                                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="phone">Phone Number:</label>
                                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="collectionDate">Collection Date:</label>
                                                    <input type="date" class="form-control" id="collectionDate" name="date" required>
                                                </div>

                                                <input type="hidden" name="totalPrice" value="{{$service->service_price}}" id="totalprice">
                                                <input type="hidden" name="servicetitle" value="{{$service->service_title}}" id="servicetitle">


                                                <button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>

                                            </form>
                                  </div>

                                </div>
                                @php
                                     $selectedImagesArray = json_decode($service->selected_images);
                              @endphp
                                <div class="col-lg-6">
                                    <h5 class="pay-title">Booking Summary</h5>
                                    <div class="summary-box">
                                        <div class="booking-info">
                                            <div class="service-book">
                                                <div class="service-book-img">
                                                    <img src="{{ asset('uploads/services/' . $selectedImagesArray[0]) }}" alt="img">
                                                </div>
                                                <div class="serv-profile">
                                                <span class="badge"><strike>{{$service->service_previous_price}}</strike></span>
                                                    <h2>{{$service->service_title}}</h2>
                                                    <ul>
                                                        <li class="serv-pro">
                                                            <img src="https://i.pinimg.com/280x280_RS/4a/76/e5/4a76e51ee5b4f472dddb09c3bc16efc0.jpg"
                                                                alt="img">
                                                        </li>
                                                        <li class="serv-review"><i class="fa-solid fa-star"></i> <span>4.9
                                                            </span>(255 reviews)</li>
                                                        <li class="service-map"><i class="feather-map-pin"></i>Oracle Digital , UAE</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="booking-summary">
                                            <!-- <ul class="booking-date">
                                                <li>Date <span>07/09/2023</span></li>
                                                <li>Time <span>12.30 Pm - 01. 00 PM</span></li>
                                                <li>Service Provider <span>Thomas Herzberg</span></li>
                                            </ul> -->
                                            <ul class="booking-date">
                                                <li>Subtotal <span id="subtotal">AED {{$service->service_price}}</span></li>
                                                <li class="coupon-discount">Coupoun Discount <span id="couponAmount">AED 0.00</span></li>
                                                <li class="service-charge">Services Charges <span>AED 3.00</span></li>
                                            </ul>
                                            <div class="booking-total">
                                                <ul class="booking-total-list">
                                                    <li>
                                                        <span>Total</span>
                                                        <span class="total-cost">AED {{$service->service_price}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="booking-coupon">
                                        <div class="form-group w-100">
                                            <div class="coupon-icon">
                                                <input type="text" class="form-control" id="couponCode" placeholder="Coupon Code">
                                                <span><img src="{{ URL::asset('/assets/img/icons/coupon-icon.svg') }}" alt=""></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary apply-btn" onclick="applyCoupon()">Apply</button>
                                        </div>
                                    </div>
                                  
                                    <div class="booking-pay">
                                        <!-- ... (existing code) ... -->
                                    </div>
                                    <div class="save-offer">
                                        <p> <span  id="couponMessage">Your total saving on this order AED 0.00</span></i> 
                                        </p>
                                    </div>
                                    <div class="booking-pay" id="payButton">
                                        <a href="{{ url('booking-done') }}" class="btn btn-primary btn-pay w-100"><span id="proceed-pay">Proceed to Pay {{$service->service_price}}</span></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking Payment -->

                </div>
                <!-- /Booking -->

            </div>
        </div>
    </div>

<script>

document.getElementById('payButton').style.display = 'none';


function applyCoupon() {
    const couponCode = document.getElementById('couponCode').value;

    // Check if the coupon code is equal to "AE45GR" (case-sensitive).
    if (couponCode === "AE") {
        // Assuming you have stored the original service price in a variable named 'originalPrice'.
        // Replace this with the actual variable that holds the original price.
        const originalPrice = {{$service->service_price}};

        // Assuming the coupon amount for "AE45GR" is 10 (you can adjust this value as needed).
        const couponAmount = 10;

        // Calculate the total price after applying the coupon.
        const totalPrice = originalPrice - couponAmount;

        // alert(totalPrice)

        // Update the total cost, coupon discount, and subtotal in the HTML.
        const totalCostElement = document.querySelector('.total-cost');
        const couponAmountElement = document.getElementById('couponAmount');
        const subtotalElement = document.getElementById('subtotal');


        console.log(totalCostElement.textContent, couponAmountElement.textContent, subtotalElement.textContent)

        totalCostElement.textContent = `AED ${totalPrice.toFixed(2)}`;
        couponAmountElement.textContent = `AED ${couponAmount.toFixed(2)}`;
        subtotalElement.textContent = `AED ${originalPrice.toFixed(2)}`;

        const payButton = document.getElementById('proceed-pay');
        payButton.textContent = `Proceed to Pay AED ${totalPrice.toFixed(2)}`;

        // Disable the coupon button after applying the coupon.
        const applyButton = document.querySelector('.apply-btn');
        applyButton.disabled = true;

        // Show the coupon applied message.
       // Show the coupon applied message.
       const couponMessage = document.getElementById('couponMessage');
        couponMessage.textContent = ""; // Clear previous message
        couponMessage.textContent = `Your total saving on this order AED ${couponAmount.toFixed(2)}`;
        couponMessage.style.display = 'block';

        // Update the values of the hidden input fields
        document.getElementById('totalprice').value = totalPrice.toFixed(2);
        

        
    } else {
        // Coupon code is not valid. You can display an error message or take appropriate action.
        alert("Invalid coupon code. Please enter a valid coupon code.");
    }
}


function updatePaymentOption() {
    const selectedPaymentOption = document.querySelector('input[name="payment"]:checked').value;
    const payButton = document.getElementById('payButton');
    const paymentList = document.querySelector('.credit-list');

    console.log(selectedPaymentOption);

    if (selectedPaymentOption === "check") {
        payButton.style.display = 'none'; // Hide the button for "Check Payment"
        paymentList.style.display = 'block'; // Show the payment-list

    } else if (selectedPaymentOption === "credit_card") {
        payButton.style.display = 'block'; // Show the button for "Credit / Debit Card"
        paymentList.style.display = 'none'; // Hide the payment-list

    }
}

// Hide the "Proceed to Pay" button by default
document.getElementById('payButton').style.display = 'none';

// Call the function to set the initial payment option and button visibility
updatePaymentOption();


</script>

@endsection
