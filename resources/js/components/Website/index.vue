<template>
    <div>
        <section class="testonomial-desk">
                    <!-- Swiper -->
                            <testemonials></testemonials>
                        <!-- Add Pagination -->

        </section>

        <section class="event-desk">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section_title text-center mb-2">
                            <h2>Recent News and Events</h2>
                        </div>
                        <news-events></news-events>
                    </div>

                    <div class="col-md-6">
                        <div class="section_title text-center mb-2">
                            <h2>Upcoming Events</h2>
                        </div>
                        <upcoming-events></upcoming-events>
                    </div>
                </div>
            </div>
        </section>
    </div>

</template>

<script>
    import recentNewsEvents from './RecentNewsEvents'
    import upcomingEvents from './UpcomingEvents'
    import testemonials from './TestemonialComponent'

    export default {
        name: "index",

        components: {
            recentNewsEvents,
            upcomingEvents,
            testemonials,

        }

    }
</script>

<style scoped>

</style>
