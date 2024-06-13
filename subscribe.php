<?php
require __DIR__ . '/vendors/vendor/autoload.php'; // Include Google API Client Library

// Specify your Google Sheet ID and range
$spreadsheetId = '19Oi3L4flO4v5sjBG3kLxnNzeAegIoNfltmdK3xUXQ7U';
$range = 'Sheet1';

// Create Google Client object
$client = new Google_Client();
$client->setApplicationName('smithmotors');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__.'/vendors/google_sheet_credential.json'); // Path to your credentials JSON file


// Initialize Sheets service
$service = new Google_Service_Sheets($client);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    date_default_timezone_set('Asia/Kolkata');
    $email = $_POST['email'];
    $currentDateTime = date('Y-m-d H:i:s');
    // Prepare request body
    $values = [
        [$email, $currentDateTime]
    ];
    $requestBody = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    // Send request to update Google Sheet
    $response = $service->spreadsheets_values->append($spreadsheetId, $range, $requestBody, [
        'valueInputOption' => 'RAW'
    ]);

    // Check for success
    if ($response->getUpdates()->getUpdatedCells() > 0) {
        header("Location: index.php?success=true");
    } else {
        header("Location: index.php?success=false");
    }
}
