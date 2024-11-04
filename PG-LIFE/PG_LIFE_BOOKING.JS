// document.getElementById('bookingForm').addEventListener('submit', function (event) {
//     event.preventDefault();

//     // Gather form data
//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const phone = document.getElementById('phone').value;
//     const checkin = document.getElementById('checkin').value;
//     const checkout = document.getElementById('checkout').value;
    
//     // Prepare receipt details
//     const receiptDetails = `
//         Name: ${name}
//         Email: ${email}
//         Phone: ${phone}
//         Check-in: ${checkin}
//         Check-out: ${checkout}
//         Amount: ₹2500 (per night)
//     `;
    
//     // Display receipt
//     document.getElementById('receiptDetails').textContent = receiptDetails;
//     document.getElementById('receipt').classList.remove('hidden');
// });

// function printReceipt() {
//     const receiptContents = document.getElementById('receiptDetails').textContent;
//     const newWindow = window.open('', '', 'height=600,width=800');
//     newWindow.document.write('<pre>' + receiptContents + '</pre>');
//     newWindow.document.close();
//     newWindow.print();
// }


// document.getElementById('bookingForm').onsubmit = function(e) {
//     e.preventDefault(); // Prevent default form submission

//     // Populate receipt details
//     document.getElementById('receiptName').innerText = document.getElementById('name').value;
//     document.getElementById('receiptEmail').innerText = document.getElementById('email').value;
//     document.getElementById('receiptPhone').innerText = document.getElementById('phone').value;
//     document.getElementById('receiptCheckin').innerText = document.getElementById('checkin').value;
//     document.getElementById('receiptCheckout').innerText = document.getElementById('checkout').value;

//     // Calculate total based on the number of days
//     const checkinDate = new Date(document.getElementById('checkin').value);
//     const checkoutDate = new Date(document.getElementById('checkout').value);
//     const days = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));
//     const total = days * 2500; // Calculate total based on the number of days
//     document.getElementById('receiptTotal').innerText = `₹${total}`;

//     // Show receipt
//     document.getElementById('receipt').classList.remove('hidden');
// };

// function printReceipt() {
//     const receiptContent = document.getElementById('receipt').innerHTML;
//     const win = window.open('', '', 'height=600,width=800');
//     win.document.write('<html><head><title>Print Receipt</title>');
//     win.document.write('</head><body>');
//     win.document.write(receiptContent);
//     win.document.write('</body></html>');
//     win.document.close(); // Close the document
//     win.print(); // Print the receipt
// }


document.getElementById('bookingForm').onsubmit = function(e) {
    e.preventDefault(); // Prevent default form submission

    // Populate receipt details
    document.getElementById('receiptName').innerText = document.getElementById('name').value;
    document.getElementById('receiptEmail').innerText = document.getElementById('email').value;
    document.getElementById('receiptPhone').innerText = document.getElementById('phone').value;
    document.getElementById('receiptCheckin').innerText = document.getElementById('checkin').value;
    document.getElementById('receiptCheckout').innerText = document.getElementById('checkout').value;

    // Calculate total based on the number of days
    const checkinDate = new Date(document.getElementById('checkin').value);
    const checkoutDate = new Date(document.getElementById('checkout').value);
    const days = Math.ceil((checkoutDate - checkinDate) / (1000 * 60 * 60 * 24));
    const total = days * 2500;
    document.getElementById('receiptTotal').innerText = `₹${total}`;

    // Show receipt
    document.getElementById('receipt').classList.remove('hidden');
};

function printReceipt() {
    const receiptContent = document.getElementById('receipt').innerHTML;
    const win = window.open('', '', 'height=600,width=800');
    win.document.write('<html><head><title>Print Receipt</title>');
    win.document.write('</head><body>');
    win.document.write(receiptContent);
    win.document.write('</body></html>');
    win.document.close();
    win.print();
}
