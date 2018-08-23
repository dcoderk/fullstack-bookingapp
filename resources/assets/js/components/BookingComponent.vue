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
                    <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div><!--.row-->
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
