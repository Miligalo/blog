<!DOCTYPE html>
<html>
<head>
    <title>Subscribe to a cool new product</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<section>
    <div class="product">
        <div class="description">
            <h3>Base plan</h3>
            <h5>$5.00 / month</h5>
        </div>
    </div>
    <form action="{{route('stripe.create-charge')}}" method="POST">
        @csrf
        <!-- Add a hidden field with the lookup_key of your Price -->
        <input type="hidden" name="lookup_key" value="{{env('PRICE_LOOKUP_KEY')}}" />
        <button id="checkout-and-portal-button" type="submit">Checkout</button>
    </form>
</section>
</body>
</html>
