function uradiDodavanje(){


    const MailchimpMarketing = require('/path/to/MailchimpMarketing/vendor/autoload.php');
    const mailchimp = new MailchimpMarketing.ApiClient();
    mailchimp.set_config({
        apiKey: 'fb1941595bca7cff161deccf9406bb67-us8',
        server: 'us8'
    });
    const list_id = "d55371d9d8";
    try {
        const response = mailchimp.lists.addListMember(list_id, {
            email_address: "prudence.mcvankab@example.com",
            status: "subscribed",
            merge_fields: {
              FNAME: "Prudence",
              LNAME: "McVankab"
            }
        });
        console.log(response);
    } catch (e) {
        console.log(e.message);
    }
    
    }