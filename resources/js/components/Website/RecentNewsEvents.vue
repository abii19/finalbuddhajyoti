<template>
    <div class="col-md-12">
        <div v-for="newsEvents in newsEventsData" class="recent-event">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img :src="newsEvents.photo" class="img-fluid-event" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <p class="col-md-6 col-sm-12">
                                    <i class="fas fa-calendar-alt"></i><span> {{newsEvents.data}}</span>
                                </p>
                                <p class="col-md-6 col-sm-12">
                                    <i class="fas fas fa-map-marker-alt"></i><span>Own School</span>
                                </p>
                            </div>
                            <h3>{{newsEvents.title}}</h3>
                            <p class="limited-text">
                                {{newsEvents.post}}
                            </p>
                            <button class="btn btn-outline-dark btn-event">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</template>

<script>
    export default {
        name: "RecentNewsEvents",

        data: function () {
            return {
                newsEventsData: [],
            }
        },
        mounted() {
            axios.get('/api/getRecentNewsEvents', {}).then(response => {
                this.newsEventsData = response.data.newsEvents;
            });
        }


    }
</script>

<style scoped>

</style>
