<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="topmenu">
                    <span class="logo"><img src="images/logo.svg"></span>
                    <span class="float-right">
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
