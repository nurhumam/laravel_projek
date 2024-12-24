function sendFeedback(event) {
    event.preventDefault();
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if (!name || !email || !message) {
        alert("All fields are required");
        return;
    }

    const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0AFeedback: ${message}`;
    const phoneNumber = "+6285281262229";
    const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

    window.open(whatsappURL, "_blank");
}