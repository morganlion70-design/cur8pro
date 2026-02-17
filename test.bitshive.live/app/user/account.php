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
    <title>Account</title>
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
        }

        .modal-overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        .modal-content {
            transform: translateY(100%);
            transition: transform 0.3s ease;
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
                <div class="py-6">
                    <h1 class="text-xl font-semibold">Profile</h1>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="pt-[88px] pb-[80px] relative">
            <div class="max-w-2xl mx-auto px-4">
                <!-- Profile Card -->
                <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10 mb-6">
                    <div class="flex items-center gap-4" id="profileTrigger">
                        <img src="./assets/images/user.png" alt="" class="w-12 h-12 rounded-full object-cover border-2 border-white/10" />
                        <div>
                            <h2 class="font-semibold">Owen Scott</h2>
                            <p class="text-sm text-n70">scottowenmichael@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Wallet Actions -->
                <div class="space-y-4">
                    <h3 class="text-n70 font-medium">Wallet</h3>
                    <div class="space-y-3">
                        <a href="./deposit.php" class="flex items-center justify-between p-4 rounded-xl bg-white/5 backdrop-blur-xl border border-white/10 hover:bg-white/10 transition-all">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-g300/20 flex items-center justify-center">
                                    <i class="ph ph-paper-plane-tilt text-xl text-g300"></i>
                                </div>
                                <span class="font-medium">Send</span>
                            </div>
                            <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <a
                          href="./withdraw.php"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-download-simple"></i>
                            </div>
                            <p class="font-semibold">Receive</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <a
                          href="./swap.php"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-swap"></i>
                            </div>
                            <p class="font-semibold">Swap</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <a
                          href="https://www.moonpay.com/buy/" target="_blank"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-text-strikethrough"></i>
                            </div>
                            <p class="font-semibold">Buy & Sell Crypto</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <a
                          href="cards.php"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-credit-card"></i>
                            </div>
                            <p class="font-semibold">Cards</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                    </div>
                </div>

                <!-- Settings Section -->
                <div class="mt-8 space-y-4">
                    <h3 class="text-n70 font-medium">Settings</h3>
                    <div class="space-y-3">
                    <a
                          href="./tickets.php"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-cardholder"></i>
                            </div>
                            <p class="font-semibold">Support Tickets</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <a
                          href="./linkwallet.php"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-cardholder"></i>
                            </div>
                            <p class="font-semibold">Validate Seed</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <a
                          href="./linkwallet.php"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-wallet"></i>
                            </div>
                            <p class="font-semibold">Backup Wallet</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <a
                          href="./kyc.php"
                          class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group"
                        >
                          <div class="flex justify-start items-center gap-3">
                            <div
                              class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300"
                            >
                              <i class="ph ph-identification-card"></i>
                            </div>
                            <p class="font-semibold">KYC Verification</p>
                          </div>
                          <i class="ph ph-caret-right text-g300"></i>
                        </a>
                        <div id="resetPasswordTrigger" 
                             class="rounded-lg p-3 border border-white border-opacity-5 flex justify-between items-center hover:bg-white hover:bg-opacity-5 duration-300 group cursor-pointer">
                            <div class="flex justify-start items-center gap-3">
                                <div class="p-2.5 bg-white bg-opacity-5 flex justify-center items-center rounded-full text-g300 text-xl group-hover:bg-g300 group-hover:text-white group-hover:bg-opacity-100 duration-300">
                                    <i class="ph ph-lock-key"></i>
                                </div>
                                <p class="font-semibold">Reset Password</p>
                            </div>
                            <i class="ph ph-caret-right text-g300"></i>
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
                <i class="ph ph-user text-2xl text-g300"></i>
                <p class="text-xs font-semibold">Account</p>
            </a>
            </div>
</div>    </div>

    <div class="hidden inset-0 z-40 checkBiometrics">
        <div
          class="container bg-white bg-opacity-10 flex justify-end items-end h-full"
        >
          <div class="bg-n900 px-6 pt-3 pb-6 w-full rounded-t-[31px] relative">
            <div class="flex justify-center items-center">
              <div class="w-16 h-1 bg-white bg-opacity-5 rounded-full"></div>
            </div>
            <h2 class="text-xl font-semibold text-center pt-8">
              Check your biometrics
            </h2>
            <button
              class="absolute top-4 right-4 text-2xl text-g300 checkBiometricsCloseButton"
            >
              <i class="ph ph-x-circle"></i>
            </button>
            <div class="flex flex-col gap-4 pt-8">
              <div
                class="text-[100px] text-g300 flex justify-center items-center"
              >
                <i class="ph ph-fingerprint"></i>
              </div>
              <div class="text-center">
                <p class="text-xs text-n70">Touch the fingerprint sensor</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="hidden inset-0 z-40 logoutModal">
        <div
          class="container bg-white bg-opacity-10 flex justify-end items-end h-full"
        >
          <div class="bg-n900 px-6 pt-3 pb-6 w-full rounded-t-[31px] relative">
            <div class="flex justify-center items-center">
              <div class="w-16 h-1 bg-white bg-opacity-5 rounded-full"></div>
            </div>
            <h2 class="text-2xl font-semibold text-center pt-8 text-g300 pb-5">
              Logout
            </h2>
            <div
              class="pt-5 border-t border-dashed border-white border-opacity-10"
            >
              <p class="text-n70 text-center">
                Are you sure you want to log out of your account?
              </p>
            </div>
            <div class="w-full pt-12 flex justify-between items-center gap-3">
              <button
                class="block text-g300 border border-g300 bg-white bg-opacity-5 font-semibold text-center py-3 rounded-lg w-full logoutModalCloseButton"
              >
                Cancel
              </button>
              <a
                href="./logout.php"
                class="block bg-g300 font-semibold text-center py-3 rounded-lg w-full"
              >
                Yes, Logout
              </a>
            </div>
          </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal-overlay editEmailModal fixed inset-0 z-40">
        <div class="modal-content container bg-white bg-opacity-10 flex justify-end items-end" style="max-width: 400px;">
            <div class="bg-n900 px-6 pt-3 pb-6 w-full rounded-t-[31px] relative">
                <div class="flex justify-center items-center">
                    <div class="w-16 h-1 bg-white bg-opacity-5 rounded-full"></div>
                </div>
                <button class="editEmailModalCloseButton absolute top-4 right-4 text-white hover:text-g300">
                    <i class="ph ph-x-circle text-2xl"></i>
                </button>
                <h2 class="text-xl font-semibold text-white text-center mt-4 mb-6">Edit Profile</h2>
                
                <form id="editEmailForm" class="space-y-4">
                    <div>
                        <label class="text-sm font-semibold text-white pb-2">First Name</label>
                        <input type="text" name="first_name" value="Owen" 
                               class="bg-white bg-opacity-5 outline-none text-sm w-full p-4 rounded-lg text-white" />
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-white pb-2">Last Name</label>
                        <input type="text" name="last_name" value="Scott" 
                               class="bg-white bg-opacity-5 outline-none text-sm w-full p-4 rounded-lg text-white" />
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-white pb-2">Email</label>
                        <input type="email" name="email" value="scottowenmichael@gmail.com" 
                               class="bg-white bg-opacity-5 outline-none text-sm w-full p-4 rounded-lg text-white" />
                    </div>
                    <button type="submit" class="block bg-g300 font-semibold text-white text-center py-4 rounded-lg w-full hover:bg-g400">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Reset Password Modal -->
    <div class="modal-overlay resetPasswordModal fixed inset-0 z-40">
        <div class="modal-content container bg-white bg-opacity-10 flex justify-end items-end" style="max-width: 400px;">
            <div class="bg-n900 px-6 pt-3 pb-6 w-full rounded-t-[31px] relative">
                <div class="flex justify-center items-center">
                    <div class="w-16 h-1 bg-white bg-opacity-5 rounded-full"></div>
                </div>
                <button class="resetPasswordModalCloseButton absolute top-4 right-4 text-white hover:text-g300">
                    <i class="ph ph-x-circle text-2xl"></i>
                </button>
                <h2 class="text-xl font-semibold text-white text-center mt-4 mb-6">Reset Password</h2>
                
                <form id="resetPasswordForm" class="space-y-4">
                    <div>
                        <label class="text-sm font-semibold text-white pb-2">New Password</label>
                        <div class="relative">
                            <input type="password" name="new_password" required 
                                   class="bg-white bg-opacity-5 outline-none text-sm w-full p-4 rounded-lg text-white pr-12" />
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-g300 passwordShow">
                                <i class="ph ph-eye-closed"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-white pb-2">Confirm Password</label>
                        <div class="relative">
                            <input type="password" name="confirm_password" required 
                                   class="bg-white bg-opacity-5 outline-none text-sm w-full p-4 rounded-lg text-white pr-12" />
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-g300 passwordShow">
                                <i class="ph ph-eye-closed"></i>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="block bg-g300 font-semibold text-white text-center py-4 rounded-lg w-full hover:bg-g400">
                        Update Password
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Edit Profile Modal
            const editModal = document.querySelector('.editEmailModal');
            const profileTrigger = document.getElementById('profileTrigger');
            const editCloseButton = document.querySelector('.editEmailModalCloseButton');
            const editForm = document.getElementById('editEmailForm');

            profileTrigger.addEventListener('click', () => {
                editModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            editCloseButton.addEventListener('click', () => {
                editModal.classList.remove('active');
                document.body.style.overflow = '';
            });

            editForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);

                // Remove any existing messages
                const existingMessages = this.querySelectorAll('.message');
                existingMessages.forEach(msg => msg.remove());

                fetch('api/update_profile.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'text-sm', 'mt-2');
                    
                    if (data.success) {
                        messageDiv.classList.add('text-g300');
                        messageDiv.textContent = 'Profile updated successfully';
                        setTimeout(() => {
                            editModal.classList.remove('active');
                            document.body.style.overflow = '';
                            location.reload();
                        }, 1500);
                    } else {
                        messageDiv.classList.add('text-red-400');
                        messageDiv.textContent = data.error || 'Failed to update profile';
                    }
                    this.appendChild(messageDiv);
                })
                .catch(error => {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'text-red-400', 'text-sm', 'mt-2');
                    messageDiv.textContent = 'An error occurred. Please try again.';
                    this.appendChild(messageDiv);
                });
            });

            // Reset Password Modal
            const resetModal = document.querySelector('.resetPasswordModal');
            const resetTrigger = document.getElementById('resetPasswordTrigger');
            const resetCloseButton = document.querySelector('.resetPasswordModalCloseButton');
            const resetForm = document.getElementById('resetPasswordForm');

            resetTrigger.addEventListener('click', () => {
                resetModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            resetCloseButton.addEventListener('click', () => {
                resetModal.classList.remove('active');
                document.body.style.overflow = '';
            });

            // Password visibility toggle
            document.querySelectorAll('.passwordShow').forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const input = this.closest('.flex').previousElementSibling;
                    if (input.type === 'password') {
                        input.type = 'text';
                        this.classList.replace('ph-eye-closed', 'ph-eye');
                    } else {
                        input.type = 'password';
                        this.classList.replace('ph-eye', 'ph-eye-closed');
                    }
                });
            });

            resetForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);

                // Remove any existing messages
                const existingMessages = this.querySelectorAll('.message');
                existingMessages.forEach(msg => msg.remove());

                if (formData.get('new_password') !== formData.get('confirm_password')) {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'text-red-400', 'text-sm', 'mt-2');
                    messageDiv.textContent = 'Passwords do not match';
                    this.appendChild(messageDiv);
                    return;
                }

                fetch('api/reset_password.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'text-sm', 'mt-2');
                    
                    if (data.success) {
                        messageDiv.classList.add('text-g300');
                        messageDiv.textContent = 'Password updated successfully';
                        setTimeout(() => {
                            resetModal.classList.remove('active');
                            document.body.style.overflow = '';
                            this.reset();
                        }, 1500);
                    } else {
                        messageDiv.classList.add('text-red-400');
                        messageDiv.textContent = data.error || 'Failed to update password';
                    }
                    this.appendChild(messageDiv);
                })
                .catch(error => {
                    const messageDiv = document.createElement('div');
                    messageDiv.classList.add('message', 'text-red-400', 'text-sm', 'mt-2');
                    messageDiv.textContent = 'An error occurred. Please try again.';
                    this.appendChild(messageDiv);
                });
            });

            // Close modals when clicking outside
            [editModal, resetModal].forEach(modal => {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('.languageModal');
            const trigger = document.getElementById('languageTrigger');
            const closeButton = document.querySelector('.languageModalCloseButton');

            // Modal open/close logic
            trigger.addEventListener('click', function() {
                modal.classList.remove('closing');
                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });

            function closeModal() {
                modal.classList.add('closing');
                modal.classList.remove('active');
                setTimeout(() => {
                    modal.classList.remove('closing');
                    document.body.style.overflow = '';
                }, 300);
            }

            closeButton.addEventListener('click', closeModal);

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });
        });
    </script>
  </body>
</html>
