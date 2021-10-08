
<?php
// include header.php file
include ('header.php');
?>
<!-- Section: Testimonials v.1 -->
<section class="text-center my-5 p-1">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Testimonials  </h2>
    <!-- Section description -->
    <p class="dark-grey-text w-responsive mx-auto mb-5">We have been breeding puppies.</p>

    <!-- Grid row -->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
            <!--Card-->
            <div class="card testimonial-card">
                <!--Background color-->
                <div class="card-up info-color"></div>
                <!--Avatar-->
                <div class="avatar mx-auto white">
                    <img class=" rounded-x" src="assets/img/new/1.jpg" alt="" style="align-items: center" width="300px "align="fit">
                </div>
                <div class="card-body">
                    <!--Name-->
                    <h4 class="font-weight-bold mb-4">Lise – Customs Clearance Agent</h4>
                    <hr>
                    <!--Quotation-->
                    <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>"My primary responsibility
                        is to clear goods coming from countries outside Europe for customs. I have to classify them
                        and complete a declaration that complies with customs regulations...."

                    <div id="collapse" style="display:none">
                        <p> and the customs documentation required for international freight. I have to assess their
                        needs very quickly, be thorough and provide accurate information. For example, if there is
                        even one small detail missing from the shipping docs, a customer’s package may be held up
                        somewhere. If a customer wants to ship perfume, which is classified as a hazardous substance,
                        I am their first contact and give them all the information they need to get it done.
                        The main reason I work in this field is that I love to help people. When I take a call,
                        I speak to the customer the way I would like to be spoken to. In other words,
                        I give the customer as much detailed information as possible, do it efficiently
                        and always do it with a smile on my face.”.</p>
                    </div>
                    <a href="#collapse" class="nav-toggle">Read More</a>
                </div>
            </div>
            </p>

            <!--Card-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
            <!--Card-->
            <div class="card testimonial-card">
                <!--Background color-->
                <div class="card-up blue-gradient">
                </div>
                <!--Avatar-->
                <div class="avatar mx-auto white">
                    <img class=" rounded-x" src="assets/img/new/2.jpg" alt="" style="align-items: center" width="300px "align="fit">
                </div>
                <div class="card-body">
                    <!--Name-->
                    <h4 class="font-weight-bold mb-4">Alexandre – Internal Customer Service Agent </h4>
                    <hr>
                    <!--Quotation-->
                    <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>"I work for the in-house Customer
                        Service department at All shipping Service I am the key contact for all All shipping Service international
                        shipping departments...."</p>

                </div>
            </div>
            <!--Card-->
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
            <!--Card-->
            <div class="card testimonial-card">
                <!--Background color-->
                <div class="card-up blue-gradient">
                </div>
                <!--Avatar-->
                <div class="avatar mx-auto white">
                    <img class=" rounded-x" src="assets/img/new/3.jpg" alt="" style="align-items: center" width="300px "align="fit">
                </div>
                <div class="card-body">
                    <!--Name-->
                    <h4 class="font-weight-bold mb-4">José – Courier</h4>
                    <hr>
                    <!--Quotation-->
                    <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>“"As a courier, I deliver envelopes and
                        packages to individuals and companies. And, I do my Neuilly- sur-Seine route in an all-electric
                        van...."</p>
                </div>
            </div>
            <!--Card-->
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
            <!--Card-->
            <div class="card testimonial-card">
                <!--Background color-->
                <div class="card-up blue-gradient">
                </div>
                <!--Avatar-->
                <div class="avatar mx-auto white">
                    <img class=" rounded-x" src="assets/img/new/4.jpg" alt="" style="align-items: center" width="300px "align="fit">
                </div>
                <div class="card-body">
                    <!--Name-->
                    <h4 class="font-weight-bold mb-4">Audrey – Customer Service Agent</h4>
                    <hr>
                    <!--Quotation-->
                    <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>"It is my responsibility to
                        take calls from both companies and individual customers. They request information about
                        delivery times, prices for national and international shipping...</p>
                </div>
            </div>
            <!--Card-->
        </div>
        <!--Grid column-->
        <!--Grid column-->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Testimonials v.1 -->
<!-- Section: Testimonials v.1 -->

0<script>
    $(document).ready(function () {
        $('.nav-toggle').click(function () {
            var collapse_content_selector = $(this).attr('href');
            var toggle_switch = $(this);
            $(collapse_content_selector).toggle(function () {
                if ($(this).css('display') == 'none') {
                    toggle_switch.html('Read More');
                } else {
                    toggle_switch.html('Read Less');
                }
            });
        });

    });


</script>
<?php
// include footer.php file
include ('footer.php');
?>