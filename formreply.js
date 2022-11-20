if (document.URL.includes("join.php")) {
    document.addEventListener("DOMContentLoaded", () => {
        const REPLY_RADIO = document.getElementsByClassName("reply");
        const REPLY_FORM = document.getElementById("reply-form");
        Array.from(REPLY_RADIO).forEach(element => {
            element.addEventListener("click", () => {
                if(element.id === "reply") {
                    REPLY_FORM.style.display = "inline";
                } else {
                    REPLY_FORM.style.display = "none";
                }
            });
        });
    });
};