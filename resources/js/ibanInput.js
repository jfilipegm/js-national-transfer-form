const ibanInput = document.getElementById('destinationIban');

if (ibanInput) {
    document.getElementById('destinationIban').addEventListener('input', function (e) {
        let cleanedValue = e.target.value.replace(/[^A-Z0-9]/g, '');
    
        if (cleanedValue.length > 25) {
            cleanedValue = cleanedValue.slice(0, 25);
        }
    
        cleanedValue = cleanedValue.replace(/(.{4})/g, '$1 ').trim();
        e.target.value = cleanedValue;
    });
}
