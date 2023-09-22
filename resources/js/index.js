const nextStepButton = document.getElementById('nextStepBtn');

    // Add a click event listener to the button
    nextStepButton.addEventListener('click', function() {
        // Extract information from form inputs
        const originAccount = document.getElementById('originAccount').value;
        const destinationIban = document.getElementById('destinationIban').value;
        const transferDescription = document.getElementById('transferDescription').value;
        const amount = document.getElementById('amount').value;

        // Create a JavaScript object with the extracted data
        const formData = {
            originAccount,
            destinationIban,
            transferDescription,
            amount
        };

        console.log(formData)
        // Send the data to another route using Fetch API
        fetch('/summary', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(formData)
        })
        .then(response => {
            // Handle the response here (e.g., show a success message)
            if (response.ok) {
                // Success, do something
                console.log('Data sent successfully');
            } else {
                // Error, handle accordingly
                console.error('Error sending data');
            }
        })
        .catch(error => {
            // Handle any network or request errors here
            console.error('Request error:', error);
        });
    });