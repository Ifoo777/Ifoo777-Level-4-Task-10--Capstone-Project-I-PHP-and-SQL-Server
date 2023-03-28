// Declare variable cookiePosition - Get the element - identify by ID
let cookiePosition = document.querySelector(".cookie");

// On load, display Cookie alert
function displayAlertFooter() {

    // If not true in session storage, display alert
    if (!localStorage.getItem("cookieDisplayedClickOkay")) {
        //variable for the element that are to be created
        let divParent = document.createElement("div");
        let paragraphChild = document.createElement("p");
        let buttonChild = document.createElement("button");

        //Give the variables a class names and declare the inner HTML content
        divParent.className = "cookie-container";

        paragraphChild.innerHTML = 'We use cookies in this website to give you the best experience on our site and show you relevant information. To find out more, read our <a href="/legal/privacy" >privacy and cookie policy</a>.'

        buttonChild.className = "cookie-btn";
        buttonChild.innerHTML = "Okay";

        //Add the Children variable inside the div Parent and the Parent inside selected variable cookiePosition
        divParent.appendChild(paragraphChild);
        divParent.appendChild(buttonChild);
        cookiePosition.appendChild(divParent);

        // Declare variable
        const cookieContainer = document.querySelector(".cookie-container");
        const cookieButton = document.querySelector(".cookie-btn");

        // Add event listener that will update local storage
        cookieButton.addEventListener("click", () => {
            cookieContainer.classList.add("cookieConfirmed");
            localStorage.setItem("cookieDisplayedClickOkay", "true")
        });

    }

    // Footer - Load the copyright and Policies
    // Declare variables
    let divParentFooter = document.createElement("div");
    let spanChildFooter = document.createElement("span");

    // Footer inner HTML
    spanChildFooter.innerHTML = '<br>Copyright © 2022-2023 Cool-Tech <button><a href="/legal/tos">Terms of Service</a></button><button><a href="/legal/privacy">Privacy Policy</a></button><button> <a href="/search">Search Articles</a></button><br><br>';

    // Append the children
    divParentFooter.appendChild(spanChildFooter);
    cookiePosition.appendChild(divParentFooter);
}
