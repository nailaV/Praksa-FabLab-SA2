<?php 

require_once('/path/to/MailchimpMarketing/vendor/autoload.php');

$mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->set_config([
    'apiKey' => 'fb1941595bca7cff161deccf9406bb67-us8',
    'server' => 'us8'
]);

$list_id = "d55371d9d8";

try {
    $response = $mailchimp->lists->addListMember($list_id, [
        "email_address" => "prudence.mcvankab@example.com",
        "status" => "subscribed",
        "merge_fields" => [
          "FNAME" => "Prudence",
          "LNAME" => "McVankab"
        ]
    ]);
    print_r($response);
} catch (MailchimpMarketing\ApiException $e) {
    echo $e->getMessage();
}

?>