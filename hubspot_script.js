// script.js
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("subscription-form");
    var statusMessage = document.getElementById("status-message");

    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var email = form["email"].value;
        var firstName = form["fname"].value;
        var lastName = form["lname"].value;

        // HubSpot API settings
        var apiKey = 'pat-eu1-7039ed32-b1e9-4c72-b371-641025ae514f';
        // var listId = 'd55371d9d8';

        var url = `https://api.hubapi.com/contacts/v1/contact/createOrUpdate/email/${email}/?hapikey=${apiKey}`;
        var data = {
            properties: [
                { property: 'email', value: email },
                { property: 'firstname', value: firstName },
                { property: 'lastname', value: lastName }
            ]
        };

        fetch(url, {
            method: 'POST',
            method:'no-cors',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            if (result.status === "error") {
                statusMessage.textContent = "Subscription failed. Please try again.";
                alert('subscription failed');
            } else {
                alert('subscription success');
                statusMessage.textContent = "Subscription successful. Thank you!";
                form.reset();
            }
        })
        .catch(error => {
            console.error("Error:", error);
            statusMessage.textContent = "An error occurred. Please try again later.";
        });
    });
});
