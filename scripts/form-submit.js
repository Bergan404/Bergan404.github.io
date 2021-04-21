var form = document.getElementById("my-form");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        status.innerHTML = "Thanks for your submission!";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)

// var message = " ";

// $("#form-button").on("click", function() {
//     message = $("#my-form").serialize();
//     $.ajax({
//         url: "https://formspree.io/f/xwkapwny",
//         method: "POST",
//         data: {message: message},
//         dataType: "json"
//     });
//     alert('Thanks for the email, we\'ll be in touch promptly.');
//     return false;
// });
