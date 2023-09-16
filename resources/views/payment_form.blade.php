<!DOCTYPE html>
<html>
<head>
    <title>Stripe Checkout</title>
</head>
<body>
    <button id="checkout-button">Pay $20</button>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('pk_test_51JuDqCAqh7AKIhCaTyMcqyK7U2siYseiApyMYyOgHyV07QZX6diFnGgsTCrQXzRR2DWfogkRcpVU6yaNxhcQKzSL006kLMKTX1');

        const checkoutButton = document.getElementById('checkout-button');
        const csrfToken = "{{ csrf_token() }}";

        checkoutButton.addEventListener('click', () => {
            fetch('/create-checkout-session', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
            })
            .then(response => response.json())
            .then(session => {
                return stripe.redirectToCheckout({ sessionId: session.id });
            })
            .then(result => {
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
