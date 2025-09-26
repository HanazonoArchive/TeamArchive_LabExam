document.addEventListener("DOMContentLoaded", function() {
    // Registration button functionality
    const registerButton = document.getElementById("register-btn");
    const downloadButton = document.getElementById("download-schedule-btn");
    
    // Base URL for navigation
    const BASE_URL = "/TeamArchive_LabExam/source-code";
    
    if (registerButton) {
        registerButton.addEventListener("click", function() {
            // Add loading state
            registerButton.loading = true;
            registerButton.disabled = true;
            
            // Simulate a brief loading state for better UX
            setTimeout(() => {
                // Redirect to register page
                window.location.href = BASE_URL + "/Webpage/register.html";
            }, 500);
        });
    }
    
    if (downloadButton) {
        downloadButton.addEventListener("click", function() {
            // Add loading state
            downloadButton.loading = true;
            downloadButton.disabled = true;
            
            // Create a sample schedule download (you can replace this with real file)
            setTimeout(() => {
                // Create download blob for schedule
                const scheduleData = generateScheduleData();
                const blob = new Blob([scheduleData], { type: 'text/plain' });
                const url = window.URL.createObjectURL(blob);
                
                // Create download link
                const downloadLink = document.createElement('a');
                downloadLink.href = url;
                downloadLink.download = 'UM_Intramurals_Schedule_2025.txt';
                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
                
                // Clean up
                window.URL.revokeObjectURL(url);
                
                // Reset button state
                downloadButton.loading = false;
                downloadButton.disabled = false;
                
                // Show success message
                showNotification("Schedule downloaded successfully!", "success");
            }, 1000);
        });
    }
    
    // Quick registration buttons in sports cards
    const sportsCards = document.querySelectorAll('.sport-card sl-button');
    sportsCards.forEach(button => {
        button.addEventListener('click', function() {
            const sportName = this.closest('.sport-card').querySelector('h3').textContent;
            
            // Add loading state
            button.loading = true;
            
            setTimeout(() => {
                // Redirect to register page with sport parameter
                window.location.href = BASE_URL + "/Webpage/register.html?sport=" + encodeURIComponent(sportName);
            }, 500);
        });
    });
    
    // Generate sample schedule data
    function generateScheduleData() {
        return `UNIVERSITY OF MINDANAO - INTRAMURAL SPORTS 2025
OFFICIAL SCHEDULE

==============================================
BASKETBALL TOURNAMENT
==============================================
October 15, 2025 - Quarterfinals (9:00 AM - 5:00 PM)
October 16, 2025 - Semifinals (2:00 PM - 6:00 PM)
October 17, 2025 - Finals (3:00 PM - 5:00 PM)
Venue: UM Main Gymnasium

==============================================
VOLLEYBALL TOURNAMENT
==============================================
October 22, 2025 - Preliminaries (8:00 AM - 6:00 PM)
October 23, 2025 - Semifinals (2:00 PM - 6:00 PM)
October 24, 2025 - Finals (4:00 PM - 6:00 PM)
Venue: UM Sports Complex

==============================================
BADMINTON TOURNAMENT
==============================================
November 5, 2025 - Singles (8:00 AM - 12:00 PM)
November 6, 2025 - Doubles (1:00 PM - 5:00 PM)
November 7, 2025 - Mixed Doubles (2:00 PM - 6:00 PM)
November 8, 2025 - Finals (3:00 PM - 5:00 PM)
Venue: UM Multipurpose Hall

==============================================
SWIMMING COMPETITION
==============================================
October 30, 2025 - Individual Events (9:00 AM - 12:00 PM)
October 30, 2025 - Relay Events (2:00 PM - 4:00 PM)
Venue: UM Aquatic Center

==============================================
TRACK & FIELD
==============================================
November 12, 2025 - Field Events (8:00 AM - 12:00 PM)
November 12, 2025 - Track Events (1:00 PM - 5:00 PM)
Venue: UM Athletic Track

==============================================
FOOTBALL TOURNAMENT
==============================================
November 15, 2025 - Group Stage (8:00 AM - 5:00 PM)
November 16, 2025 - Knockout Stage (9:00 AM - 4:00 PM)
November 17, 2025 - Finals (2:00 PM - 4:00 PM)
Venue: UM Football Field

For registration and inquiries:
Email: intramurals@um.edu.ph
Phone: (082) 227-8192

Generated on: ${new Date().toLocaleDateString()}
`;
    }
    
    // Show notification function
    function showNotification(message, type = 'info') {
        // Create notification element
        const notification = document.createElement('sl-alert');
        notification.setAttribute('variant', type);
        notification.setAttribute('closable', '');
        notification.setAttribute('duration', '3000');
        
        // Add icon based on type
        let iconName = 'info-circle';
        if (type === 'success') iconName = 'check-circle';
        if (type === 'warning') iconName = 'exclamation-triangle';
        if (type === 'danger') iconName = 'x-circle';
        
        notification.innerHTML = `
            <sl-icon slot="icon" name="${iconName}"></sl-icon>
            ${message}
        `;
        
        // Add to page
        document.body.appendChild(notification);
        notification.toast();
        
        // Remove after showing
        setTimeout(() => {
            if (document.body.contains(notification)) {
                document.body.removeChild(notification);
            }
        }, 4000);
    }
    
    // Add click tracking for analytics (optional)
    function trackEvent(eventName, eventData = {}) {
        console.log(`Event: ${eventName}`, eventData);
        // You can integrate with analytics services like Google Analytics here
        // Example: gtag('event', eventName, eventData);
    }
    
    // Track registration button clicks
    if (registerButton) {
        registerButton.addEventListener('click', () => {
            trackEvent('registration_button_clicked', {
                page: 'mainpage',
                button_location: 'cta_section'
            });
        });
    }
});