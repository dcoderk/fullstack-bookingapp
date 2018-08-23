<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-12">
                    <h2 class="text-center">Opening Text</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at euismod felis, et lacinia risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                    <p class="text-center">Phasellus scelerisque laoreet elementum. Quisque orci erat, sagittis sed arcu sed, gravida ultrices est. Nunc maximus augue sed accumsan vestibulum. Duis mattis, quam vel hendrerit blandit, dolor odio convallis velit, sed gravida turpis lacus quis libero. Aliquam quis diam non libero fermentum molestie.</p>
                </div>
                <div class="col-12">
                    <h2 class="text-center">Make a Booking</h2>
                    <div class="row justify-content-center">
                    <div class="col-9">
                    <el-form :label-position="labelPosition" label-width="100px" :model="formLabelAlign">
                        <el-form-item label="Name:">
                            <el-input v-model="formLabelAlign.name"></el-input>
                        </el-form-item>
                        <el-form-item label="Your Dates:">
                          <div class="block">
                                <el-date-picker
                                v-model="bookdate"
                                type="daterange"
                                start-placeholder="Start date"
                                end-placeholder="End date">
                                </el-date-picker>
                          </div>
                        </el-form-item>
                        <el-form-item label="Message:">
                            <el-input v-model="formLabelAlign.message"></el-input>
                        </el-form-item>
                    </el-form>
                    </div>
                    </div><!--row form-->
                </div>

                <div class="col-12">
                    <h2 class="text-center">Booking List</h2>
                    <div class="row">
                        <div class="col-2">#</div>
                        <div class="col-3">Name</div>
                        <div class="col-6">Dates</div>
                    </div>
                     <hr>
                     <div class="row">
                        <div class="col-2">1</div>
                        <div class="col-3">{{formLabelAlign.name}}</div>
                        <div class="col-6">{{bookdate}}</div>
                    </div>
                    <div class="row">
                        <div class="col-12"> <p>{{formLabelAlign.message}}</p></div>
                    </div>
                </div>
            </div>
        </div><!--.row-->
    </div>
</template>

<script>
    export default {
       data() {
            return {
                labelPosition: 'right',
                formLabelAlign: {
                name: '',
                message: ''
                },
                bookdate: ''
            };
        }
    }
</script>
