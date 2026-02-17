
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>KYC Verification</title>
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
                <div class="py-6 flex items-center">
                    <a href="account.php" class="absolute left-6">
                        <i class="ph ph-arrow-left text-2xl"></i>
                    </a>
                    <h1 class="text-xl font-semibold text-center w-full">KYC Verification</h1>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="pt-[88px] pb-[80px] relative">
            <div class="max-w-2xl mx-auto px-4">
                                    <form action="api/process_kyc.php" method="POST" enctype="multipart/form-data" 
                          class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10 space-y-6">
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium mb-2">ID Type</label>
                                <select name="id_type" required class="w-full bg-white bg-opacity-5 rounded-lg p-3 text-white">
                                    <option value="passport">Passport</option>
                                    <option value="drivers_license">Driver's License</option>
                                    <option value="national_id">National ID</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium mb-2">ID Number</label>
                                <input type="text" name="id_number" required 
                                       class="w-full bg-white bg-opacity-5 rounded-lg p-3 text-white">
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Front of ID</label>
                                <input type="file" name="id_front" accept="image/*" required 
                                       class="w-full bg-white bg-opacity-5 rounded-lg p-3 text-white">
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">Back of ID</label>
                                <input type="file" name="id_back" accept="image/*" required 
                                       class="w-full bg-white bg-opacity-5 rounded-lg p-3 text-white">
                            </div>
                        </div>

                        <button type="submit" 
                                class="w-full bg-g300 text-n900 font-semibold py-3 rounded-lg">
                            Submit Application
                        </button>
                    </form>
                            </div>
        </div>
    </div>
</body>
</html> 