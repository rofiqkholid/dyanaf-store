<!-- VA Payment UI Modal (Core API) -->
<div id="vaPaymentModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="va-payment-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div id="vaBackdrop" class="fixed inset-0 bg-black/60 transition-opacity duration-300 opacity-0"></div>

    <div class="fixed inset-0 z-10 flex items-center justify-center p-0 sm:p-4">
        <!-- Modal Panel -->
        <div id="vaPanel" class="relative w-full h-full sm:h-auto sm:max-h-[90vh] sm:max-w-2xl bg-white sm:border sm:border-gray-200 shadow-lg transition-all duration-500 ease-out scale-95 opacity-0 flex flex-col overflow-hidden">

            <!-- Header -->
            <div class="flex items-center justify-between px-4 sm:px-6 py-4 bg-[#2b3a4b] text-white border-b border-gray-200 shrink-0">
                <div class="flex items-center gap-3">
                    <i class="fas fa-university text-lg"></i>
                    <h3 class="text-base sm:text-lg font-semibold" id="va-payment-title">Virtual Account</h3>
                </div>
                <button type="button" onclick="closeVaModal()" class="text-white/80 hover:text-white p-1 transition-colors cursor-pointer">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Order Summary -->
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 shrink-0">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Layanan</p>
                        <p class="text-base font-semibold text-[#2b3a4b]" id="va-service-name"></p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500 mb-1">Total Pembayaran</p>
                        <p class="text-xl font-bold text-[#2b3a4b]" id="va-price-display"></p>
                    </div>
                </div>
                <div class="mt-3 flex items-center gap-2 text-sm text-gray-600">
                    <i class="fas fa-user text-[#2b3a4b]"></i>
                    <span id="va-customer-name"></span>
                </div>
            </div>

            <!-- Content -->
            <div class="flex-1 px-6 py-4 overflow-y-auto">

                <!-- Loading State -->
                <div id="va-loading" class="text-center py-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#2b3a4b] rounded-full mb-4 animate-pulse">
                        <i class="fas fa-spinner fa-spin text-white text-2xl"></i>
                    </div>
                    <p class="text-[#2b3a4b] font-medium">Membuat Virtual Account...</p>
                    <p class="text-gray-400 text-sm mt-2">Mohon tunggu sebentar</p>
                </div>

                <!-- VA Display -->
                <div id="va-content" class="hidden">
                    <div class="bg-white border border-gray-200 p-6">
                        <div class="mb-6">
                            <p class="text-lg font-bold text-[#2b3a4b] mb-2" id="va-bank-title">Bank Virtual Account</p>
                            <p class="text-sm text-gray-600">Silakan transfer tepat Rp <span id="va-exact-amount"></span></p>
                        </div>

                        <!-- VA Number -->
                        <div class="bg-gray-50 border border-gray-200 p-4 sm:p-6 mb-6">
                            <p class="text-sm font-medium text-gray-700 mb-2">Nomor Virtual Account:</p>
                            <div class="flex items-center justify-between gap-2 bg-white p-3 sm:p-4 border border-[#2b3a4b]">
                                <span class="text-sm sm:text-xl font-bold text-[#2b3a4b] break-all" id="va-number-display">Loading...</span>
                                <button onclick="copyVANumber()" class="text-[#2b3a4b] hover:text-gray-600 cursor-pointer transition-colors flex-shrink-0">
                                    <i class="fas fa-copy text-lg sm:text-xl"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Instructions -->
                        <div class="bg-gray-50 border border-gray-200 p-4 mb-4">
                            <p class="text-xs font-semibold text-[#2b3a4b] mb-2">Cara Pembayaran:</p>
                            <ol class="text-xs text-gray-600 space-y-1 list-decimal list-inside" id="va-instructions">
                                <li>Buka aplikasi mobile banking atau ATM</li>
                                <li>Pilih menu Transfer > Virtual Account</li>
                                <li>Masukkan nomor VA di atas</li>
                                <li>Konfirmasi detail pembayaran</li>
                                <li>Selesaikan pembayaran</li>
                            </ol>
                        </div>

                        <!-- Expiry -->
                        <div class="bg-gray-50 border border-gray-200 p-4 mb-4">
                            <div class="flex items-center gap-2 text-[#2b3a4b]">
                                <i class="fas fa-clock"></i>
                                <p class="text-sm font-medium">Berlaku hingga <strong id="va-expiry">24 jam</strong></p>
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="bg-gray-50 border border-gray-200 p-4">
                            <p class="text-sm text-gray-600 mb-2">Status Pembayaran:</p>
                            <div id="va-payment-status" class="flex items-center justify-center gap-2">
                                <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-[#2b3a4b]">Menunggu Pembayaran...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Error State -->
                <div id="va-error" class="hidden text-center py-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
                    </div>
                    <p class="text-[#2b3a4b] font-medium mb-2">Gagal Membuat Virtual Account</p>
                    <p id="va-error-message" class="text-gray-600 text-sm"></p>
                </div>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 shrink-0">
                <button type="button" onclick="closeVaModal()" class="w-full h-12 flex items-center justify-center rounded-lg bg-[#2b3a4b] text-white hover:bg-[#1e2a36] transition-all cursor-pointer shadow-sm">
                    <span class="font-semibold text-sm">Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    let vaData = {
        serviceName: '',
        price: 0,
        customerName: '',
        phone: '',
        orderId: null,
        paymentMethod: '',
        vaNumber: ''
    };
    let vaScrollPosition = 0;
    let vaStatusCheckInterval = null;

    function showVaPayment(method, serviceName, price, customerName, phone) {
        vaData = {
            serviceName: serviceName,
            price: price,
            customerName: customerName,
            phone: phone,
            orderId: null,
            paymentMethod: method,
            vaNumber: ''
        };

        // Bank-specific titles and colors
        const bankConfig = {
            'bca_va': {
                name: 'BCA',
                color: 'from-blue-600 to-blue-800'
            },
            'bni_va': {
                name: 'BNI',
                color: 'from-orange-500 to-orange-700'
            },
            'bri_va': {
                name: 'BRI',
                color: 'from-blue-600 to-indigo-700'
            },
            'mandiri_va': {
                name: 'MANDIRI',
                color: 'from-blue-600 to-yellow-500'
            }
        };

        const bank = bankConfig[method] || {
            name: 'Bank',
            color: 'from-blue-600 to-blue-800'
        };

        // Populate modal
        document.getElementById('va-payment-title').textContent = bank.name + ' Virtual Account';
        document.getElementById('va-bank-title').textContent = bank.name + ' Virtual Account';
        document.getElementById('va-service-name').textContent = serviceName;
        document.getElementById('va-price-display').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);
        document.getElementById('va-exact-amount').textContent = new Intl.NumberFormat('id-ID').format(price);
        document.getElementById('va-customer-name').textContent = customerName;

        // Show modal
        const modal = document.getElementById('vaPaymentModal');
        const backdrop = document.getElementById('vaBackdrop');
        const panel = document.getElementById('vaPanel');

        modal.classList.remove('hidden');

        // Lock scroll
        vaScrollPosition = window.pageYOffset;
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${vaScrollPosition}px`;
        document.body.style.width = '100%';

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');
        }, 10);

        // Reset states
        document.getElementById('va-loading').classList.remove('hidden');
        document.getElementById('va-content').classList.add('hidden');
        document.getElementById('va-error').classList.add('hidden');

        // Create VA charge
        createVaCharge(method);
    }

    function createVaCharge(method) {
        fetch('/api/payment/core/charge', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    payment_method: method,
                    service_name: vaData.serviceName,
                    price: vaData.price,
                    customer_name: vaData.customerName,
                    phone: vaData.phone
                })
            })
            .then(response => response.json())
            .then(data => {
                // Handling SNAP TOKEN (Prodcution Fallback)
                if (data.success && data.snap_token) {
                    document.getElementById('va-loading').classList.add('hidden');
                    closeVaModal();

                    window.snap.pay(data.snap_token, {
                        onSuccess: function(result) {
                            // Handle logic success
                            vaData.orderId = data.order_id; // Ensure orderId is saved
                            handleVaSuccess();
                        },
                        onPending: function(result) {
                            // If pending, maybe we simulate success or wait
                            // For now let's just close
                        },
                        onError: function(result) {
                            showToast('Pembayaran Gagal', 'error');
                        }
                    });
                    return;
                }

                if (data.success && data.va_number) {
                    vaData.orderId = data.order_id;
                    vaData.vaNumber = data.va_number;

                    // Hide loading, show VA
                    document.getElementById('va-loading').classList.add('hidden');
                    document.getElementById('va-content').classList.remove('hidden');
                    document.getElementById('va-number-display').textContent = data.va_number;

                    if (data.expiry_time) {
                        const expiryDate = new Date(data.expiry_time);
                        document.getElementById('va-expiry').textContent = expiryDate.toLocaleString('id-ID');
                    }

                    // Start checking payment status
                    startVaStatusChecking();
                } else {
                    showVaError(data.error || 'Gagal membuat Virtual Account');
                }
            })
            .catch(error => {
                console.error(error);
                showVaError('Terjadi kesalahan sistem');
            });
    }

    function startVaStatusChecking() {
        // Check every 5 seconds
        vaStatusCheckInterval = setInterval(() => {
            fetch(`/api/payment/status/${vaData.orderId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'settlement' || data.status === 'capture') {
                        clearInterval(vaStatusCheckInterval);

                        // Update status display
                        const statusDiv = document.getElementById('va-payment-status');
                        statusDiv.innerHTML = `
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <span class="text-sm font-medium text-green-700">Pembayaran Berhasil!</span>
                        `;

                        setTimeout(() => {
                            closeVaModal();
                            handleVaSuccess();
                        }, 2000);
                    }
                });
        }, 5000);

        // Stop after 24 hours
        setTimeout(() => {
            if (vaStatusCheckInterval) {
                clearInterval(vaStatusCheckInterval);
            }
        }, 86400000);
    }

    function handleVaSuccess() {
        if (typeof showToast === 'function') {
            showToast('Pembayaran Berhasil! Mengarahkan ke WhatsApp...', 'success');
        }

        const message = `Saya sudah melakukan pembayaran:

*Order ID:* ${vaData.orderId}
*Nama:* ${vaData.customerName}
*Layanan:* ${vaData.serviceName}
*Total:* Rp ${new Intl.NumberFormat('id-ID').format(vaData.price)}

Mohon segera diproses. Terima kasih!`;

        const waNumber = '6285881721193';
        const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

        setTimeout(() => {
            window.location.href = waUrl;
        }, 1500);
    }

    function copyVANumber() {
        navigator.clipboard.writeText(vaData.vaNumber).then(() => {
            if (typeof showToast === 'function') {
                showToast('Nomor VA berhasil disalin!', 'success');
            }
        });
    }

    function showVaError(message) {
        document.getElementById('va-loading').classList.add('hidden');
        document.getElementById('va-content').classList.add('hidden');
        document.getElementById('va-error').classList.remove('hidden');
        document.getElementById('va-error-message').textContent = message;
    }

    function closeVaModal() {
        // Cancel transaction if exists
        if (vaData.orderId) {
            fetch('{{ route("api.payment.cancel") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    order_id: vaData.orderId
                })
            }).then(() => {
                console.log('VA transaction cancelled');
                if (typeof showToast === 'function') {
                    showToast('Pembayaran Virtual Account dibatalkan', 'info');
                }
            }).catch(err => console.error('Cancel error:', err));
        }

        // Stop status checking
        if (vaStatusCheckInterval) {
            clearInterval(vaStatusCheckInterval);
            vaStatusCheckInterval = null;
        }

        const modal = document.getElementById('vaPaymentModal');
        const backdrop = document.getElementById('vaBackdrop');
        const panel = document.getElementById('vaPanel');

        backdrop.classList.add('opacity-0');
        panel.classList.remove('scale-100', 'opacity-100');
        panel.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');

            // Unlock scroll
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.width = '';
            window.scrollTo(0, vaScrollPosition);

            // Clear data for fresh start next time
            vaData.orderId = null;
            vaData.vaNumber = '';
        }, 300);
    }
</script>