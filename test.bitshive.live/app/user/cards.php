
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cards - QFS Ledger X</title>
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
    <style>
        .card-gradient-visa {
            background: linear-gradient(135deg, #1a1f71 0%, #2b3595 100%);
        }
        .card-gradient-mastercard {
            background: linear-gradient(135deg, #1a1f71 0%, #ea001b 100%);
        }
        .card-gradient-amex {
            background: linear-gradient(135deg, #006fcf 0%, #10509e 100%);
        }
        .card-gradient-discover {
            background: linear-gradient(135deg, #ff6600 0%, #d97b16 100%);
        }
        .card-chip {
            background: linear-gradient(135deg, #daa520 0%, #ffd700 50%, #daa520 100%);
        }
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            z-index: -1;
        }
        .modal-content {
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        .modal-overlay.active {
            opacity: 1;
            pointer-events: auto;
            z-index: 40;
        }
        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }
    </style>
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
                    <div class="flex items-center gap-3">
                        <a href="./account.php" class="text-white/70 hover:text-white">
                            <i class="ph ph-arrow-left text-2xl"></i>
                        </a>
                        <h1 class="text-xl font-semibold">Cards</h1>
                    </div>
                    <button id="applyCardBtn" class="bg-g300 hover:bg-g400 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-2">
                        <i class="ph ph-plus"></i>
                        <span>Apply</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="pt-[88px] pb-[80px] relative">
            <div class="max-w-2xl mx-auto px-4">
                <!-- Cards Section -->
                <div class="space-y-6">
                                            <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 text-center">
                            <div class="flex flex-col items-center justify-center gap-4">
                                <div class="w-16 h-16 rounded-full bg-white/5 flex items-center justify-center">
                                    <i class="ph ph-credit-card text-3xl text-g300"></i>
                                </div>
                                <h3 class="text-xl font-semibold">No Cards Yet</h3>
                                <p class="text-n70 max-w-md">You don't have any cards yet. Apply for a new card to get started.</p>
                                <button id="noCardsApplyBtn" class="mt-4 bg-g300 hover:bg-g400 text-white px-6 py-3 rounded-xl text-sm font-medium transition-colors">
                                    Apply for a Card
                                </button>
                            </div>
                        </div>
                                    </div>

                <!-- Card Information Section -->
                
                <!-- Card Benefits Section -->
                <div class="mt-8 space-y-4">
                    <h2 class="text-lg font-semibold">Card Benefits</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-5 border border-white/10">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-g300/20 flex items-center justify-center">
                                    <i class="ph ph-shield-check text-xl text-g300"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Fraud Protection</h3>
                                    <p class="text-sm text-n70 mt-1">24/7 monitoring for suspicious activity</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-5 border border-white/10">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-g300/20 flex items-center justify-center">
                                    <i class="ph ph-currency-circle-dollar text-xl text-g300"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Cashback Rewards</h3>
                                    <p class="text-sm text-n70 mt-1">Earn up to 2% on all purchases</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-5 border border-white/10">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-g300/20 flex items-center justify-center">
                                    <i class="ph ph-globe text-xl text-g300"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Global Acceptance</h3>
                                    <p class="text-sm text-n70 mt-1">Use your card worldwide with no foreign fees</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-5 border border-white/10">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-g300/20 flex items-center justify-center">
                                    <i class="ph ph-lock-key text-xl text-g300"></i>
                                </div>
                                <div>
                                    <h3 class="font-medium">Secure Transactions</h3>
                                    <p class="text-sm text-n70 mt-1">Enhanced security with chip technology</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        
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

    <!-- Apply Card Modal -->
    <div class="modal-overlay applyCardModal">
        <div class="modal-content container bg-white bg-opacity-10 flex justify-end items-end h-full" style="max-width: 400px;">
            <div class="bg-n900 px-6 pt-3 pb-6 w-full rounded-t-[31px] relative">
                <div class="flex justify-center items-center">
                    <div class="w-16 h-1 bg-white bg-opacity-5 rounded-full"></div>
                </div>
                <button class="applyCardModalCloseButton absolute top-4 right-4 text-white hover:text-g300">
                    <i class="ph ph-x-circle text-2xl"></i>
                </button>
                <h2 class="text-xl font-semibold text-white text-center mt-4 mb-6">Apply for a Card</h2>
                
                <form id="applyCardForm" method="POST"  class="space-y-4" style="margin-bottom: 130px;">
                    <div>
                        <label class="text-sm font-semibold text-white pb-2">Card Type</label>
                        <select name="card_type" required class="bg-white bg-opacity-5 outline-none text-sm w-full p-4 rounded-lg text-white appearance-none">
                            <option value="visa">Visa</option>
                            <option value="mastercard">Mastercard</option>
                            <option value="amex">American Express</option>
                            <option value="discover">Discover</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-white pb-2">Cardholder Name</label>
                        <input type="text" value="Owen Scott" disabled
                               class="bg-white bg-opacity-5 outline-none text-sm w-full p-4 rounded-lg text-white" />
                    </div>
                    <div class="pt-4">
                        <p class="text-sm text-white/70 mb-4">By applying for this card, you agree to our terms and conditions. Your application will be reviewed and you'll be notified once approved.</p>
                    </div>
                    <input type="hidden" name="apply_card" value="1">
                    <button type="submit" class="block bg-g300 font-semibold text-white text-center py-4 rounded-lg w-full hover:bg-g400">
                        Submit Application
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Apply Card Modal
            const applyModal = document.querySelector('.applyCardModal');
            const applyCardBtn = document.getElementById('applyCardBtn');
            const noCardsApplyBtn = document.getElementById('noCardsApplyBtn');
            const applyCloseButton = document.querySelector('.applyCardModalCloseButton');
            
            // Show modal when apply button is clicked
            if (applyCardBtn) {
                applyCardBtn.addEventListener('click', () => {
                    applyModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            }
            
            // Show modal when "no cards" apply button is clicked
            if (noCardsApplyBtn) {
                noCardsApplyBtn.addEventListener('click', () => {
                    applyModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            }
            
            // Close modal when close button is clicked
            if (applyCloseButton) {
                applyCloseButton.addEventListener('click', () => {
                    applyModal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                });
            }
            
            // Close modal when clicking outside
            applyModal.addEventListener('click', (e) => {
                if (e.target === applyModal) {
                    applyModal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
            
            // Show success message if present in URL
            const urlParams = new URLSearchParams(window.location.search);
            const successMessage = urlParams.get('success');
            const errorMessage = urlParams.get('error');
            
            if (successMessage) {
                showToast(successMessage, 'success');
                // Remove the success parameter from the URL
                window.history.replaceState({}, document.title, window.location.pathname);
            }
            
            if (errorMessage) {
                showToast(errorMessage, 'error');
                // Remove the error parameter from the URL
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        });
        
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `fixed bottom-4 right-4 px-6 py-3 rounded-xl shadow-lg z-50 transform transition-all duration-300 backdrop-blur-sm ${type === 'success' ? 'bg-g300' : 'bg-red-500'} text-white flex items-center gap-2`;
            
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
