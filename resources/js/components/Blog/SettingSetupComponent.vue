<template>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Add Teacher
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 row">
                            <label class="ml-3">Full Name:</label>
                            <input type="text" v-model="name" class="form-control form-control-sm ml-3">

                        </div>

                        <div class="col-md-12 mt-3">
                            <label>Saying</label>
                            <textarea name="" id="" class="col-md-12" rows="7"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label class="ml-3">Education Degres</label>
                                <input type="text" v-model="degree" class=" ml-3 form-control form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <label>Upload</label>
                                <input type="file" @change="selectPhoto" accept="image/*"
                                       class="ml-3 form-control form-control-sm">

                                <span v-if="imageSelected">
                                        <img :src="imageSelected"
                                             alt=""
                                             class="img-thumbnail "
                                        ></span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>

        <div class="col-md-6">

        </div>

    </div>


</template>

<script>
    export default {
        name: "SettingSetupComponent",

        data: function () {
            return {
                imageSelected: "",
                name: ''

            }


        },

        methods: {

            selectPhoto: function (event) {
                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageSelected" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.imageSelected = e.target.result;
                    }
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
            }
        }


    }
</script>

<style scoped>

</style>
