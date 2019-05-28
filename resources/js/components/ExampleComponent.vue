<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Payment Form</div>
                    <div class="card-body">
                        <form action="/payment/add-funds/paypal" method="get" id="payment-form" >
                            <p>Demo Paypal Form</p>
                            <div class="form-group">
                                <label for="pwd">Enter Amount:</label> <input type="text"
                                    class="form-control" name="amount" >
                            </div>
                            <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        http: {
            headers: {
                'X-CSRF-TOKEN': window.Laravel.csrfToken
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
