<?php
 //Including the configuration file to establish the database connection
 include("DBConn.php");


//server details
$tableName = "tblcustomer";
$dataFile ="userData.txt";

// Check if table exists and drop it if it does
$sql = "DROP TABLE IF EXISTS $tableName";
if ($conn->query($sql) === TRUE) {
    echo "Table $tableName dropped successfully if it existed.\n";
} else {
    die("Error dropping table: " . $conn->error);
}

// Create table
$sql = "CREATE TABLE $tableName (
    CUSTOMER_ID INT AUTO_INCREMENT PRIMARY KEY,
    CUSTOMER_NAME VARCHAR(50) NOT NULL,
    CUSTOMER_SURNAME VARCHAR(50) NOT NULL,
    CUSTOMER_EMAIL VARCHAR(100) NOT NULL,
    DATE_OF_BIRTH DATE NOT NULL,
    COUNTRY VARCHAR(50) NOT NULL,
    PHONE_NUMBER VARCHAR(20) NOT NULL,
    PASSWORD VARCHAR(50) NOT NULL,
    CATEGORY VARCHAR(20) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table $tableName created successfully.\n";
} else {
    die("Error creating table: " . $conn->error);
}

// Read data from userData.txt file
$data = file($dataFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if ($data === FALSE) {
    die("Error reading data file.");
}

$users = [];
$current_user = [];
foreach ($data as $line) {
    if (strpos($line, '#') === 0) {
        if (!empty($current_user)) {
            $users[] = $current_user;
            $current_user = [];
        }
    } else {
        list($key, $value) = explode(":", $line, 2);
        $current_user[trim($key)] = trim($value);
    }
}
if (!empty($current_user)) {
    $users[] = $current_user;
}

// Insert data into the table
$stmt = $conn->prepare("INSERT INTO $tableName (CUSTOMER_NAME, CUSTOMER_SURNAME, CUSTOMER_EMAIL, DATE_OF_BIRTH, COUNTRY, PHONE_NUMBER, PASSWORD, CATEGORY) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $surname, $email, $dob, $country, $phone, $password, $category);

foreach ($users as $user) {
    $name = $user['CUSTOMER_NAME'];
    $surname = $user['CUSTOMER_SURNAME'];
    $email = $user['CUSTOMER_EMAIL'];
    $dob = $user['DATE_OF_BIRTH'];
    $country = $user['COUNTRY'];
    $phone = $user['PHONE_NUMBER'];
    $password = $user['PASSWORD'];
    $category = $user['CATERGORY'];
    $stmt->execute();
}

$stmt->close();
$conn->close();

echo "Data loaded into table $tableName successfully.";
?>