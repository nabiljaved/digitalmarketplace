<?php $page = 'terms-condition'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Terms & Condition
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Terms & Condition
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Terms & Conditions -->
                 <div class="container mt-4">
        <h1 class="mb-4 text-center">Terms and Conditions</h1>

        <h4>1. Introduction</h4>
        <p>Welcome to Digital Market Place. These Terms and Conditions govern your use of our online digital marketing
            services. By using our services, you agree to these terms in full. If you disagree with any part of these
            terms, please do not use our services.</p>

        <h4>2. Service Agreement</h4>
        <p>Our digital marketing services are provided on a per-project or ongoing basis as agreed upon in a separate
            Service Agreement. The Service Agreement will outline the scope of services, project timelines, and payment
            terms.</p>

        <h4>3. Payment</h4>
        <p>Payment for our services is due as per the agreed terms in the Service Agreement. Failure to make timely
            payments may result in the suspension or termination of services.</p>

        <h4>4. Intellectual Property</h4>
        <p>All intellectual property rights related to the digital marketing materials and content created for your
            project will remain the property of Digital Market Place unless otherwise agreed upon in writing.</p>

        <h4>5. Confidentiality</h4>
        <p>We will treat all information provided by you as confidential and will not disclose it to third parties
            without your prior consent, except as required by law.</p>

        <h4>6. Disclaimer of Warranty</h4>
        <p>While we strive to provide high-quality services, we do not guarantee the results of our digital marketing
            efforts. The success of marketing campaigns can be influenced by various external factors beyond our
            control.</p>

        <h4>7. Limitation of Liability</h4>
        <p>Digital Market Place shall not be liable for any indirect, incidental, special, consequential, or punitive
            damages, including but not limited to lost profits or business interruption, arising out of or in connection
            with our services.</p>

        <h4>8. Termination</h4>
        <p>You may terminate the Service Agreement at any time by providing written notice. We reserve the right to
            terminate services immediately for violation of these Terms and Conditions or for any other reason deemed
            appropriate by Digital Market Place.</p>

        <h4>9. Governing Law</h4>
        <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of [Your Country]
            without regard to its conflict of law provisions.</p>

        <h4>10. Changes to Terms and Conditions</h4>
        <p>We reserve the right to update or modify these Terms and Conditions at any time without prior notice. The
            updated version will be posted on our website, and the effective date will be revised accordingly.</p>

        <h4>11. Contact Us</h4>
        <p>If you have any questions, concerns, or requests regarding these Terms and Conditions, please contact us
            at:</p>

        <address>
            Digital Market Place<br>
            [Address]<br>
            [Email]<br>
            [Phone]
        </address>
    </div>
</body>
                <!-- /Terms & Conditions -->

            </div>
        </div>
    </div>
@endsection
