
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("newsletter-form");
    var statusMessage = document.getElementById("status-message");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var email = form["email"].value;
        var firstName = form["fname"].value;
        var lastName = form["lname"].value;

        // MailChimp API settings
        var apiKey = 'fb1941595bca7cff161deccf9406bb67-us8';
        var listId = 'd55371d9d8';

        var url = `https://us8.api.mailchimp.com/3.0/lists/${listId}/members`;
        var data = {
            email_address: email,
            status: "subscribed",
            merge_fields: {
                FNAME: firstName,
                LNAME: lastName
            }
        };

        fetch(url, {
            method: 'POST',
            mode:'no-cors',
            headers: {
                'Authorization': `Basic ${btoa('anystring:' + apiKey)}`, // Basic authentication
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            if (result.status === "subscribed") {
                statusMessage.textContent = "Subscription successful. Thank you!";
                form.reset();
            } else {
                statusMessage.textContent = "Subscription failed. Please try again.";
            }
        })
        // .catch(error => {
        //     console.error("Error:", error);
        //     statusMessage.textContent = "An error occurred. Please try again later.";
        // });
    });
});
