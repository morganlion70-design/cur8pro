<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Deposit - QFS Ledger X</title>
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
    <div class="container bg-n900 min-h-dvh relative overflow-hidden flex justify-start items-start text-white">
        <div class="w-[582px] h-[582px] rounded-full bg-g300/30 absolute -top-32 -left-20 blur-[575px]"></div>
        <div class="w-[582px] h-[582px] rounded-full bg-blue-500/20 absolute -bottom-32 -right-20 blur-[575px]"></div>
        
        <div class="relative z-20 w-full max-w-2xl mx-auto py-8 px-4 sm:px-6">
            <div class="bg-white/5 backdrop-blur-xl rounded-2xl py-6 px-6 mb-8 border border-white/10">
                <h1 class="text-2xl font-semibold text-white text-center">Select Deposit Method</h1>
                <p class="text-n70 text-center mt-2">Choose your preferred cryptocurrency network</p>
            </div>

            <div class="space-y-4">
                                <a href="deposit_details.php?wallet=Bitcoin+%28BTC%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">Bitcoin (BTC)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=Ethereum+%28ETH%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">Ethereum (ETH)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=USDT+%28TRC20%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">USDT (TRC20)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=XLM+" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">XLM </p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=XRP" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">XRP</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=LTC" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">LTC</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=DOGE" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">DOGE</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=ALGORAND" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">ALGORAND</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=SHIBA%28ethereum%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">SHIBA(ethereum)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=USDT%28Ethereum%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">USDT(Ethereum)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=BNB%28Bnb+smart+chain%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">BNB(Bnb smart chain)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=USDC%28ethereum%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">USDC(ethereum)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=USDC%28TRC20%29" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">USDC(TRC20)</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                                <a href="deposit_details.php?wallet=TRX" 
                   class="block p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 
                          hover:bg-white/10 hover:border-white/20 transition-all duration-300 
                          transform hover:-translate-y-1">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center
                                      backdrop-blur-xl border border-white/5">
                                <i class="ph ph-currency-btc text-2xl text-g300"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-lg">TRX</p>
                                <p class="text-sm text-n70 mt-1">Estimated time: ~20 minutes</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-n70 text-sm hidden sm:inline">View Details</span>
                            <i class="ph ph-caret-right text-2xl text-g300"></i>
                        </div>
                    </div>
                </a>
                            </div>

            <div class="mt-8 p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10" style="margin-bottom: 100px;">
                <div class="flex items-start gap-4">

                    <div class="w-10 h-10 rounded-full bg-g300/20 flex items-center justify-center flex-shrink-0">
                        <i class="ph ph-info text-g300"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Important Information</h3>
                        <p class="text-n70 text-sm leading-relaxed">
                            Please ensure you select the correct network for your deposit. 
                            Sending assets on the wrong network may result in permanent loss.
                        </p>
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
                <i class="ph ph-house text-2xl "></i>
                <p class="text-xs font-semibold">Home</p>
            </a>
                                <a href="./deposit.php" 
               class="flex flex-col justify-center items-center gap-1 z-20">
                <i class="ph ph-arrow-down text-2xl text-g300"></i>
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
</div>        </div>
    </div>
</body>
</html>