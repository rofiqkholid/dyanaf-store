<!-- QRIS Custom Payment UI (Core API Prototype) -->
<div id="qrisPaymentModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="qris-payment-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div id="qrisBackdrop" class="fixed inset-0 bg-black/60 transition-opacity duration-300 opacity-0"></div>

    <div class="fixed inset-0 z-10 flex items-center justify-center p-0 sm:p-4">
        <!-- Modal Panel -->
        <div id="qrisPanel" class="relative w-full h-full sm:h-auto sm:max-h-[90vh] sm:max-w-2xl bg-white sm:border sm:border-gray-200 shadow-lg transition-all duration-500 ease-out scale-95 opacity-0 flex flex-col overflow-hidden">

            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-4 bg-[#2b3a4b] text-white border-b border-gray-200 shrink-0">
                <div class="flex items-center gap-3">
                    <i class="fas fa-qrcode text-lg"></i>
                    <h3 class="text-lg font-semibold" id="qris-payment-title">Pembayaran QRIS</h3>
                </div>
                <button type="button" onclick="closeQrisModal()" class="text-white/80 hover:text-white p-1 transition-colors cursor-pointer">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Order Summary -->
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 shrink-0">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Layanan</p>
                        <p class="text-base font-semibold text-[#2b3a4b]" id="qris-service-name"></p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500 mb-1">Total Pembayaran</p>
                        <p class="text-xl font-bold text-[#2b3a4b]" id="qris-price-display"></p>
                    </div>
                </div>
                <div class="mt-3 flex items-center gap-2 text-sm text-gray-600">
                    <i class="fas fa-user text-[#2b3a4b]"></i>
                    <span id="qris-customer-name"></span>
                </div>
            </div>

            <!-- Content -->
            <div class="flex-1 px-6 py-4 overflow-y-auto">

                <!-- Loading State -->
                <div id="qris-loading" class="text-center py-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#2b3a4b] rounded-full mb-4 animate-pulse">
                        <i class="fas fa-spinner fa-spin text-white text-2xl"></i>
                    </div>
                    <p class="text-[#2b3a4b] font-medium">Membuat QR Code...</p>
                    <p class="text-gray-400 text-sm mt-2">Mohon tunggu sebentar</p>
                </div>

                <!-- QR Code Display -->
                <div id="qris-content" class="hidden">
                    <div class="bg-white border border-gray-200 p-6 text-center">
                        <div class="mb-4">
                            <p class="text-lg font-bold text-[#2b3a4b] mb-2">Scan QR Code</p>
                            <p class="text-sm text-gray-600">Gunakan aplikasi e-wallet (GoPay, OVO, Dana, ShopeePay, dll)</p>
                        </div>

                        <div class="flex justify-center mb-6">
                            <div class="p-4 bg-white border border-gray-200 inline-block">
                                <img id="qris-qr-image" src="" alt="QRIS Code" class="w-64 h-64">
                            </div>
                        </div>

                        <div class="bg-gray-50 border border-gray-200 p-4 mb-4">
                            <div class="flex items-center justify-center gap-2 text-[#2b3a4b]">
                                <i class="fas fa-clock"></i>
                                <p class="text-sm font-medium">QR Code berlaku selama <strong>15 menit</strong></p>
                            </div>
                        </div>

                        <div class="bg-gray-50 border border-gray-200 p-4">
                            <p class="text-sm text-gray-600 mb-2">Status Pembayaran:</p>
                            <div id="payment-status" class="flex items-center justify-center gap-2">
                                <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-[#2b3a4b]">Menunggu Pembayaran...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Error State -->
                <div id="qris-error" class="hidden text-center py-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
                    </div>
                    <p class="text-[#2b3a4b] font-medium mb-2">Gagal Membuat QR Code</p>
                    <p id="qris-error-message" class="text-gray-600 text-sm"></p>
                </div>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 shrink-0">
                <button type="button" onclick="closeQrisModal()" class="w-full h-12 flex items-center justify-center rounded-lg bg-[#2b3a4b] text-white hover:bg-[#1e2a36] transition-all cursor-pointer shadow-sm">
                    <span class="font-semibold text-sm">Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    let qrisData = {
        serviceName: '',
        price: 0,
        customerName: '',
        phone: '',
        orderId: null,
        paymentSuccess: false
    };
    let qrisScrollPosition = 0;
    let statusCheckInterval = null;

    function showQrisPayment(serviceName, price, customerName, phone) {
        qrisData = {
            serviceName: serviceName,
            price: price,
            customerName: customerName,
            phone: phone,
            orderId: null,
            paymentSuccess: false
        };

        // Populate modal
        document.getElementById('qris-service-name').textContent = serviceName;
        document.getElementById('qris-price-display').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);
        document.getElementById('qris-customer-name').textContent = customerName;

        // Show modal
        const modal = document.getElementById('qrisPaymentModal');
        const backdrop = document.getElementById('qrisBackdrop');
        const panel = document.getElementById('qrisPanel');

        modal.classList.remove('hidden');

        // Lock scroll
        qrisScrollPosition = window.pageYOffset;
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${qrisScrollPosition}px`;
        document.body.style.width = '100%';

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');
        }, 10);

        // Reset states
        document.getElementById('qris-loading').classList.remove('hidden');
        document.getElementById('qris-content').classList.add('hidden');
        document.getElementById('qris-error').classList.add('hidden');

        // Create QRIS charge
        createQrisCharge();
    }

    function createQrisCharge() {
        fetch('/api/payment/core/charge', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    payment_method: 'qris',
                    service_name: qrisData.serviceName,
                    price: qrisData.price,
                    customer_name: qrisData.customerName,
                    phone: qrisData.phone
                })
            })
            .then(response => response.json())
            .then(data => {
                // Handling SNAP TOKEN (Prodcution Fallback)
                if (data.success && data.snap_token) {
                    document.getElementById('qris-loading').classList.add('hidden');
                    closeQrisModal();

                    window.snap.pay(data.snap_token, {
                        onSuccess: function(result) {
                            // Handle logic success
                            qrisData.orderId = data.order_id;
                            handleQrisSuccess();
                        },
                        onPending: function(result) {
                            // If pending, maybe we simulate success or wait
                        },
                        onError: function(result) {
                            showToast('Pembayaran Gagal', 'error');
                        }
                    });
                    return;
                }

                if (data.success && data.qr_code_url) {
                    qrisData.orderId = data.order_id;

                    // Hide loading, show QR code
                    document.getElementById('qris-loading').classList.add('hidden');
                    document.getElementById('qris-content').classList.remove('hidden');
                    document.getElementById('qris-qr-image').src = data.qr_code_url;

                    // Start checking payment status
                    startStatusChecking();
                } else {
                    showQrisError(data.error || 'Gagal membuat QR Code');
                }
            })
            .catch(error => {
                console.error(error);
                showQrisError('Terjadi kesalahan sistem');
            });
    }

    function startStatusChecking() {
        // Check every 3 seconds
        statusCheckInterval = setInterval(() => {
            fetch(`/api/payment/status/${qrisData.orderId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'settlement' || data.status === 'capture') {
                        clearInterval(statusCheckInterval);

                        // Update status display
                        const statusDiv = document.getElementById('payment-status');
                        statusDiv.innerHTML = `
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <span class="text-sm font-medium text-green-700">Pembayaran Berhasil!</span>
                        `;

                        setTimeout(() => {
                            qrisData.paymentSuccess = true;
                            closeQrisModal();
                            handleQrisSuccess();
                        }, 2000);
                    }
                });
        }, 3000);

        // Stop after 15 minutes
        setTimeout(() => {
            if (statusCheckInterval) {
                clearInterval(statusCheckInterval);
            }
        }, 900000);
    }

    function handleQrisSuccess() {
        if (typeof showToast === 'function') {
            showToast('Pembayaran Berhasil! Mengarahkan ke WhatsApp...', 'success');
        }

        const message = `Saya sudah melakukan pembayaran via QRIS:

*Order ID:* ${qrisData.orderId}
*Nama:* ${qrisData.customerName}
*Layanan:* ${qrisData.serviceName}
*Total:* Rp ${new Intl.NumberFormat('id-ID').format(qrisData.price)}

Mohon segera diproses. Terima kasih!`;

        const waNumber = '6285881721193';
        const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

        setTimeout(() => {
            window.location.href = waUrl;
        }, 1500);
    }

    function showQrisError(message) {
        document.getElementById('qris-loading').classList.add('hidden');
        document.getElementById('qris-content').classList.add('hidden');
        document.getElementById('qris-error').classList.remove('hidden');
        document.getElementById('qris-error-message').textContent = message;
    }

    function closeQrisModal() {
        // Cancel transaction if exists and payment not successful
        if (qrisData.orderId && !qrisData.paymentSuccess) {
            fetch('{{ route("api.payment.cancel") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    order_id: qrisData.orderId
                })
            }).then(() => {
                console.log('QRIS transaction cancelled');
                if (typeof showToast === 'function') {
                    showToast('Pembayaran QRIS dibatalkan', 'info');
                }
            }).catch(err => console.error('Cancel error:', err));
        }

        // Stop status checking
        if (statusCheckInterval) {
            clearInterval(statusCheckInterval);
            statusCheckInterval = null;
        }

        const modal = document.getElementById('qrisPaymentModal');
        const backdrop = document.getElementById('qrisBackdrop');
        const panel = document.getElementById('qrisPanel');

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
            window.scrollTo(0, qrisScrollPosition);

            // Clear data for fresh start next time
            qrisData.orderId = null;
            qrisData.paymentSuccess = false;
        }, 300);
    }
</script>