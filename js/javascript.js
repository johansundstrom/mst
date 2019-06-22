
function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        /*search for elements with a certain atrribute:*/
        file = elmnt.getAttribute("include-html");
        if (file) {
            /* Make an HTTP request using the attribute value as the file name: */
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) { elmnt.innerHTML = this.responseText; }
                    if (this.status == 404) { elmnt.innerHTML = "Page not found."; }
                    /* Remove the attribute, and call this function once more: */
                    elmnt.removeAttribute("include-html");
                    includeHTML();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            /* Exit the function: */
            return;
        }
    }
}


// ACST – Australian Central Standard Time - UTC +9:30 hours all of the period 
var countDownDate = new Date('October 13, 2019 08:30:00 +0930').getTime();

// Update every second
var i = setInterval(function() {

    // Get now
    let now = new Date().getTime();

    // timeLeft
    let timeLeft = countDownDate - now;

    // Time calculations
    let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    // Output
    document.getElementById("myCountDown").innerHTML = "Trivia: Race starts in " + days + " days and " + hours + ":"
    + minutes + ":" + seconds;

    // If the count down is over, write some text 
    if (timeLeft < 0) {
    clearInterval(i);
    document.getElementById("myCountDown").innerHTML = "Race has started!";
    }
}, 1000);


function showTitle(){
    document.getElementById("#ayad")
    
}