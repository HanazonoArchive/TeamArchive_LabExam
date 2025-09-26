document.addEventListener("DOMContentLoaded", function() {
    const logoutButton = document.getElementById("logout_button");
    if (logoutButton) {
        logoutButton.addEventListener("click", async () => {
            try {
                const response = await fetch("/CS15LabExam/source-code/Controller/logout.php", {
                    method: "GET"
                });
                const data = await response.json();
                if (data.status === "success") {
                    // Redirect to main page after logout
                    window.location.href = "/CS15LabExam/source-code/Webpage/mainpage.php";
                } else {
                    console.warn("Logout failed:", data);
                }
            } catch (err) {
                console.error("Error during logout:", err);
            }
        });
    }
});

