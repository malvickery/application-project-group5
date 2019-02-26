document.querySelectorAll(".password .afterInput").forEach(element => {

    element.onclick = (e) => {

        let passwordDiv = e.target;
        do {
            passwordDiv = passwordDiv.parentNode
        } while (!passwordDiv.classList.contains("password"));

        let input = passwordDiv.querySelector("input");
        let svg = passwordDiv.querySelector(".afterInput path");
        if (input.getAttribute("type") === "text") {

            input.setAttribute("type", "password");
            svg.setAttribute("d", "M18.4 18.6l-1-1-2.3.6c-3 .7-6 .5-8.3-.7-2-1-4.8-3.9-4.8-4.9C2 12 4.8 9 6.3 8l.8-.5L6 6C4.9 5 4.7 4.7 5 4.4c.3-.3 2 1.2 7.8 7 6.6 6.6 7.9 8.3 6.7 8.3a5 5 0 0 1-1.2-1zm-4.2-2c1.3-.7 1.3-1 .3-1.9-.7-.6-.9-.7-1.8-.3-.8.3-1.2.3-1.9-.2-1-.6-1.2-2.1-.4-2.8.3-.3.2-.6-.5-1.3l-1-1-.8 1c-.8.9-.8 1.2-.7 2.8.3 3.5 3.9 5.5 6.8 3.8zM6.5 15c-.3-.5-.5-1.6-.5-2.3 0-.8.2-1.9.5-2.4s.4-1 .2-1c-.4 0-3.4 3-3.4 3.4 0 .3 3 3.3 3.4 3.3.2 0 0-.5-.2-1zm12.4.5c-.3-.5-.3-.7.5-1.5.5-.5.9-1.1.9-1.4A11 11 0 0 0 17 9.3s0 .6.3 1.4c.6 1.5.7 2.8.2 3.1-.4.3-.9-.5-1.1-2-.4-1.7-2-3.4-3.8-3.7-.8-.1-1.6-.5-2-.9-.6-.6-.6-.7 1.8-.5 3.6.3 7 2 8.6 4.6l.9 1.4-1 1.3c-1.2 1.9-1.6 2.1-2 1.5z")

        } else {

            input.setAttribute("type", "text");
            svg.setAttribute("d", "M8.7 17.4a12 12 0 0 1-5.7-4L2 12l1-1.4a11.4 11.4 0 0 1 18.2.1L22 12l-1 1.4c-2.5 3.6-7.9 5.4-12.3 4zm5.5-1.4c.6-.4 1.4-1.2 1.8-1.8 2.3-3.8-2.4-8.5-6.2-6.2-.6.4-1.4 1.2-1.7 1.8-2.4 3.8 2.3 8.5 6.1 6.2zm-3.5-2.7c-.4-.3-.7-1-.7-1.3 0-.8 1.2-2 2-2 .9 0 2 1.2 2 2 0 .4-.3 1-.7 1.3-.3.4-1 .7-1.3.7-.4 0-1-.3-1.3-.7zm-4.1.9c-.3-.7-.5-1.6-.5-2.2 0-.6.2-1.5.5-2.2l.2-1c-.6 0-3 2.6-3 3.2 0 .6 2.4 3.3 3 3.3l-.2-1.1zm12.3-.2c.7-.7 1.3-1.6 1.3-2 0-.6-2.4-3.3-3-3.3 0 0 0 .5.3 1.1.2.7.4 1.6.4 2.2 0 .6-.2 1.5-.4 2.2-.7 1.4-.3 1.4 1.4-.2z")

        }

    }
});