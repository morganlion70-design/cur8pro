<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Support Tickets</title>
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
                <div class="py-6">
                    <h1 class="text-xl font-semibold">Support Tickets</h1>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="pt-[88px] pb-[80px] relative">
            <div class="max-w-2xl mx-auto px-4">
                <!-- Create Ticket Button -->
                <div class="mb-6">
                    <button onclick="window.location.href='create_ticket.php'" 
                            class="bg-g300 hover:bg-g400 text-white font-semibold py-2 px-4 rounded-lg flex items-center gap-2 transition duration-300">
                        <i class="ph ph-plus"></i>
                        <span>New Ticket</span>
                    </button>
                </div>

                <!-- Tickets List -->
                <div class="space-y-4">
                                            <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10 text-center">
                            <div class="mb-4">
                                <i class="ph ph-ticket text-6xl text-g300"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">No Tickets Found</h3>
                            <p class="text-gray-400 mb-4">You haven't created any support tickets yet.</p>
                        </div>
                                    </div>
            </div>
        </div>
    </div>
  </body>
</html> 