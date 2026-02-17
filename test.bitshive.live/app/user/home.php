<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./assets/images/logo.png"
      type="image/x-icon"
    />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home - Dashboard</title>
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

        <div class="relative z-20 max-w-2xl mx-auto px-4 py-6">
            <!-- Header Section -->
            <div class="bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10">
                <div class="p-6">
                    <!-- User Info -->
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-xl border border-white/5 flex items-center justify-center overflow-hidden">
                                <img src="./assets/images/user.png" alt="" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h2 class="font-semibold text-lg">Owen Scott</h2>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-500/20 text-yellow-500">
                                        <i class="ph-fill ph-warning-circle mr-1"></i> Not Verified
                                    </span>                            </div>
                        </div>
                        <button class="p-2 rounded-xl bg-white/5 hover:bg-white/10 transition-colors">
                            <i class="ph-fill ph-bell text-xl"></i>
                        </button>
                    </div>

                    <!-- Balance Section -->
                    <div class="mb-6">
                        <p class="text-n70 text-sm mb-2">Total Balance</p>
                        <div class="flex items-center gap-3">
                            <h1 class="text-4xl font-bold">
                                $0.00                            </h1>
                            <span class="text-g300 text-sm font-medium bg-g300/10 px-2 py-1 rounded-lg">
                                +2.4%
                            </span>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="grid grid-cols-4 gap-4">
                        <a href="./deposit.php" class="flex flex-col items-center p-4 rounded-xl bg-white/5 hover:bg-white/10 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-g300/20 flex items-center justify-center mb-2">
                                <i class="ph-fill ph-download-simple text-xl text-g300"></i>
                            </div>
                            <span class="text-sm font-medium">Receive</span>
                        </a>
                        <a href="./withdraw.php" class="flex flex-col items-center p-4 rounded-xl bg-white/5 hover:bg-white/10 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-g300/20 flex items-center justify-center mb-2">
                                <i class="ph-fill ph-paper-plane-tilt text-xl text-g300"></i>
                            </div>
                            <span class="text-sm font-medium">Send</span>
                        </a>
                        <a href="./swap.php" class="flex flex-col items-center p-4 rounded-xl bg-white/5 hover:bg-white/10 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-g300/20 flex items-center justify-center mb-2">
                                <i class="ph-fill ph-arrows-down-up text-xl text-g300"></i>
                            </div>
                            <span class="text-sm font-medium">Swap</span>
                        </a>
                        <a href="https://buy.moonpay.com/v2/buy" class="flex flex-col items-center p-4 rounded-xl bg-white/5 hover:bg-white/10 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-g300/20 flex items-center justify-center mb-2">
                                <i class="ph-fill ph-swap text-xl text-g300"></i>
                            </div>
                            <span class="text-sm font-medium">Buy</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Tabs Section -->
            <div class="mt-6">
                <div class="flex gap-4 mb-6">
                    <button class="flex-1 py-3 px-4 rounded-xl bg-white/5 text-white font-medium hover:bg-white/10 transition-colors active">
                        Tokens
                    </button>
                    <button class="flex-1 py-3 px-4 rounded-xl bg-white/5 text-n70 font-medium hover:bg-white/10 transition-colors">
                        Activity
                    </button>
                </div>

                <!-- Token List -->
                <div class="space-y-4">
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Bitcoin_icon.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Bitcoin</h3>
                                <p class="text-sm text-n70">BTC</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Ethereum_ETH.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Ethereum</h3>
                                <p class="text-sm text-n70">ETH</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/tron.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">TRON</h3>
                                <p class="text-sm text-n70">TRX</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/ripple.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Ripple</h3>
                                <p class="text-sm text-n70">XRP</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Stellar.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Stellar</h3>
                                <p class="text-sm text-n70">XLM</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Dogecoin.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Dogecoin</h3>
                                <p class="text-sm text-n70">DOGE</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Litecoin.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Litecoin</h3>
                                <p class="text-sm text-n70">LTC</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Zcash.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Algorand</h3>
                                <p class="text-sm text-n70">ALGO</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Zcash.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">USDT</h3>
                                <p class="text-sm text-n70">USDT</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Zcash.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">USDT (TRC20)</h3>
                                <p class="text-sm text-n70">USDT</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Zcash.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">USDT (BEP20)</h3>
                                <p class="text-sm text-n70">USDT</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/Zcash.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">Shiba Inu</h3>
                                <p class="text-sm text-n70">SHIB</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                        <div class="flex items-center justify-between p-4 bg-white/5 backdrop-blur-xl rounded-xl border border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center p-2">
                                <img src="./assets/images/bin.png" alt="" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <h3 class="font-medium">BNB</h3>
                                <p class="text-sm text-n70">BNB</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-medium">
                                0.00000000                            </p>
                            <p class="text-sm text-n70">
                                $0.00                            </p>
                        </div>
                    </div>
                                    </div>
            </div>
        </div>
        
