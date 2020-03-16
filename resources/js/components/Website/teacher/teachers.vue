<template>
    <div>
        <div class="container">
            <div class="mid-level-teacher">
                <h2 class="teacher_title">Mid Level Teacher</h2>
                <div class="row">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="col-md-4 swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/teacher_1.jpg" class="card-img-top" alt="">
                                    <div class="card-body text-center text-white">
                                        <h5 class="card-title">Teacher Name</h5>
                                        <br/>
                                        <p class="teacher_post">Post</p>
                                        <p class="card-text">Icons</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/teacher_5.jpg" class="card-img-top" alt="">
                                    <div class="card-body text-center text-white">
                                        <h5 class="card-title">Teacher Name</h5>
                                        <br/>
                                        <p class="teacher_post">Post</p>
                                        <p class="card-text">Icons</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/teacher_2.jpg" class="card-img-top" alt="">
                                    <div class="card-body text-center text-white">
                                        <h5 class="card-title">Teacher Name</h5>
                                        <br/>
                                        <p class="teacher_post">Post</p>
                                        <p class="card-text">Icons</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/teacher_3.jpg" class="card-img-top" alt="">
                                    <div class="card-body text-center text-white">
                                        <h5 class="card-title">Teacher Name</h5>
                                        <br/>
                                        <p class="teacher_post">Post</p>
                                        <p class="card-text">Icons</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 swiper-slide">
                                <div class="card" style="width: 18rem;">
                                    <img src="images/teacher_4.jpg" class="card-img-top" alt="">
                                    <div class="card-body text-center text-white">
                                        <h5 class="card-title">Teacher Name</h5>
                                        <br/>
                                        <p class="teacher_post">Post</p>
                                        <p class="card-text">Icons</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="primary-level-teacher">
                <h2 class="teacher_title">Primary Level Teacher</h2>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="col-md-4 swiper-slide">
                            <div class="card" style="width: 18rem;">
                                <img src="images/teacher_1.jpg" class="card-img-top" alt="">
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title">Teacher Name</h5>
                                    <br/>
                                    <p class="teacher_post">Post</p>
                                    <p class="card-text">Icons</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 swiper-slide">
                            <div class="card" style="width: 18rem;">
                                <img src="images/teacher_5.jpg" class="card-img-top" alt="">
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title">Teacher Name</h5>
                                    <br/>
                                    <p class="teacher_post">Post</p>
                                    <p class="card-text">Icons</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 swiper-slide">
                            <div class="card" style="width: 18rem;">
                                <img src="images/teacher_2.jpg" class="card-img-top" alt="">
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title">Teacher Name</h5>
                                    <br/>
                                    <p class="teacher_post">Post</p>
                                    <p class="card-text">Icons</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 swiper-slide">
                            <div class="card" style="width: 18rem;">
                                <img src="images/teacher_3.jpg" class="card-img-top" alt="">
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title">Teacher Name</h5>
                                    <br/>
                                    <p class="teacher_post">Post</p>
                                    <p class="card-text">Icons</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 swiper-slide">
                            <div class="card" style="width: 18rem;">
                                <img src="images/teacher_4.jpg" class="card-img-top" alt="">
                                <div class="card-body text-center text-white">
                                    <h5 class="card-title">Teacher Name</h5>
                                    <br/>
                                    <p class="teacher_post">Post</p>
                                    <p class="card-text">Icons</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                </div>
            </div>
        </div>
        <fotter-component></fotter-component>
    </div>
</template>

<script>
    import fotterComponent from "../fotterComponent";
    export default {
        name: "teachers",
        component: {
            fotterComponent
        },
        data:  function(){
          return {
            teachers:[]
          }
        },

        mounted() {
          axios.get('/api/fetchWebsiteTeachers', {}).then(resp=>{
            this.teachers = resp.data.teacher;
          })

        },


    }
</script>

<style scoped>
    .teacher-page {
        padding: 50px 0 50px 0;
        background: #f8f8f8;
    }

    .higher-level-teacher, .mid-level-teacher {
        margin-bottom: 30px;
    }
    .higher-level-teacher .row{
        margin-bottom: 25px;
    }

    .mid-level-teacher .card-body {
        cursor: pointer;
        background: #262626;
        transition: 1s;
    }
    .primary-level-teacher .card-body {
        cursor: pointer;
        background: #262626;
        transition: 1s;
    }

    .mid-level-teacher .card:hover > .card-body {
        background: #ffb606;
        color: #262626;
    }
    .primary-level-teacher .card:hover > .card-body {
        background: #ffb606;
        color: #262626;
    }

    .teacher_title {
        color: #ff9800;
        margin-bottom: 15px;
    }

    .teacher_title::after {
        content: '';
        display: block;
        width: 200px;
        height: 2px;
        background: #f8611a;
        margin-top: 7px;
    }

    .teacher_post {
        font-size: 15px;
    }

    .teacher_post::after {
        content: '';
        display: block;
        width: 20%;
        height: 1px;
        background: #dddddd;
        margin-top: 17px;
        margin-left: 40%;
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #262626;
    }

    .swiper-pagination-bullet-active {
        width: 15px;
        height: 15px;
        background-color: #262626;
    }
</style>
