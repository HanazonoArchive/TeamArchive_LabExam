document.addEventListener("DOMContentLoaded", async () => {
    const BASE_URL = "/TeamArchive_LabExam/source-code";
    
    // Show loading state initially
    showLoadingState();
    
    try {
        // Fetch student profile data
        const response = await fetch(BASE_URL + "/Controller/studentController.php");
        const data = await response.json();
        
        if (data.status === "error") {
            // User not logged in, show access denied
            showAccessDenied();
            return;
        }
        
        // Populate student profile
        populateProfile(data);
        showProfileContent();
        
    } catch (error) {
        console.error("Error fetching student data:", error);
        showAccessDenied();
    }
});

function showLoadingState() {
    document.getElementById("loading-state").style.display = "block";
    document.getElementById("access-denied").style.display = "none";
    document.getElementById("profile-content").style.display = "none";
}

function showAccessDenied() {
    document.getElementById("loading-state").style.display = "none";
    document.getElementById("access-denied").style.display = "block";
    document.getElementById("profile-content").style.display = "none";
}

function showProfileContent() {
    document.getElementById("loading-state").style.display = "none";
    document.getElementById("access-denied").style.display = "none";
    document.getElementById("profile-content").style.display = "block";
}

function populateProfile(data) {
    const { user, profile } = data;
    
    // Basic Information
    document.getElementById("student-name").textContent = user.fullname;
    document.getElementById("student-id").textContent = profile.student_id;
    document.getElementById("student-department").textContent = profile.department;
    
    // Badges
    document.getElementById("year-level-badge").textContent = profile.year_level;
    document.getElementById("status-badge").textContent = profile.enrollment_status;
    
    // Academic Information
    document.getElementById("academic-year").textContent = profile.academic_year;
    document.getElementById("semester").textContent = profile.semester;
    document.getElementById("total-units").textContent = profile.total_units + " units";
    document.getElementById("gpa").textContent = profile.gpa;
    
    // Contact Information
    document.getElementById("student-email").textContent = user.email;
    document.getElementById("student-phone").textContent = profile.contact_info.phone;
    document.getElementById("student-address").textContent = profile.contact_info.address;
    document.getElementById("student-country").textContent = getCountryName(user.country);
    
    // Personal Information
    document.getElementById("student-gender").textContent = capitalizeFirst(user.gender);
    document.getElementById("member-since").textContent = formatDate(user.created_at);
    
    // Sports Registration
    populateSports(profile.sports_registered);
    
    // Hobbies
    populateHobbies(user.hobbies);
    
    // Achievements
    populateAchievements(profile.achievements);
    
    // Setup event listeners
    setupEventListeners();
}

function populateSports(sports) {
    const sportsContainer = document.getElementById("sports-list");
    
    if (sports.length === 0) {
        sportsContainer.innerHTML = '<p class="loading-text">No sports registered yet.</p>';
        return;
    }
    
    sportsContainer.innerHTML = sports.map(sport => 
        `<span class="sport-tag">${sport}</span>`
    ).join('');
}

function populateHobbies(hobbies) {
    const hobbiesContainer = document.getElementById("hobbies-list");
    
    hobbiesContainer.innerHTML = hobbies.map(hobby => 
        `<span class="hobby-tag">${capitalizeFirst(hobby)}</span>`
    ).join('');
}

function populateAchievements(achievements) {
    const achievementsContainer = document.getElementById("achievements-grid");
    
    if (achievements.length === 0) {
        achievementsContainer.innerHTML = '<p class="loading-text">No achievements yet. Keep participating!</p>';
        return;
    }
    
    achievementsContainer.innerHTML = achievements.map(achievement => {
        const iconName = getAchievementIcon(achievement.type);
        return `
            <div class="achievement-card ${achievement.type}">
                <sl-icon name="${iconName}" class="achievement-icon"></sl-icon>
                <h4>${achievement.title}</h4>
                <p class="achievement-date">${formatDate(achievement.date)}</p>
            </div>
        `;
    }).join('');
}

