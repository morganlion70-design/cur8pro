
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Deposit Bitcoin (BTC)</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'n900': '#0B1121',
                        'g300': '#00A36C',
                        'g400': '#008F5D',
                        'n70': '#9CA3AF',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter">
    <div class="bg-n900 min-h-dvh relative overflow-hidden text-white">
        <!-- Gradient Effects -->
        <div class="w-[582px] h-[582px] rounded-full bg-g300/30 fixed -top-32 -left-20 blur-[575px]"></div>
        <div class="w-[582px] h-[582px] rounded-full bg-blue-500/20 fixed -bottom-32 -right-20 blur-[575px]"></div>

        <!-- Fixed Header -->
        <div class="fixed top-0 left-0 right-0 z-30 bg-n900/80 backdrop-blur-xl border-b border-white/5">
            <div class="max-w-2xl mx-auto px-4">
                <div class="py-6 flex items-center justify-between">
                    <a href="deposit.php" class="flex items-center gap-2 text-white/70 hover:text-white transition-colors">
                        <i class="ph ph-arrow-left text-2xl"></i>
                        <span class="text-sm font-medium">Back</span>
                    </a>
                    <h1 class="text-xl font-semibold">
                        Deposit Bitcoin (BTC)                    </h1>
                    <div class="w-10"></div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="pt-[88px] pb-[80px] relative">
            <div class="max-w-2xl mx-auto px-4">
                <!-- Quick Amount Selection -->
                <div class="grid grid-cols-3 gap-3 mb-6 mt-4">
                    <button type="button" onclick="setAmount(100)" 
                            class="p-4 rounded-xl bg-white/5 hover:bg-white/10 backdrop-blur-xl border border-white/10 transition-all">
                        <p class="text-sm text-n70">Quick Deposit</p>
                        <p class="text-lg font-semibold">$100</p>
                    </button>
                    <button type="button" onclick="setAmount(500)"
                            class="p-4 rounded-xl bg-white/5 hover:bg-white/10 backdrop-blur-xl border border-white/10 transition-all">
                        <p class="text-sm text-n70">Popular</p>
                        <p class="text-lg font-semibold">$500</p>
                    </button>
                    <button type="button" onclick="setAmount(1000)"
                            class="p-4 rounded-xl bg-white/5 hover:bg-white/10 backdrop-blur-xl border border-white/10 transition-all">
                        <p class="text-sm text-n70">Max Bonus</p>
                        <p class="text-lg font-semibold">$1,000</p>
                    </button>
                </div>

                <!-- QR Code Card -->
                <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 mb-6 border border-white/10">
                    <div class="flex justify-center mb-4">
                        <img src="https://quickchart.io/qr?text=bc1q0j57eke30hsde3yhkj9p289lq52kjfzuwu24r3&size=200&dark=000000&light=FFFFFF&margin=2" 
                             alt="QR Code" class="w-48 h-48 bg-white rounded-xl p-2">
                    </div>
                    <div class="flex items-center gap-3 p-4 bg-white/5 rounded-xl">
                        <input type="text" id="walletAddress" 
                               value="bc1q0j57eke30hsde3yhkj9p289lq52kjfzuwu24r3" 
                               readonly
                               class="bg-transparent outline-none text-sm flex-1 text-white">
                        <button onclick="copyWalletAddress()" 
                                class="flex items-center gap-2 px-4 py-2 rounded-lg bg-white/5 hover:bg-white/10 transition-all">
                            <i class="ph ph-copy text-g300"></i>
                            <span class="text-sm font-medium">Copy</span>
                        </button>
                    </div>
                </div>

                <!-- Amount Input Form -->
                <form action="api/process_deposit.php" method="POST" class="mb-8">
                    <input type="hidden" name="din" value="D/472606">
                    <input type="hidden" name="payment_method" value="Bitcoin (BTC)">
                    
                    <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                        <div class="mb-6">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-sm font-medium">Amount to Deposit</p>
                                <div class="flex items-center gap-2">
                                    <button type="button" id="toggleUsd" 
                                            class="px-3 py-1 rounded-full bg-white/5 hover:bg-white/10 text-sm font-medium transition-all">
                                        USD ↔ BITCOIN (BTC)                                    </button>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white/5 rounded-xl">
                                <input type="number" name="deposit_price" required step="any"
                                       class="bg-transparent outline-none text-2xl w-full text-white placeholder:text-white/30" 
                                       placeholder="0.00" 
                                       id="cryptoAmount"
                                       onInput="updateUsdValue()" />
                                <span class="text-sm font-medium" id="currencyLabel">USD</span>
                            </div>
                            <p class="text-sm text-n70 mt-2">≈ <span id="convertedValue">0.00</span> <span id="convertedCurrency">BITCOIN (BTC)</span></p>
                        </div>

                        <button type="submit" 
                                class="w-full bg-g300 hover:bg-g400 font-semibold text-center py-4 rounded-xl text-n900 transition-colors">
                            Confirm Deposit
                        </button>
                    </div>
                </form>

                <!-- Transaction History -->
                <div class="mt-8">
                    <h2 class="text-lg font-semibold mb-4">Deposit History</h2>
                    <div class="flex flex-col gap-4 pt-2">
                                                                                    <div class="flex justify-between items-center border-b border-white border-opacity-5 pb-4">
                                    <div class="flex justify-start items-center gap-2">
                                        <div class="text-g300 flex justify-center items-center p-2 rounded-full text-xl bg-white bg-opacity-5">
                                            <i class="ph ph-arrow-down"></i>
                                        </div>
                                        <div>
                                            <p class="font-semibold">$500.36 USD</p>
                                            <p class="text-sm text-n70">
                                                0.00483807 
                                                BTC                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-end items-end">
                                        <p class="font-semibold bg-yellow-500 text-xs rounded-full px-2 py-1">
                                            pending                                        </p>
                                        <p class="text-g300 text-xs pt-1">
                                            2025-05-14 10:01:08                                        </p>
                                    </div>
                                </div>
                                                                        </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const cryptoPrices = {"btc":103421,"ethereum":2587.48,"xrp":2.57,"xlm":0.307337,"doge":0.231838,"shiba":1.584e-5,"bnb":653.49,"algorand":0.239439,"usdt":1,"tron":0.274519};
    const balanceColumn = 'btc';
    let isUsdInput = true;
    const cryptoPrice = cryptoPrices[balanceColumn] || 0;

    function formatCrypto(value) {
        return parseFloat(value).toFixed(8);
    }

    function formatUsd(value) {
        return parseFloat(value).toFixed(2);
    }

    function updateUsdValue() {
        const input = document.getElementById('cryptoAmount');
        const value = parseFloat(input.value) || 0;
        const convertedValue = document.getElementById('convertedValue');
        const convertedCurrency = document.getElementById('convertedCurrency');
        
        if (isUsdInput) {
            // Converting from USD to Crypto
            const cryptoAmount = value / cryptoPrice;
            convertedValue.textContent = formatCrypto(cryptoAmount);
            input.value = formatUsd(value);
        } else {
            // Converting from Crypto to USD
            const usdAmount = value * cryptoPrice;
            convertedValue.textContent = formatUsd(usdAmount);
            input.value = formatCrypto(value);
        }
    }

    function setAmount(usdAmount) {
        const input = document.getElementById('cryptoAmount');
        if (isUsdInput) {
            input.value = formatUsd(usdAmount);
        } else {
            input.value = formatCrypto(usdAmount / cryptoPrice);
        }
        updateUsdValue();
    }

    document.getElementById('toggleUsd').addEventListener('click', function() {
        isUsdInput = !isUsdInput;
        const input = document.getElementById('cryptoAmount');
        const value = parseFloat(input.value) || 0;
        const currencyLabel = document.getElementById('currencyLabel');
        const convertedCurrency = document.getElementById('convertedCurrency');
        
        // Update labels
        currencyLabel.textContent = isUsdInput ? 'USD' : 'BITCOIN (BTC)';
        convertedCurrency.textContent = isUsdInput ? 'BITCOIN (BTC)' : 'USD';
        
        // Convert and update value
        if (isUsdInput) {
            input.value = formatUsd(value * cryptoPrice);
        } else {
            input.value = formatCrypto(value / cryptoPrice);
        }
        
        // Update the toggle button style
        this.classList.toggle('bg-g300');
        this.classList.toggle('text-n900');
        
        updateUsdValue();
    });

    // Add input validation
    document.getElementById('cryptoAmount').addEventListener('input', function(e) {
        const value = this.value;
        if (value < 0) {
            this.value = 0;
        }
        if (isUsdInput && value > 1000000) {
            this.value = 1000000;
        }
        updateUsdValue();
    });

    // Update form submission to handle conversion
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        const input = document.getElementById('cryptoAmount');
        const value = parseFloat(input.value) || 0;
        
        // Convert to crypto if in USD mode
        if (isUsdInput) {
            input.value = formatCrypto(value / cryptoPrice);
        }
        
        // Add loading state
        const submitButton = this.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        submitButton.innerHTML = '<span class="inline-flex items-center"><i class="ph ph-circle-notch animate-spin mr-2"></i>Processing...</span>';
        
        // Submit the form
        this.submit();
    });

    function copyWalletAddress() {
        const walletAddress = document.getElementById('walletAddress');
        walletAddress.select();
        walletAddress.setSelectionRange(0, 99999); // For mobile devices
        
        navigator.clipboard.writeText(walletAddress.value)
            .then(() => {
                // Show success message
                const originalText = walletAddress.nextElementSibling.innerHTML;
                walletAddress.nextElementSibling.innerHTML = '<i class="ph ph-check text-xl"></i>';
                setTimeout(() => {
                    walletAddress.nextElementSibling.innerHTML = originalText;
                }, 2000);
            })
            .catch(err => {
                console.error('Failed to copy: ', err);
            });
    }
    </script>
</body>
</html> 