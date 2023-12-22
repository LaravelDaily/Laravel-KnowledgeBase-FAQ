popupWhatsApp = () => {
    let btnClosePopup = document.querySelector(".closePopup");
    let btnOpenPopup = document.querySelector(".whatsapp__icon");
    let popup = document.querySelector(".whatsapp__popup");
    let sendBtn = document.getElementById("send-btn");

    btnClosePopup.addEventListener("click", () => {
        popup.classList.toggle("is-active-whatsapp-popup");
    });

    btnOpenPopup.addEventListener("click", () => {
        popup.classList.toggle("is-active-whatsapp-popup");
    });

    sendBtn.addEventListener("click", () => {
        let msg = document.getElementById("whats-input").value;
        let relmsg = msg.replace(/ /g, "%20");
        //just change the numbers "01022674132" for your number
        window.open("https://wa.me/+201155777100=" + relmsg, "_blank");
    });
};

popupWhatsApp();
