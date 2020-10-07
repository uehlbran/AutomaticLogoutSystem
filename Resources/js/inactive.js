//Inactivity Timer
let notifyTimeout = null, logoutTimeout = null, timer = null;
const logoutAfter = 60; //specify time in seconds
const notifyAfter = 10; //specify time in seconds
const targetElement = document.getElementById("inactivityModal");
const logoutPage = "logout.php";

function resetTimer() {
    //Prevents the timer from being reset after the modal has been shown
    if (!targetElement.classList.contains("show")) {
        //Clear timeouts
        window.clearTimeout(notifyTimeout);
        window.clearTimeout(logoutTimeout);
        window.clearInterval(timer);

        //Set Notify Timeout
        notifyTimeout = window.setTimeout(function() {
            targetElement.dispatchEvent(startTimerEvent);
            $("#inactivityModal").modal("show");
        }, notifyAfter * 1000);

        //Set Logout Timeout
        logoutTimeout = window.setTimeout(function() {
            targetElement.dispatchEvent(logoutEvent);
        }, logoutAfter * 1000);

        console.log("Timer was reset!");
    }
}

//Custom Events
const logoutEvent = new Event("automatic.logout");
const startTimerEvent = new Event("timer.start");

//Event Listeners
targetElement.addEventListener("automatic.logout", (e) => {
    window.location = logoutPage;
});

targetElement.addEventListener("timer.start", (e) => {
    let timeTillLogout = moment().hours(0).minutes(0).seconds(Math.abs(logoutAfter - notifyAfter));
    let modalText = document.querySelector("div#inactivityModal .modal-text");
    timer = window.setInterval(function() {
        //Begin counting down
        timeTillLogout.subtract(1, "seconds");

        //Update modal text
        modalText.innerHTML = `You will automatically be logged out in:
                        <span class='text-danger'>${timeTillLogout.format("mm:ss")}</span>`;
    }, 1000);
});

document.getElementById("modalContinueSession").addEventListener("click", resetTimer);

document.getElementById("modalLogout").addEventListener("click", function() {
    targetElement.dispatchEvent(logoutEvent);
});

window.addEventListener("load", resetTimer);
window.addEventListener("mousemove", resetTimer);
window.addEventListener("keypress", resetTimer);
