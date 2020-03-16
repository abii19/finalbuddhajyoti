<template>
    <div>
        <section class="message-desk">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12" style="height: 350px; background: #2d3e50">
                        <div class="text-white m-3">
                            <h1 class="ex-large-800 text-right">Chairman</h1>
                            <h3 class="large-700 text-right">Chairman Name</h3>
                            <h3 class="text-right" style="font-weight: 400 !important;">Degree</h3>
                            <p class="text-justify mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur consequatur corporis dolore ea eaque eum harum illum ipsa, obcaecati quod sed veritatis voluptas voluptate voluptatem! Accusantium perferendis praesentium voluptatem?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis deleniti deserunt, ea eius esse exercitationem in itaque laboriosam libero minus mollitia necessitatibus nihil provident quae, veniam voluptatem? Dolorem, sed?</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12"
                         style="background-image: url('./images/yugalPic.jpg'); height: 350px; background-size: cover;">

                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 img-fluid"
                         style="background-image: url('./images/yugalPic.jpg'); height: 350px; background-size: cover;">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" style="height: 350px; background: #2d3e50">
                        <div class="text-white m-3">
                            <h1 class="ex-large-800">Principal</h1>
                            <h3 class="large-700">Principal Name</h3>
                            <h3 class="" style="font-weight: 400 !important;">Degree</h3>
                            <p class="text-justify mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aspernatur consequatur corporis dolore ea eaque eum harum illum ipsa, obcaecati quod sed veritatis voluptas voluptate voluptatem! Accusantium perferendis praesentium voluptatem?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis deleniti deserunt, ea eius esse exercitationem in itaque laboriosam libero minus mollitia necessitatibus nihil provident quae, veniam voluptatem? Dolorem, sed?</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</template>

<script>
    export default {
        name: "messageSection"
    }
</script>

<style scoped>

    .message-desk {
        padding: 0 0 0 0;
    }
/*
    .message-box {
        box-sizing: border-box;
        border-radius: 10px;
        color: #262626;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .message-box-name {
        text-align: center;
        background: #262626;
        border-radius: 10px 10px 0 0;
        letter-spacing: 1px;
    }

    .message-box-name h3 {
        padding-bottom: 15px;
        color: #ff9800;
        !*font-family: 'Anton', sans-serif;*!
    }

    .message-box-name h3::before {
        content: '';
        display: block;
        height: 4px;
        width: 25%;
        background: #f44336;
        margin-bottom: 10px;
        margin-left: 37.5%;
    }

    .message-box-content {
        padding: 15px 20px 20px 20px;
        background: #ffffff;
        margin-top: -8px;
    }

    .message-box-img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        float: left;
        shape-outside: circle();
        margin: 2px 20px 10px 2px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    }*/

    .message-desk p {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 15px;
        -webkit-font-smoothing: antialiased;
        letter-spacing: .02em;
        line-height: 23px;
    }

    /* @media screen and (max-width: 991px){
         .message-box-chairman{
             transform: translateY(-40px);
         }
         .message-box-principal {
             transform: translateY(40px);
         }

     }

     @media screen and (min-width: 992px) {
         .message-box{
             box-sizing: border-box;
             border-radius: 10px;
             color: #262626;
             box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
         }
         .message-box-chairman {
             transform: translateY(-109px);
         }
         .message-box-principal {
             transform: translateY(-50px);
         }
     }*/

</style>
