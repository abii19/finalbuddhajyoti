<template>

    <div class="container-fluid">

        <el-upload
            action="#"
            list-type="picture-card"
            :on-preview="handlePictureCardPreview"
            :on-remove="handleRemove">
            <i class="el-icon-plus"></i>
        </el-upload>
        <el-dialog :visible.sync="dialogVisible">
            <img width="100%" :src="dialogImageUrl" alt="">
        </el-dialog>
    </div>
</template>

<script>
    export default {
        name: "ForntPicComponent",

        data() {
            return {
                dialogImageUrl: '',
                dialogVisible: false,
                image:[],
            };
        },
        methods: {
            handleRemove(file, fileList) {
                console.log(file, fileList);
            },
            handlePictureCardPreview(file) {
                this.dialogImageUrl = file.url;
                this.dialogVisible = true;
            }
        }
    }
</script>

<style scoped>

</style>
