document.addEventListener('DOMContentLoaded', function () {
    var preloader = document.getElementById('preloader');

    // Function to hide preloader
    function hidePreloader() {
        preloader.style.opacity = '0';
        setTimeout(function () {
            preloader.style.display = 'none';
        }, 500); // 0.5 seconds timeout
    }

    // Function to show sections
    function showSections() {
        var sections = document.querySelectorAll('section');
        sections.forEach(function (section) {
            section.classList.add('show');
        });
    }

    // Hide preloader after 5 seconds (adjust the timeout as needed)
    setTimeout(function () {
        hidePreloader();
        showSections();
    }, 5000);
});

// Function to toggle popup form visibility
function togglePopupForm(formType) {
    var formId = formType + "Form";
    var popupForm = document.getElementById(formId);
    if (popupForm.style.display === "none" || popupForm.style.display === "") {
        popupForm.style.display = "block";
    } else {
        popupForm.style.display = "none";
    }
}

// Function to get and display the current location
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    var locationInput = document.getElementById("location");
    locationInput.value = "Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude;
}
//toggle modes
document.addEventListener('DOMContentLoaded', function () {
    var body = document.body;
    var toggleButton = document.getElementById('toggle-mode-button');

    // Function to toggle between dark and light modes
    function toggleMode() {
        body.classList.toggle('dark-mode');
        // Toggle the mode for each section with the 'toggle-section' class
        var sections = document.querySelectorAll('.toggle-section');
        sections.forEach(function (section) {
            section.classList.toggle('dark-mode');
        });
    }

    // Event listener for the toggle button
    toggleButton.addEventListener('click', toggleMode);
});
