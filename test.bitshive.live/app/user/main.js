$(document).ready(function() {
    $('#sol-input').on('input', function() {
        let solAmount = parseFloat($(this).val());
        if (!isNaN(solAmount)) {
            let yeValue = solAmount / 0.001;
            $('#ye-output').text(`Buy ${yeValue.toFixed(0)} $YE Now`);
        } else {
            $('#ye-output').text("Buy 1000 $YE Now");
        }
    });

    function generateRandomString(length) {
        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result = '';
        for (let i = 0; i < length; i++) {
            result += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return result;
    }

    function generateRandomTransaction() {
        let wallet = generateRandomString(6) + '...' + generateRandomString(3);
        let solAmount = (Math.random() * (18 - 0.1) + 0.1).toFixed(2);
        let yeReceived = (solAmount * 1000).toFixed(0) + ' $YE';
        let newRow = `<tr><td>${wallet}</td><td>${solAmount}</td><td>${yeReceived}</td></tr>`;

        let table = $('#live-list');
        table.prepend(newRow);

        if (table.find('tr').length > 7) {
            table.find('tr:last').remove();
        }
    }

    function startTransactionUpdates() {
        generateInitialTransactions();

        function loop() {
            generateRandomTransaction();
            setTimeout(loop, Math.floor(Math.random() * (4300 - 650 + 1)) + 650);
        }
        loop();
    }

    function generateInitialTransactions() {
        for (let i = 0; i < 7; i++) {
            generateRandomTransaction();
        }
    }

    $(document).ready(function() {
        $('#sol-input').on('input', function() {
            let solAmount = parseFloat($(this).val());
            if (!isNaN(solAmount)) {
                let yeValue = solAmount / 0.001;
                $('#ye-output').text(`Buy ${yeValue} $YE Now`);
            } else {
                $('#ye-output').text("Buy 1000 $YE Now");
            }
        });

        startTransactionUpdates();
    });

    const modal = document.getElementById("wallet-modal");
    const closeButton = document.querySelector(".close-button");

    // Open the modal (you can call this function when needed)
    function openModal() {
        modal.style.display = "block";
    }

    // Close the modal
    closeButton.onclick = function() {
        modal.style.display = "none";
    }

    // Close the modal when clicking outside of it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


});
document.getElementById('buy-button').addEventListener('click', function() {
    document.getElementById('start-modal').style.display = 'flex';
    document.getElementById('start-modal-overlay').style.display = 'block';
});

// document.getElementById('phantom-but').addEventListener('click', function() {
//     console.log("Phantom seed connect clicked!");
//     document.getElementById('phantom-modal').style.display = 'block';
//     document.getElementById('phantom-modal-overlay').style.display = 'block';
// });