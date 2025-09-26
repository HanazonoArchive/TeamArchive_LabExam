document.addEventListener("DOMContentLoaded", async () => {
    try {
        const response = await fetch("/Web_Scripting_Jay_Mark_Agsoy/source-code/Controller/mainpageController.php");
        const data = await response.json();

        // Uncomment this block if you want to redirect when not logged in
        // if (data.status === "error") {
        //     window.location.href = "/Web_Scripting_Jay_Mark_Agsoy/source-code/Webpage/login.html";
        //     return;
        // }

        const user = data.user;

        // Map country code to name
        let countryname = "";
        switch (user.country) {
            case "ph":
                countryname = "Philippines";
                break;
            case "us":
                countryname = "United States";
                break;
            case "jp":
                countryname = "Japan";
                break;
            case "de":
                countryname = "Germany";
                break;
            default:
                countryname = "Unknown";
        }

        // Map gender code to display text
        let genderDisplay = "";
        switch (user.gender) {
            case "male":
                genderDisplay = "Male";
                break;
            case "female":
                genderDisplay = "Female";
                break;
            case "other":
                genderDisplay = "Other";
                break;
            default:
                genderDisplay = "Unknown";
        }

        // Populate readonly input fields
        document.getElementById("welcome_message").textContent = "Welcome! " + user.username;
        document.getElementById("welcome_account").textContent = "You are Currently! Login";

        // Enable logout button
        const logout_button = document.getElementById("logout_button");
        logout_button.removeAttribute("disabled");
        logout_button.setAttribute("variant", "success");

        const disabled_credentials = document.getElementById("disabled_this_fucker");
        disabled_credentials.setAttribute("disabled", true);
    } catch (err) {
        console.error("Error fetching user data:", err);

        // Fallback for guest user
        document.getElementById("welcome_message").textContent = "Welcome! Guest";
        document.getElementById("welcome_account").textContent = "You are Currently! Not Login";
        const disabled_credentials = document.getElementById("disabled_this_fucker");
        disabled_credentials.setAttribute("disabled", false);
    }
});
