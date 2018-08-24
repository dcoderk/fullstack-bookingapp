<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-12">
                    <h2 class="text-center">Opening Text</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at euismod felis, et lacinia risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                    <p class="text-center">Phasellus scelerisque laoreet elementum. Quisque orci erat, sagittis sed arcu sed, gravida ultrices est. Nunc maximus augue sed accumsan vestibulum. Duis mattis, quam vel hendrerit blandit, dolor odio convallis velit, sed gravida turpis lacus quis libero. Aliquam quis diam non libero fermentum molestie.</p>
                </div>
                <div class="col-12 book-container">
                    <h2 class="text-center">Make a Booking</h2>
                    <div class="row justify-content-center">
                    <div class="col-9">
                    <el-form :label-position="labelPosition"  label-width="100px">
                        <el-form-item label="Name:">
                            <el-input v-model="booking.name"></el-input>
                        </el-form-item>
                        <el-form-item label="Your Dates:">
                          <div class="block">
                                <el-date-picker
                                v-model="booking.bookdate"
                                type="daterange"
                                start-placeholder="Start date"
                                end-placeholder="End date">
                                </el-date-picker>
                          </div>
                        </el-form-item>
                        <el-form-item label="Message:">
                            <el-input v-model="booking.message"></el-input>
                        </el-form-item>
                        <div class="float-right"><el-button type="primary" plain>PLACE BOOKING</el-button></div>  
                    </el-form>
                    </div>
                    </div><!--row form-->
                </div>

                <div class="col-12 book-container">
                    <h2 class="text-center">Booking List</h2>
                    <div class="row">
                        <div class="col-2">#</div>
                        <div class="col-4">Name</div>
                        <div class="col-5">Dates</div>
                    </div>
                     <hr>
                     <div class="row" v-for="booking in bookings" v-bind:key="booking.id">
                        <div class="col-2">{{booking.id}}</div>
                        <div class="col-4">{{booking.name}}</div>
                        <div class="col-5">{{booking.bookdate}}</div>
                        <div class="row">
                            <div class="col-12"> <p>{{booking.message}}</p></div>
                        </div>
                    </div> 
                </div>
                <div class="float-right">
                   <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#" @click.prevent="fetchBookings(pagination.prev_page_url)">Previous</a></li>
                        <li class="disabled page-item"><a class="page-link" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>
                        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click.prevent="fetchBookings(pagination.next_page_url)">Next</a></li>
                    </ul>
                    </nav>
                </div>

            </div>
        </div><!--.row-->
    </div>
</template>

<script>
    export default {
       data() {
            return {
                bookings:[],
                labelPosition: 'right',
                booking: {
                id: '',
                name: '',
                message: '',
                bookdate: ''
                },
                booking_id: '',
                pagination: {},
                edit: false                
            }
        },

        created() {
            this.fetchBookings();
        },
        methods: {
            fetchBookings(page_url) {
                // adding pagination
                let vm = this;
                page_url = page_url || 'api/bookings'
                fetch(page_url)
                  .then(res => res.json())
                  .then(res => {
                      this.bookings = res.data;
                      //pagination variable
                      vm.makePagination(res.meta, res.links);
                  })
                  .catch(err => console.log(err));
            },
            //pagination function
            makePagination(meta, links) {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                }

                this.pagination = pagination;
            }
        }
    }
</script>
