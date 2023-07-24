const contactForm = document.getElementById("contact-form");
    const contactDataDiv = document.getElementById("contact-data");

    contactForm.addEventListener("submit", (event) => {
      event.preventDefault();

      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const subject = document.getElementById("subject").value;
      const message = document.getElementById("message").value;

      const contactData = `
                <h2>Contact Details:</h2>
                <p><strong>Name:</strong> ${name}</p>
                <p><strong>Email:</strong> ${email}</p>
                <p><strong>Subject:</strong> ${subject}</p>
                <p><strong>Message:</strong> ${message}</p>
                <hr>
            `;

      contactDataDiv.innerHTML += contactData;
      contactForm.reset();
    });