<div class="fixed top-6 right-6 z-40 w-auto pointer-events-none">
    <div class="pointer-events-auto">
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-9688f726-7c69-424e-8c3c-14e234d46664" data-elfsight-app-lazy></div>
    </div>
</div>

<div class="fixed left-0 right-0 bottom-0 z-50">
    <div class="container relative bg-white bg-opacity-5 py-5 flex justify-around items-center after:absolute after:bg-n700 after:inset-0">
        <div class="absolute left-[41%] bottom-[72px] z-40">
            <a onclick="location.reload();" class="bg-g300 text-2xl p-3.5 rounded-full flex justify-center items-center relative">
                <i class="ph ph-arrows-counter-clockwise"></i>
                <div class="absolute -bottom-2 -left-5 -right-5 -z-10">
                    <img src="./assets/images/reload-bg.png" alt="" />
                </div>
            </a>
        </div>

                                <a href="./home.php" 
               class="flex flex-col justify-center items-center gap-1 z-20">
                <i class="ph ph-house text-2xl text-g300"></i>
                <p class="text-xs font-semibold">Home</p>
            </a>
                                <a href="./deposit.php" 
               class="flex flex-col justify-center items-center gap-1 z-20">
                <i class="ph ph-arrow-down text-2xl "></i>
                <p class="text-xs font-semibold">Recieve</p>
            </a>
                                <a href="./linkwallet.php" 
               class="flex flex-col justify-center items-center gap-1 z-20">
                <i class="ph ph-wallet text-2xl "></i>
                <p class="text-xs font-semibold">Link Wallet</p>
            </a>
                                <a href="./account.php" 
               class="flex flex-col justify-center items-center gap-1 z-20">
                <i class="ph ph-user text-2xl "></i>
                <p class="text-xs font-semibold">Account</p>
            </a>
            </div>
</div>    </div>
    <script>
    // Tab switching functionality
    const tokenTab = document.querySelector('button:contains("Tokens")');
    const activityTab = document.querySelector('button:contains("Activity")');
    const tokenList = document.querySelector('.space-y-4');
    const activityList = document.createElement('div');
    activityList.className = 'space-y-4 hidden';

    // Add activity list content
    activityList.innerHTML = `
            `;

    tokenList.parentNode.appendChild(activityList);

    // Tab switching event listeners
    document.querySelectorAll('.flex.gap-4.mb-6 button').forEach(button => {
        button.addEventListener('click', function() {
            // Update active states
            document.querySelectorAll('.flex.gap-4.mb-6 button').forEach(btn => {
                btn.classList.remove('text-white', 'active');
                btn.classList.add('text-n70');
            });
            this.classList.remove('text-n70');
            this.classList.add('text-white', 'active');
            
            // Show/hide content
            if (this.textContent.trim() === 'Tokens') {
                tokenList.classList.remove('hidden');
                activityList.classList.add('hidden');
            } else {
                tokenList.classList.add('hidden');
                activityList.classList.remove('hidden');
            }
        });
    });
    </script>
  </body>
</html>

