const nextStepButton = document.getElementById('nextStepBtn');

if (nextStepButton) {
    nextStepButton.addEventListener('click', function (e) {
        e.preventDefault();

        const form = document.getElementById('assecoForm');
        
        if (form.checkValidity()) {
            const originAccount = document.getElementById('originAccount').value;
            const destinationIban = document.getElementById('destinationIban').value;
            const transferDescription = document.getElementById('transferDescription').value;
            const amount = document.getElementById('amount').value;
            const token = document.querySelector('[name="_token"]').value;

            const formData = {
                originAccount,
                destinationIban,
                transferDescription,
                amount
            };

            fetch('getFormData', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                credentials: 'same-origin',
                body: JSON.stringify(formData)
            })
                .then(response => {
                    if (response.ok) {
                        window.location.href = '/summary';
                    } else { //debug
                        console.error('Error sending data');
                        console.log(formData);
                        console.log(response);
                        console.log(token);
                    }
                })
                .then(data => { //debug
                    if (typeof data === 'object') {
                        console.log('Data sent successfully');
                        console.log(data);
                    } else {
                        console.error('Invalid JSON response:', data);
                    }
                });
        } else {
            window.alert('Form is not valid. Please fill in all required fields.');
        }
    });
}
