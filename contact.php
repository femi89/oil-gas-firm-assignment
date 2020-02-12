<?php
$root = './';
$title = 'Contact';
require_once $root.'public/general.php';
$theme = new Template($root);

echo $theme->header($title); //import header
?>
<!-- Start: header -->
<header>
    <!-- Start: navigation -->
    <?php echo $theme->nav('contact');?>
    <!-- End: navigation -->
</header>
<!-- End: header -->
    <main>
        <div class="page-hero" style="background-image: url(&quot;assets/img/engineer-in-red-uniform-with-yellow-hard-hat-by-marsb-platform-construction.jpeg&quot;);height: 228px;"></div>
        <div class="container bg-white page-title">
            <div class="row">
                <div class="col">
                    <h1 class="title">Contact us</h1>
                    <p class="mb-1">For specific comments and enquiries about oil &amp; gas industry, use the contact form below.</p>
                    <p>or message <?php echo emailLink($site_data['email']); ?></p>
                </div>
            </div>
        </div>
        <!-- Start: contact form -->
        <div class="block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form id="contact_form" method="post" action="mail.php">
                            <p>All fields are compulsory</p>
                            <div class="form-group"><label>Name</label>
                                <input class="form-control form-control-lg" type="text" name="name" value="" required aria-required="true"  id="name"></div>
                            <div class="form-group"><label>Email</label>
                                <input class="form-control form-control-lg" type="email" id="email" name="email" required aria-required="">
                            </div>
                            <div class="form-group"><label>Message</label>
                                <textarea class="form-control" rows="5" name="message" wrap="soft" required aria-required="true" id="message"></textarea>
                            </div>
                            <div id="feedback">
                                <button class="btn btn-primary" type="submit" id="contact" >Submit</button>
                            </div>
                             </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: contact form -->
    </main>
    <!-- Start: footer -->
    <?php
    echo $theme->footer(); //
    ?>
<script>
    //silently submit the form data without page loading
    $(document).ready(function () {
        $("#contact_form").submit(function(event){
            event.preventDefault();
            document.getElementById('feedback').innerHTML = '<?php echo loading();?>';//display loading message
            let $form = $(this); //assign the form instant values to variable
            $.ajax({
                type:'POST',
                url: $form.attr('action'),
                data: $form.serialize(),
                success:function (data) {
                    //response from data processing after successful connection
                    document.getElementById('feedback').innerHTML = data;
                },
                error:function (error) {
                    //error message
                }
            });
        });
    });

</script>
    <!-- End: footer -->
</body>
</html>