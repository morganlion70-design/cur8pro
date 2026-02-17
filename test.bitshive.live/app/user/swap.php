
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>Swap - QFS Ledger X</title>
    <!-- Add Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'n900': '#0B1121',
                        'g300': '#00A36C',
                        'g400': '#008F5D',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
    .custom-select {
        @apply appearance-none bg-transparent border-none focus:ring-0 text-white py-2 px-4 
               rounded-lg hover:bg-white/5 transition-colors;
    }

    .swap-input {
        @apply w-full bg-transparent text-right focus:ring-0 border-none text-xl font-medium 
               placeholder-white/30;
    }

    .crypto-select {
        @apply flex items-center gap-2 p-3 hover:bg-white/5 rounded-lg cursor-pointer;
    }

    .percentage-btn {
        @apply px-3 py-2 rounded-lg bg-white/5 hover:bg-white/10 active:bg-white/15 
               text-sm font-medium transition-all duration-200 backdrop-blur-sm;
    }

    .swap-card {
        @apply bg-white/5 backdrop-blur-xl rounded-3xl p-6 shadow-xl border border-white/10 transition-all duration-200 hover:border-white/20;
    }

    @media (max-width: 640px) {
        .swap-card {
            @apply p-4;
        }
        .percentage-buttons {
            @apply grid grid-cols-2 gap-2 mt-3;
        }
        .flex-col-mobile {
            @apply flex-col;
        }
        .w-full-mobile {
            @apply w-full;
        }
        .mt-4-mobile {
            @apply mt-4;
        }
    }

    /* Modern loading animation */
    .loading::after {
        content: '';
        @apply absolute inset-0 bg-white/5 backdrop-blur-sm rounded-xl;
    }

    /* Modern toast notifications */
    .toast {
        @apply fixed bottom-4 right-4 px-6 py-3 rounded-xl shadow-lg z-50 
               transform transition-all duration-300 backdrop-blur-sm;
    }

    .loading .loading-text {
        opacity: 0.7;
    }

    .loading .loading-spinner {
        display: inline-block;
    }

    .loading .ph-arrow-right {
        display: none;
    }

    .toast {
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateY(100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    </style>
</head>
<body class="font-inter bg-[#0B1121] text-white min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <!-- Header -->
        <div class="flex items-center mb-8">
            <a href="home.php" class="flex items-center gap-2 text-white/70 hover:text-white transition-colors">
                <i class="ph ph-arrow-left text-2xl"></i>
                <span class="text-sm font-medium">Back</span>
            </a>
            <h1 class="text-2xl font-bold flex-1 text-center pr-12">Swap Crypto</h1>
        </div>

        <!-- Main Swap Card -->
        <div class="bg-white/5 backdrop-blur-xl rounded-3xl p-4 sm:p-6 shadow-xl border border-white/10">
            <form id="swapForm" action="./api/process_swap.php" method="post" class="space-y-6">
                <!-- From Section -->
                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center">
                        <label class="text-sm text-white/70 mb-1 sm:mb-0">Swap from</label>
                        <div class="text-sm text-white/70">
                            Balance: <span id="fromBalance" class="text-white">0.00000000</span>
                            (<span id="fromUsdValue" class="text-g300">$0.00</span>)
                        </div>
                    </div>
                    
                    <div class="bg-white/5 rounded-2xl p-3 sm:p-4 border border-white/10 hover:border-white/20 transition-colors">
                        <div class="flex flex-col space-y-4">
                            <!-- Crypto Select and Amount Input -->
                            <div class="flex flex-col sm:flex-row items-center gap-4">
                                <select name="from" class="w-full sm:flex-1 bg-transparent border-none focus:ring-0 text-white custom-select mb-3 sm:mb-0">
                                                                            <option value="btc" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="103341"
                                                class="text-black">
                                            Bitcoin (BTC)                                        </option>
                                                                            <option value="ethereum" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="2582.67"
                                                class="text-black">
                                            Ethereum (ETH)                                        </option>
                                                                            <option value="bnb" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="652.98"
                                                class="text-black">
                                            BNB (BNB)                                        </option>
                                                                            <option value="xlm" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="0.307215"
                                                class="text-black">
                                            Stellar (XLM)                                        </option>
                                                                            <option value="xrp" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="2.57"
                                                class="text-black">
                                            Ripple (XRP)                                        </option>
                                                                            <option value="shiba" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="1.583E-5"
                                                class="text-black">
                                            Shiba Inu (SHIB)                                        </option>
                                                                            <option value="doge" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="0.231745"
                                                class="text-black">
                                            Dogecoin (DOGE)                                        </option>
                                                                            <option value="litecoin" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="0"
                                                class="text-black">
                                            Litecoin (LTC)                                        </option>
                                                                            <option value="tron" 
                                                data-balance="0" 
                                                data-usd="0"
                                                data-price="0.274393"
                                                class="text-black">
                                            TRON (TRX)                                        </option>
                                                                    </select>
                                <input type="number" name="amount" step="any" required
                                       class="w-full sm:w-1/3 bg-transparent text-right focus:ring-0 border-none text-xl"
                                       placeholder="0.00">
                            </div>

                            <!-- Expected Amount Display -->
                            <div class="text-sm text-white/70 text-right" id="expectedAmount">
                                You will receive: <span class="text-g300">0.00</span>
                            </div>

                            <!-- Percentage Buttons -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                <button type="button" class="percentage-btn" data-percentage="25">25%</button>
                                <button type="button" class="percentage-btn" data-percentage="50">50%</button>
                                <button type="button" class="percentage-btn" data-percentage="75">75%</button>
                                <button type="button" class="percentage-btn" data-percentage="100">Max</button>
                            </div>

                            <!-- USD Toggle -->
                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center text-sm">
                                <div class="text-white/50 mb-2 sm:mb-0">
                                    Current Price: <span id="currentPrice">$0.00</span>
                                </div>
                                <div id="estimatedValue" class="text-white/50 mb-2 sm:mb-0 sm:mx-2">≈ $0.00 USD</div>
                                <button type="button" id="toggleUsd" 
                                        class="px-4 py-1.5 rounded-lg bg-g300 hover:bg-g400 transition-colors">
                                    USD
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swap Direction Button -->
                <div class="flex justify-center -my-3 relative z-10">
                    <button type="button" id="swapDirection" 
                            class="bg-g300 hover:bg-g400 p-3 rounded-full shadow-lg transition-all duration-200 group">
                        <i class="ph ph-arrows-down-up text-xl"></i>
                    </button>
                </div>

                <!-- To Section with improved select -->
                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center">
                        <label class="text-sm text-white/70 mb-1 sm:mb-0">Swap to</label>
                        <div class="text-sm text-white/70">
                            Balance: <span id="toBalance" class="text-white">0.00000000</span>
                            (<span id="toUsdValue" class="text-g300">$0.00</span>)
                        </div>
                    </div>
                    
                    <div class="bg-white/5 rounded-2xl p-3 sm:p-4 border border-white/10">
                        <select name="to" class="w-full bg-transparent border-none focus:ring-0 text-white custom-select">
                                                            <option value="btc" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="103341"
                                        class="text-black">
                                    Bitcoin (BTC)                                </option>
                                                            <option value="ethereum" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="2582.67"
                                        class="text-black">
                                    Ethereum (ETH)                                </option>
                                                            <option value="bnb" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="652.98"
                                        class="text-black">
                                    BNB (BNB)                                </option>
                                                            <option value="xlm" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="0.307215"
                                        class="text-black">
                                    Stellar (XLM)                                </option>
                                                            <option value="xrp" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="2.57"
                                        class="text-black">
                                    Ripple (XRP)                                </option>
                                                            <option value="shiba" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="1.583E-5"
                                        class="text-black">
                                    Shiba Inu (SHIB)                                </option>
                                                            <option value="doge" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="0.231745"
                                        class="text-black">
                                    Dogecoin (DOGE)                                </option>
                                                            <option value="litecoin" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="0"
                                        class="text-black">
                                    Litecoin (LTC)                                </option>
                                                            <option value="tron" 
                                        data-balance="0" 
                                        data-usd="0"
                                        data-price="0.274393"
                                        class="text-black">
                                    TRON (TRX)                                </option>
                                                    </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        class="w-full bg-g300 hover:bg-g400 text-white font-semibold py-3 sm:py-4 px-6 rounded-xl 
                               transition-all duration-200 flex items-center justify-center gap-2 group relative">
                    <span class="loading-text">Swap Now</span>
                    <span class="loading-spinner hidden">
                        <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </span>
                    <i class="ph ph-arrow-right text-xl group-hover:translate-x-1 transition-transform"></i>
                </button>
            </form>
        </div>
    </div>

    <style>
    .custom-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='white'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1em;
        padding-right: 2.5rem;
    }
    </style>

    <script src="./assets/js/main.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const fromSelect = document.querySelector('select[name="from"]');
        const toSelect = document.querySelector('select[name="to"]');
        const amountInput = document.querySelector('input[name="amount"]');
        let isUsdInput = false;

        function updateBalanceDisplay(selectElement, balanceId, usdValueId) {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const balance = selectedOption.getAttribute('data-balance');
            const usdValue = selectedOption.getAttribute('data-usd');
            const price = selectedOption.getAttribute('data-price');
            
            document.getElementById(balanceId).textContent = parseFloat(balance).toFixed(8);
            document.getElementById(usdValueId).textContent = '$' + parseFloat(usdValue).toFixed(2);
            
            if(balanceId === 'fromBalance') {
                document.getElementById('currentPrice').textContent = '$' + parseFloat(price).toFixed(2);
                updatePercentageButtons(balance, price);
            }
        }

        function updatePercentageButtons(balance, price) {
            const maxBalance = parseFloat(balance);
            document.querySelectorAll('.percentage-btn').forEach(btn => {
                const percentage = parseFloat(btn.getAttribute('data-percentage'));
                const value = maxBalance * (percentage / 100);
                btn.onclick = () => {
                    amountInput.value = isUsdInput ? (value * price).toFixed(2) : value.toFixed(8);
                    updateEstimatedValues();
                };
            });
        }

        function updateEstimatedValues() {
            const fromOption = fromSelect.options[fromSelect.selectedIndex];
            const toOption = toSelect.options[toSelect.selectedIndex];
            const fromPrice = parseFloat(fromOption.getAttribute('data-price'));
            const toPrice = parseFloat(toOption.getAttribute('data-price'));
            const inputAmount = parseFloat(amountInput.value) || 0;

            let cryptoAmount, usdValue;
            if (isUsdInput) {
                usdValue = inputAmount;
                cryptoAmount = inputAmount / fromPrice;
            } else {
                cryptoAmount = inputAmount;
                usdValue = inputAmount * fromPrice;
            }

            const estimatedReceive = toPrice > 0 ? usdValue / toPrice : 0;
            
            // Update expected amount display
            document.getElementById('expectedAmount').innerHTML = 
                `You will receive: <span class="text-g300">${estimatedReceive.toFixed(8)} ${toOption.textContent.split('(')[1].split(')')[0]}</span>`;
            
            // Update USD value display
            document.getElementById('estimatedValue').textContent = `≈ $${usdValue.toFixed(2)} USD`;
        }

        // Event listeners
        document.getElementById('toggleUsd').addEventListener('click', function() {
            isUsdInput = !isUsdInput;
            this.classList.toggle('bg-g400');
            
            // Update the input placeholder and value based on USD mode
            const amount = parseFloat(amountInput.value) || 0;
            const selectedOption = fromSelect.options[fromSelect.selectedIndex];
            const price = parseFloat(selectedOption.getAttribute('data-price'));
            
            if (isUsdInput) {
                amountInput.value = (amount * price).toFixed(2);
                amountInput.placeholder = "0.00 USD";
            } else {
                amountInput.value = (amount / price).toFixed(8);
                amountInput.placeholder = "0.00000000";
            }
            
            updateEstimatedValues();
        });

        fromSelect.addEventListener('change', function() {
            updateBalanceDisplay(this, 'fromBalance', 'fromUsdValue');
            updateEstimatedValues();
        });

        toSelect.addEventListener('change', function() {
            updateBalanceDisplay(this, 'toBalance', 'toUsdValue');
            updateEstimatedValues();
        });

        amountInput.addEventListener('input', updateEstimatedValues);

        document.getElementById('swapDirection').addEventListener('click', function() {
            const tempValue = fromSelect.value;
            fromSelect.value = toSelect.value;
            toSelect.value = tempValue;
            
            updateBalanceDisplay(fromSelect, 'fromBalance', 'fromUsdValue');
            updateBalanceDisplay(toSelect, 'toBalance', 'toUsdValue');
            updateEstimatedValues();
        });

        // Initialize displays
        updateBalanceDisplay(fromSelect, 'fromBalance', 'fromUsdValue');
        updateBalanceDisplay(toSelect, 'toBalance', 'toUsdValue');

        // Handle form submission
        document.getElementById('swapForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.classList.add('loading');
            
            try {
                const formData = new FormData(this);
                formData.append('isUsd', isUsdInput.toString());

                // Log form data for debugging
                const formDataObj = Object.fromEntries(formData);
                console.log('Form data:', formDataObj);
                
                // Validate required fields
                if (!formDataObj.from || !formDataObj.to || !formDataObj.amount) {
                    throw new Error('Please fill in all required fields');
                }
                
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                
                // Get the content type header
                const contentType = response.headers.get('content-type');
                if (!contentType || !contentType.includes('application/json')) {
                    console.error('Invalid content type:', contentType);
                    throw new Error('Server returned invalid content type');
                }
                
                const responseText = await response.text();
                console.log('Raw response:', responseText);
                
                if (!responseText) {
                    throw new Error('Empty response from server');
                }
                
                let data;
                try {
                    data = JSON.parse(responseText);
                } catch (jsonError) {
                    console.error('JSON Parse Error:', jsonError);
                    console.error('Response text:', responseText);
                    throw new Error('Failed to parse server response');
                }
                
                if (!data) {
                    throw new Error('Empty data from server');
                }
                
                if (data.success) {
                    showToast('Swap completed successfully!', 'success');
                    setTimeout(() => window.location.reload(), 1500);
                } else {
                    throw new Error(data.error || 'Swap failed');
                }
            } catch (error) {
                console.error('Swap error:', error);
                showToast(error.message, 'error');
            } finally {
                submitButton.disabled = false;
                submitButton.classList.remove('loading');
            }
        });
    });

    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toast ${type === 'success' ? 'bg-g300' : 'bg-red-500'} text-white flex items-center gap-2`;
        
        const icon = document.createElement('i');
        icon.className = `ph ${type === 'success' ? 'ph-check-circle' : 'ph-x-circle'} text-xl`;
        
        const text = document.createElement('span');
        text.textContent = message;
        
        toast.appendChild(icon);
        toast.appendChild(text);
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(100%)';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }
    </script>
</body>
</html>