function setupEventListeners() {
    const BASE_URL = "/TeamArchive_LabExam/source-code";
    
    // Register for more sports button
    const registerMoreBtn = document.querySelector(".register-more-btn");
    if (registerMoreBtn) {
        registerMoreBtn.addEventListener("click", () => {
            window.location.href = BASE_URL + "/Webpage/register.html";
        });
    }
    
    // Quick action buttons
    const actionButtons = document.querySelectorAll(".action-btn");
    actionButtons.forEach((btn, index) => {
        btn.addEventListener("click", () => {
            const actions = [
                () => showNotification("Edit Profile feature coming soon!", "info"),
                () => downloadTranscript(),
                () => window.location.href = BASE_URL + "/Webpage/mainpage.php#schedule-section",
                () => showNotification("Account Settings feature coming soon!", "info")
            ];
            
            if (actions[index]) {
                actions[index]();
            }
        });
    });
}

function downloadTranscript() {
    // Create a mock transcript
    const transcriptData = generateTranscriptData();
    const blob = new Blob([transcriptData], { type: 'text/plain' });
    const url = window.URL.createObjectURL(blob);
    
    const downloadLink = document.createElement('a');
    downloadLink.href = url;
    downloadLink.download = 'UM_Academic_Transcript.txt';
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
    
    window.URL.revokeObjectURL(url);
    showNotification("Transcript downloaded successfully!", "success");
}

function generateTranscriptData() {
    const studentName = document.getElementById("student-name").textContent;
    const studentId = document.getElementById("student-id").textContent;
    const department = document.getElementById("student-department").textContent;
    const gpa = document.getElementById("gpa").textContent;
    
    return `UNIVERSITY OF MINDANAO
OFFICIAL ACADEMIC TRANSCRIPT

===============================================
STUDENT INFORMATION
===============================================
Name: ${studentName}
Student ID: ${studentId}
Department: ${department}
Current GPA: ${gpa}
Academic Year: 2025-2026
Semester: 1st Semester

===============================================
ACADEMIC RECORD - 1st SEMESTER 2025
===============================================
Course Code    Course Title                    Units    Grade
---------------------------------------------------------
CS101         Introduction to Programming      3        A
MATH101       College Algebra                 3        B+
ENG101        English Composition             3        A-
PE101         Physical Education              2        A
HIST101       Philippine History              3        B+
SCI101        General Science                 3        A
NSTP101       National Service Training      3        A

Total Units: 20
Semester GPA: ${gpa}

===============================================
EXTRACURRICULAR ACTIVITIES
===============================================
- Intramural Sports Participant
- Student Organization Member
- Community Service Volunteer

===============================================
CERTIFICATIONS
===============================================
- Dean's List (Academic Excellence)
- Perfect Attendance Award
- Leadership Training Certificate

Generated on: ${new Date().toLocaleDateString()}
This is an official document from University of Mindanao.

For verification, contact:
Registrar's Office
University of Mindanao
Davao City, Philippines
Phone: (082) 227-8192
Email: registrar@um.edu.ph
`;
}

// Helper Functions
function getCountryName(countryCode) {
    const countries = {
        "ph": "Philippines",
        "us": "United States",
        "jp": "Japan",
        "de": "Germany"
    };
    return countries[countryCode] || "Unknown";
}

function capitalizeFirst(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}

function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

function getAchievementIcon(type) {
    const icons = {
        "sports": "trophy-fill",
        "academic": "mortarboard-fill",
        "participation": "award-fill",
        "recognition": "star-fill"
    };
    return icons[type] || "award";
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('sl-alert');
    notification.setAttribute('variant', type);
    notification.setAttribute('closable', '');
    notification.setAttribute('duration', '3000');
    
    let iconName = 'info-circle';
    if (type === 'success') iconName = 'check-circle';
    if (type === 'warning') iconName = 'exclamation-triangle';
    if (type === 'danger') iconName = 'x-circle';
    
    notification.innerHTML = `
        <sl-icon slot="icon" name="${iconName}"></sl-icon>
        ${message}
    `;
    
    document.body.appendChild(notification);
    notification.toast();
    
    setTimeout(() => {
        if (document.body.contains(notification)) {
            document.body.removeChild(notification);
        }
    }, 4000);
}