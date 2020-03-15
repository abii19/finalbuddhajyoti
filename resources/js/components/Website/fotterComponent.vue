<template>
    <div class="footer_content">
        <div class="row">

            <!-- Footer Column - About -->
            <div class="col-lg-3 footer_col">

                <!-- Logo -->
                <div class="logo_container">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                        <span>course</span>
                    </div>
                </div>

                <p class="footer_about_text text-white">In aliquam, augue a gravida rutrum, ante nisl
                    fermentum
                    nulla,
                    vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor
                    fermentum,
                    tempor
                    lacus.</p>

            </div>

            <!-- Footer Column - Menu -->

            <div class="col-lg-3 footer_col">
                <div class="footer_column_title">Menu</div>
                <div class="footer_column_content">
                    <ul>
                        <li class="footer_list_item"><a href="#">Home</a></li>
                        <li class="footer_list_item"><a href="#">About Us</a></li>
                        <li class="footer_list_item"><a href="courses.blade.php">Courses</a></li>
                        <li class="footer_list_item"><a href="News/index.blade.php">News</a></li>
                        <li class="footer_list_item"><a href="contact.blade.php">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Column - Usefull Links -->

            <div class="col-lg-3 footer_col">
                <div class="footer_column_title">Usefull Links</div>
                <div class="footer_column_content">
                    <ul>
                        <li class="footer_list_item"><a href="#">Testimonials</a></li>
                        <li class="footer_list_item"><a href="#">FAQ</a></li>
                        <li class="footer_list_item"><a href="#">Community</a></li>
                        <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                        <li class="footer_list_item"><a href="#">Tuitions</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Column - Contact -->

            <div class="col-lg-3 footer_col">
                <div class="footer_column_title">Contact</div>
                <div class="footer_column_content">
                    <div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Buddha%20Jyoti%20Eng&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.bitgeeks.net"></a></div></div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "fotterComponent"
    }
</script>

<style scoped>
    .mapouter{position:relative;text-align:right;height:500px;width:600px;}
    .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
</style>
