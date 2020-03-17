<template>
    <div class="">
        <section class="founding-members">
            <div class="container">
                <div class="row">
                    <div class="mb-2">
                        <h2 class="title-top">Founding Members</h2>
                        <hr class="bg-base-color separator-line">
                    </div>
                </div>
                <!--<div class="row ">
                    <div class="mb-4">
                        <h2 class="title-top">Founding Members</h2>
                        <hr class="bg-base-color separator-line">
                    </div>
                </div>-->
                <div class="row d-flex justify-content-center container-part">
                    <div class="card">
                        <div class="content">
                            <h2>
                                <img src="images/teacher_1.jpg" class="img-fluid member-img"
                                     alt="Image of founding memmber">
                            </h2>

                            <a href="">Member Name</a>
                            <p class="mt-2">
                                High Post he/she has been <br/>
                                Active Year on School
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h2>
                                <img src="images/teacher_1.jpg" class="img-fluid member-img"
                                     alt="Image of founding memmber">
                            </h2>

                            <a href="">Member Name</a>
                            <p class="mt-2">
                                High Post he/she has been <br/>
                                Active Year on School
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h2>
                                <img src="images/teacher_1.jpg" class="img-fluid member-img"
                                     alt="Image of founding memmber">
                            </h2>

                            <a href="">Member Name</a>
                            <p class="mt-2">
                                High Post he/she has been <br/>
                                Active Year on School
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h2>
                                <img src="images/teacher_1.jpg" class="img-fluid member-img"
                                     alt="Image of founding memmber">
                            </h2>

                            <a href="">Member Name</a>
                            <p class="mt-2">
                                High Post he/she has been <br/>
                                Active Year on School
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h2>
                                <img src="images/teacher_1.jpg" class="img-fluid member-img"
                                     alt="Image of founding memmber">
                            </h2>

                            <a href="">Member Name</a>
                            <p class="mt-2">
                                High Post he/she has been <br/>
                                Active Year on School
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h2>
                                <img src="images/teacher_1.jpg" class="img-fluid member-img"
                                     alt="Image of founding memmber">
                            </h2>

                            <a href="">Member Name</a>
                            <p class="mt-2">
                                High Post he/she has been <br/>
                                Active Year on School
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</template>

<script>
    export default {
        name: "foundingMembers"
    }
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap');

    .founding-members{
        padding: 50px 0;
        background: #ffffff;
    }

    img {
        top: 0;
        position: relative;
        box-shadow: 0 15px 20px rgba(0, 0, 0, 0.4);
    }

    .member-img {
        width: 135px;
        height: 135px;
        border-radius: 50%;
    }

    .content p {
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        /*max-width: 1000px;
        position: relative;*/
        display: flex;
        /*justify-content: center;*/
        flex-wrap: wrap;
        transition: 0.5s;
    }

    .container-part:hover .card {
        filter: blur(5px);
        transform: scale(.7);
    }

    .container .card {
        position: relative;
        width: 250px;
        height: 300px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
        margin-right: 10px;
    }

    .container .card:hover {
        filter: blur(0px);
        transform: scale(1);
    }

    .container .card:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: #fff;
        z-index: 1;
        transition: 0.5s;
    }

    .container .card:hover:before {
        background: #000;
        transform: scaleY(1.15);
        /*box-shadow: 0 5px 15px rgba(0, 0, 0, .2);*/
    }

    .container .card:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        transition: 0.5s;
        background: rgba(255, 255, 255, .1);
        z-index: 1;
    }

    .container .card:hover:after {
        transform: scaleY(1.15);
    }

    .container .card:hover {
        z-index: 1;
    }

    .container .card .content {
        text-align: center;
        z-index: 2;
        padding: 0 20px;
        transition: 0.5s;
    }

    .container .card:hover .content {
        color: #fff;
    }

    .container .card .content h2 {
        font-size: 3em;
    }


    .container .card .content a {
        display: inline-block;
        margin-top: 15px;
        padding: 5px 10px;
        background: #262626;
        color: #fff;
        text-decoration: none;
    }

    .container .card:hover .content a {
        background: #2196F3;
    }
</style>
