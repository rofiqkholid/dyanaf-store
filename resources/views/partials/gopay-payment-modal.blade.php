<!-- GoPay Payment Modal (Core API) -->
<div id="gopayPaymentModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="gopay-payment-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div id="gopayBackdrop" class="fixed inset-0 bg-black/60 transition-opacity duration-300 opacity-0"></div>

    <div class="fixed inset-0 z-10 flex items-center justify-center p-0 sm:p-4">
        <!-- Modal Panel -->
        <div id="gopayPanel" class="relative w-full h-full sm:h-auto sm:max-h-[90vh] sm:max-w-2xl bg-white sm:border sm:border-gray-200 shadow-lg transition-all duration-500 ease-out scale-95 opacity-0 flex flex-col overflow-hidden">

            <!-- Header -->
            <div class="flex items-center justify-between px-6 py-4 bg-[#2b3a4b] text-white border-b border-gray-200 shrink-0">
                <div class="flex items-center gap-3">
                    <i class="fas fa-wallet text-lg"></i>
                    <h3 class="text-lg font-semibold" id="gopay-payment-title">Pembayaran GoPay</h3>
                </div>
                <button type="button" onclick="closeGopayModal()" class="text-white/80 hover:text-white p-1 transition-colors cursor-pointer">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Order Summary -->
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 shrink-0">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Layanan</p>
                        <p class="text-base font-semibold text-[#2b3a4b]" id="gopay-service-name"></p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500 mb-1">Total Pembayaran</p>
                        <p class="text-xl font-bold text-[#2b3a4b]" id="gopay-price-display"></p>
                    </div>
                </div>
                <div class="mt-3 flex items-center gap-2 text-sm text-gray-600">
                    <i class="fas fa-user text-[#2b3a4b]"></i>
                    <span id="gopay-customer-name"></span>
                </div>
            </div>

            <!-- Content -->
            <div class="flex-1 px-6 py-4 overflow-y-auto">

                <!-- Loading State -->
                <div id="gopay-loading" class="text-center py-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-[#2b3a4b] rounded-full mb-4 animate-pulse">
                        <i class="fas fa-spinner fa-spin text-white text-2xl"></i>
                    </div>
                    <p class="text-[#2b3a4b] font-medium">Memproses Pembayaran GoPay...</p>
                    <p class="text-gray-400 text-sm mt-2">Mohon tunggu sebentar</p>
                </div>

                <!-- GoPay Content (QR or Deeplink) -->
                <div id="gopay-content" class="hidden">
                    <!-- Desktop: Show QR Code -->
                    <div id="gopay-qr-section" class="bg-white border border-gray-200 p-6 text-center">
                        <div class="mb-4">
                            <p class="text-lg font-bold text-[#2b3a4b] mb-2">Scan dengan Aplikasi GoPay/Gojek</p>
                            <p class="text-sm text-gray-600">Gunakan aplikasi Gojek atau GoPay untuk scan</p>
                        </div>

                        <div class="flex justify-center mb-6">
                            <div class="p-4 bg-white border-4 border-[#2b3a4b] inline-block rounded-lg">
                                <img id="gopay-qr-image" src="" alt="GoPay QR Code" class="w-64 h-64">
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
                            <div id="gopay-payment-status" class="flex items-center justify-center gap-2">
                                <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-[#2b3a4b]">Menunggu Pembayaran...</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile: Show Deeplink Button -->
                    <div id="gopay-deeplink-section" class="hidden text-center py-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-[#2b3a4b] rounded-full mb-6">
                            <i class="fas fa-wallet text-white text-3xl"></i>
                        </div>
                        <p class="text-lg font-bold text-[#2b3a4b] mb-2">Buka Aplikasi GoPay/Gojek</p>
                        <p class="text-sm text-gray-600 mb-6">Klik tombol di bawah untuk membuka aplikasi dan menyelesaikan pembayaran</p>

                        <a id="gopay-deeplink-btn" href="#" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#2b3a4b] text-white font-semibold rounded-lg hover:bg-[#1e2a36] transition-colors">
                            <i class="fas fa-external-link-alt"></i>
                            Buka Aplikasi GoPay
                        </a>

                        <div class="mt-6 bg-gray-50 border border-gray-200 p-4">
                            <p class="text-sm text-gray-600 mb-2">Status Pembayaran:</p>
                            <div id="gopay-mobile-status" class="flex items-center justify-center gap-2">
                                <div class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                                <span class="text-sm font-medium text-[#2b3a4b]">Menunggu Pembayaran...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Error State -->
                <div id="gopay-error" class="hidden text-center py-8">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                        <i class="fas fa-exclamation-triangle text-red-600 text-2xl"></i>
                    </div>
                    <p class="text-[#2b3a4b] font-medium mb-2">Gagal Memproses Pembayaran</p>
                    <p id="gopay-error-message" class="text-gray-600 text-sm"></p>
                </div>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 shrink-0">
                <button type="button" onclick="closeGopayModal()" class="w-full h-12 flex items-center justify-center rounded-lg bg-[#2b3a4b] text-white hover:bg-[#1e2a36] transition-all cursor-pointer shadow-sm">
                    <span class="font-semibold text-sm">Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    let gopayData = {
        serviceName: '',
        price: 0,
        customerName: '',
        phone: '',
        orderId: null,
        paymentSuccess: false
    };
    let gopayScrollPosition = 0;
    let gopayStatusCheckInterval = null;

    function showGopayPayment(serviceName, price, customerName, phone, existingOrderId = null) {
        gopayData = {
            serviceName: serviceName,
            price: price,
            customerName: customerName,
            phone: phone,
            orderId: existingOrderId, // Use existing order if provided
            paymentSuccess: false
        };

        // Populate modal
        document.getElementById('gopay-service-name').textContent = serviceName;
        document.getElementById('gopay-price-display').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);
        document.getElementById('gopay-customer-name').textContent = customerName;

        // Show modal
        const modal = document.getElementById('gopayPaymentModal');
        const backdrop = document.getElementById('gopayBackdrop');
        const panel = document.getElementById('gopayPanel');

        modal.classList.remove('hidden');

        // Lock scroll
        gopayScrollPosition = window.pageYOffset;
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${gopayScrollPosition}px`;
        document.body.style.width = '100%';

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');
        }, 10);

        // Reset states
        document.getElementById('gopay-loading').classList.remove('hidden');
        document.getElementById('gopay-content').classList.add('hidden');
        document.getElementById('gopay-error').classList.add('hidden');

        // Create GoPay charge
        createGopayCharge();
    }

    function createGopayCharge() {
        const requestBody = {
            payment_method: 'gopay',
            service_name: gopayData.serviceName,
            price: gopayData.price,
            customer_name: gopayData.customerName,
            phone: gopayData.phone
        };

        // Include existing order_id if available
        if (gopayData.orderId) {
            requestBody.order_id = gopayData.orderId;
        }

        fetch('/api/payment/core/charge', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(requestBody)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    gopayData.orderId = data.order_id;

                    // Hide loading, show content
                    document.getElementById('gopay-loading').classList.add('hidden');
                    document.getElementById('gopay-content').classList.remove('hidden');

                    // Check if mobile (has deeplink)
                    const isMobile = /android|iphone|ipad|mobile/i.test(navigator.userAgent);

                    if (isMobile && data.deeplink) {
                        // Mobile: Show deeplink button
                        document.getElementById('gopay-qr-section').classList.add('hidden');
                        document.getElementById('gopay-deeplink-section').classList.remove('hidden');
                        document.getElementById('gopay-deeplink-btn').href = data.deeplink;
                    } else if (data.qr_code_url) {
                        // Desktop: Show QR code
                        document.getElementById('gopay-qr-section').classList.remove('hidden');
                        document.getElementById('gopay-deeplink-section').classList.add('hidden');
                        document.getElementById('gopay-qr-image').src = data.qr_code_url;
                    }

                    // Start checking payment status
                    startGopayStatusChecking();
                } else {
                    showGopayError(data.error || 'Gagal memproses pembayaran GoPay');
                }
            })
            .catch(error => {
                console.error(error);
                showGopayError('Terjadi kesalahan sistem');
            });
    }

    function startGopayStatusChecking() {
        // Check every 3 seconds
        gopayStatusCheckInterval = setInterval(() => {
            fetch(`/api/payment/status/${gopayData.orderId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'settlement' || data.status === 'capture') {
                        clearInterval(gopayStatusCheckInterval);

                        // Update status display
                        const statusDiv = document.getElementById('gopay-payment-status');
                        const mobileStatusDiv = document.getElementById('gopay-mobile-status');
                        const successHtml = `
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <span class="text-sm font-medium text-green-700">Pembayaran Berhasil!</span>
                        `;
                        if (statusDiv) statusDiv.innerHTML = successHtml;
                        if (mobileStatusDiv) mobileStatusDiv.innerHTML = successHtml;

                        setTimeout(() => {
                            gopayData.paymentSuccess = true;
                            closeGopayModal();
                            handleGopaySuccess();
                        }, 2000);
                    }
                });
        }, 3000);

        // Stop after 15 minutes
        setTimeout(() => {
            if (gopayStatusCheckInterval) {
                clearInterval(gopayStatusCheckInterval);
            }
        }, 900000);
    }

    function handleGopaySuccess() {
        if (typeof showToast === 'function') {
            showToast('Pembayaran Berhasil! Mengarahkan ke WhatsApp...', 'success');
        }

        const message = `Saya sudah melakukan pembayaran via GoPay:

*Order ID:* ${gopayData.orderId}
*Nama:* ${gopayData.customerName}
*Layanan:* ${gopayData.serviceName}
*Total:* Rp ${new Intl.NumberFormat('id-ID').format(gopayData.price)}

Mohon segera diproses. Terima kasih!`;

        const waNumber = '6285881721193';
        const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

        setTimeout(() => {
            window.location.href = waUrl;
        }, 1500);
    }

    function showGopayError(message) {
        document.getElementById('gopay-loading').classList.add('hidden');
        document.getElementById('gopay-content').classList.add('hidden');
        document.getElementById('gopay-error').classList.remove('hidden');
        document.getElementById('gopay-error-message').textContent = message;
    }

    function closeGopayModal() {
        // Cancel transaction if exists and payment not successful
        if (gopayData.orderId && !gopayData.paymentSuccess) {
            fetch('{{ route("api.payment.cancel") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    order_id: gopayData.orderId
                })
            }).then(() => {
                console.log('GoPay transaction cancelled');
                if (typeof showToast === 'function') {
                    showToast('Pembayaran GoPay dibatalkan', 'info');
                }
            }).catch(err => console.error('Cancel error:', err));
        }

        // Stop status checking
        if (gopayStatusCheckInterval) {
            clearInterval(gopayStatusCheckInterval);
            gopayStatusCheckInterval = null;
        }

        const modal = document.getElementById('gopayPaymentModal');
        const backdrop = document.getElementById('gopayBackdrop');
        const panel = document.getElementById('gopayPanel');

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
            window.scrollTo(0, gopayScrollPosition);

            // Clear data
            gopayData.orderId = null;
            gopayData.paymentSuccess = false;
        }, 300);
    }
</script>