<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['user']) || !isset($_SESSION['expire_at']) || time() > $_SESSION['expire_at']) {
    // Session missing or expired
    echo json_encode([
        "status" => "error",
        "message" => "No active session"
    ]);
    exit;
}

// Return detailed user profile data
$user = $_SESSION['user'];

// Add some additional profile data (you can expand this based on your needs)
$profileData = [
    "status" => "success",
    "user" => $user,
    "profile" => [
        "student_id" => "UM-" . strtoupper(substr($user['username'], 0, 3)) . "-" . date('Y', strtotime($user['created_at'])),
        "department" => getDepartmentByEmail($user['email']),
        "year_level" => getYearLevel($user['created_at']),
        "enrollment_status" => "Active",
        "academic_year" => "2025-2026",
        "semester" => "1st Semester",
        "total_units" => 21,
        "gpa" => number_format(rand(250, 400) / 100, 2),
        "sports_registered" => getSportsRegistered($user['username']),
        "achievements" => getAchievements($user['username']),
        "contact_info" => [
            "phone" => generatePhoneNumber(),
            "address" => getAddressByCountry($user['country']),
            "emergency_contact" => "Parent/Guardian"
        ]
    ]
];

echo json_encode($profileData);

// Helper functions
function getDepartmentByEmail($email) {
    $departments = [
        "College of Engineering",
        "College of Business Administration", 
        "College of Medicine",
        "College of Information Technology",
        "College of Arts and Sciences",
        "College of Education",
        "College of Nursing",
        "College of Law"
    ];
    
    // Simple hash-based assignment for consistency
    $hash = crc32($email);
    return $departments[abs($hash) % count($departments)];
}

function getYearLevel($createdAt) {
    $yearsSinceCreation = date('Y') - date('Y', strtotime($createdAt));
    $levels = ["1st Year", "2nd Year", "3rd Year", "4th Year"];
    return $levels[min($yearsSinceCreation, 3)];
}

function getSportsRegistered($username) {
    // Simulate sports registration based on username
    $allSports = ["Basketball", "Volleyball", "Badminton", "Swimming", "Track & Field", "Football"];
    $hash = crc32($username);
    $numSports = (abs($hash) % 3) + 1; // 1-3 sports
    
    $registeredSports = [];
    for ($i = 0; $i < $numSports; $i++) {
        $sport = $allSports[($hash + $i) % count($allSports)];
        if (!in_array($sport, $registeredSports)) {
            $registeredSports[] = $sport;
        }
    }
    
    return $registeredSports;
}

function getAchievements($username) {
    $achievements = [
        ["title" => "First Year Participant", "date" => "2024-10-15", "type" => "participation"],
        ["title" => "Team Player Award", "date" => "2024-11-20", "type" => "recognition"],
        ["title" => "Perfect Attendance", "date" => "2025-01-30", "type" => "academic"]
    ];
    
    // Add random achievements based on username
    $hash = abs(crc32($username));
    if ($hash % 5 == 0) {
        $achievements[] = ["title" => "MVP - Basketball", "date" => "2025-03-15", "type" => "sports"];
    }
    if ($hash % 7 == 0) {
        $achievements[] = ["title" => "Champion - Swimming", "date" => "2025-04-10", "type" => "sports"];
    }
    if ($hash % 3 == 0) {
        $achievements[] = ["title" => "Dean's List", "date" => "2025-06-01", "type" => "academic"];
    }
    
    return $achievements;
}

function generatePhoneNumber() {
    return "+63 9" . rand(100000000, 999999999);
}

function getAddressByCountry($country) {
    $addresses = [
        "ph" => "Davao City, Philippines",
        "us" => "California, United States", 
        "jp" => "Tokyo, Japan",
        "de" => "Berlin, Germany"
    ];
    
    return $addresses[$country] ?? "Unknown Location";
}
?>