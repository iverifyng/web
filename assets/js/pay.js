//Topup Script
const topup = document.getElementById("topupForm");
topup.addEventListener("submit", topupNow);

function topupNow(e) {
    //Prevent form submit
    e.preventDefault();

    //Set Flutterwave Configuration
    FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-2537c26ff47112d9f29dba12744a16c3-X",
        tx_ref: "REF_"+Math.floor((Math.random()*1000000000)+1),
        amount: document.getElementById("amount").value,
        currency: "NGN",
        redirect_url: "verify-payment",
        payment_options: " ",
        customer: {
            email: document.getElementById("email").value,
            name: document.getElementById("name").value,
        },
    });
}
