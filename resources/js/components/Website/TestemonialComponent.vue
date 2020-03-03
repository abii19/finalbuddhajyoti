<template>
    <div class="">
        <div class="container">
            <h1>Testonomials</h1>
            <p class="text-center text-white" style="font-size: 22px;">Sayings of Different Peoples</p>

            <div class="swiper-container">
                <div class="swiper-wrapper mb-4">
                   <!-- <div v-for="testemonials in testemonial">
                        <div class="col-md-4 text-center swiper-slide">
                            <div class="profile">
                                <img :src="testemonials.photo" class="testonomial-user">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                    dolor
                                    enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                    reiciendis saepe suscipit veritatis vero vitae! Quis.
                                </blockquote>
                                <h3> Testimonials Name <span> Post at ..... </span></h3>
                            </div>
                        </div>
                    </div>-->

                    <div class="col-md-4 text-center swiper-slide">
                        <div class="profile">
                            <img src="images/teacher_2.jpg" class="testonomial-user">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                dolor
                                enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                reiciendis saepe suscipit veritatis vero vitae! Quis.
                            </blockquote>
                            <h3> Testonomilar Name <span> Post ..... </span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center swiper-slide">
                        <div class="profile">
                            <img src="images/teacher_4.jpg" class="testonomial-user">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                dolor
                                enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                reiciendis saepe suscipit veritatis vero vitae! Quis.
                            </blockquote>
                            <h3> Testonomilar Name <span> Post ..... </span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center swiper-slide">
                        <div class="profile">
                            <img src="images/teacher_5.jpg" class="testonomial-user">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                dolor
                                enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                reiciendis saepe suscipit veritatis vero vitae! Quis.
                            </blockquote>
                            <h3> Testonomilar Name <span> Post at ..... </span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 text-center swiper-slide">
                        <div class="profile">
                            <img src="images/teacher_6.jpg" class="testonomial-user">
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut deserunt
                                dolor
                                enim expedita, fuga in molestias nihil nobis nulla numquam omnis quibusdam
                                reiciendis saepe suscipit veritatis vero vitae! Quis.
                            </blockquote>
                            <h3> Testonomilar Name <span> Post ..... </span></h3>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination" style="margin-top: -20px;"></div>

            </div>

        </div>

    </div>
    <!--                    Remove it Later after Successfully testemonial works-->


</template>

<script>
    export default {
        name: "TestemonialComponent",
        data: function () {
            return {
                testemonial: [],
            }
        },
        mounted() {
            var swiper = new Swiper('.swiper-wrapper', {

            });

            axios.get('/api/fetchTestemonial', {}).then(response => {
                this.testemonial = response.data.testemonial;

            });
        }


    }
</script>

<style scoped>

</style>
