<?php
// Define the user data
$users = [
    [
        "CUSTOMER_ID" => "001",
        "CUSTOMER_NAME" => "John",
        "CUSTOMER_SURNAME" => "Doe",
        "CUSTOMER_EMAIL" => "j.doe@abc.co.za",
        "DATE_OF_BIRTH" => "1985-05-15",
        "COUNTRY" => "South Africa",
        "PHONE_NUMBER" => "+27111234567",
        "PASSWORD" => "296548hjh",
        "CATERGORY" => "Premium"
    ],
    [
        "CUSTOMER_ID" => "002",
        "CUSTOMER_NAME" => "Jane",
        "CUSTOMER_SURNAME" => "Smith",
        "CUSTOMER_EMAIL" => "j.smith@xyz.co.za",
        "DATE_OF_BIRTH" => "1990-08-22",
        "COUNTRY" => "South Africa",
        "PHONE_NUMBER" => "+27112345678",
        "PASSWORD" => "d73js8j92",
        "CATERGORY" => "Standard"
    ],
    [
        "CUSTOMER_ID" => "003",
        "CUSTOMER_NAME" => "Mike",
        "CUSTOMER_SURNAME" => "Johnson",
        "CUSTOMER_EMAIL" => "m.johnson@demo.co.za",
        "DATE_OF_BIRTH" => "1978-12-02",
        "COUNTRY" => "South Africa",
        "PHONE_NUMBER" => "+27113456789",
        "PASSWORD" => "82hgd8s7f",
        "CATERGORY" => "Standard"
    ],
    [
        "CUSTOMER_ID" => "004",
        "CUSTOMER_NAME" => "Emily",
        "CUSTOMER_SURNAME" => "Davis",
        "CUSTOMER_EMAIL" => "e.davis@test.co.za",
        "DATE_OF_BIRTH" => "1995-07-11",
        "COUNTRY" => "South Africa",
        "PHONE_NUMBER" => "+27114567890",
        "PASSWORD" => "pl87d73nd",
        "CATERGORY" => "Basic"
    ],
    [
        "CUSTOMER_ID" => "005",
        "CUSTOMER_NAME" => "Chris",
        "CUSTOMER_SURNAME" => "Brown",
        "CUSTOMER_EMAIL" => "c.brown@sample.co.za",
        "DATE_OF_BIRTH" => "1982-03-29",
        "COUNTRY" => "South Africa",
        "PHONE_NUMBER" => "+27115678901",
        "PASSWORD" => "kz8d9fnv1",
        "CATERGORY" => "Premium"
    ]
];

// Create and open a text file in write mode
$file = fopen("userData.txt", "w");

// Write each user entry with the specified format
foreach ($users as $index => $user) {
    fwrite($file, "#" . ($index + 1) . "\n");
    foreach ($user as $key => $value) {
        fwrite($file, "$key:$value\n");
    }
    fwrite($file, "\n");
}

// Close the file
fclose($file);

echo "File userData.txt created and populated successfully.";
?>
