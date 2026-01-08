<!-- Custom Payment UI Modal (Core API) -->
<div id="customPaymentModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="custom-payment-title" role="dialog" aria-modal="true">
    <!-- Backdrop - Transparent Dark -->
    <div id="customPaymentBackdrop" class="fixed inset-0 bg-black/60 transition-opacity duration-300 opacity-0"></div>

    <div class="fixed inset-0 z-10 flex items-center justify-center p-0 sm:p-4">
        <!-- Modal Panel - Full screen mobile, centered desktop -->
        <div id="customPaymentPanel" class="relative w-full h-full sm:h-auto sm:max-h-[90vh] sm:max-w-4xl bg-white sm:border sm:border-gray-200 shadow-lg transition-all duration-500 ease-out scale-95 opacity-0 flex flex-col overflow-hidden">

            <!-- Header - Minimal -->
            <div class="flex items-center justify-between px-6 py-4 bg-[#2b3a4b] text-white border-b border-gray-200">
                <div class="flex items-center gap-3">
                    <i class="fas fa-credit-card text-lg"></i>
                    <h3 class="text-lg font-semibold" id="custom-payment-title">Pilih Metode Pembayaran</h3>
                </div>
                <button type="button" onclick="closeCustomPaymentModal()" class="text-white/80 hover:text-white p-1 transition-colors cursor-pointer">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Order Summary - Minimal -->
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-xs text-gray-500 mb-1">Layanan</p>
                        <p class="text-base font-semibold text-[#2b3a4b]" id="custom-service-name"></p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500 mb-1">Total Pembayaran</p>
                        <p class="text-xl font-bold text-[#2b3a4b]" id="custom-price-display"></p>
                    </div>
                </div>
                <div class="mt-3 flex items-center gap-2 text-sm text-gray-600">
                    <i class="fas fa-user text-[#2b3a4b]"></i>
                    <span id="custom-customer-name"></span>
                </div>
            </div>

            <!-- Payment Methods - List Style -->
            <div class="flex-1 px-6 py-4 overflow-y-auto">

                <!-- Payment Method Selection -->
                <div id="payment-selection" class="">
                    <p class="text-sm text-gray-500 sm:hidden mb-4">Pilih metode pembayaran favorit Anda</p>

                    <!-- E-Wallets & QRIS Section -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-[#2b3a4b] mb-3 flex items-center gap-2">
                            <i class="fas fa-wallet"></i>
                            E-Wallet & QRIS
                        </h4>

                        <!-- QRIS - List Item -->
                        <button type="button" onclick="closeCustomPaymentModal(); setTimeout(() => showQrisPayment(customPaymentData.serviceName, customPaymentData.price, customPaymentData.customerName, customPaymentData.phone), 300);" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/qris.png') }}" alt="QRIS" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<i class=\'fas fa-qrcode text-[#2b3a4b]\'></i>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">QRIS</p>
                                    <p class="text-xs text-gray-500">Scan & Pay</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                            </div>
                        </button>

                        <!-- GoPay - Disabled -->
                        <button type="button" disabled class="w-full flex items-center justify-between p-4 bg-gray-50 border border-gray-200 opacity-50 cursor-not-allowed mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white">
                                    <i class="fab fa-google-wallet text-gray-400"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-gray-500">GoPay</p>
                                    <p class="text-xs text-gray-400">Coming Soon</p>
                                </div>
                            </div>
                        </button>

                        <!-- ShopeePay - Disabled -->
                        <button type="button" disabled class="w-full flex items-center justify-between p-4 bg-gray-50 border border-gray-200 opacity-50 cursor-not-allowed">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white">
                                    <i class="fas fa-shopping-bag text-gray-400"></i>
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-gray-500">ShopeePay</p>
                                    <p class="text-xs text-gray-400">Coming Soon</p>
                                </div>
                            </div>
                        </button>
                    </div>

                    <!-- Virtual Account Section -->
                    <div>
                        <h4 class="text-sm font-semibold text-[#2b3a4b] mb-3 flex items-center gap-2">
                            <i class="fas fa-university"></i>
                            Virtual Account
                        </h4>

                        <!-- BCA VA -->
                        <button type="button" onclick="closeCustomPaymentModal(); setTimeout(() => showVaPayment('bca_va', customPaymentData.serviceName, customPaymentData.price, customPaymentData.customerName, customPaymentData.phone), 300);" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/bca.png') }}" alt="BCA" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-[#2b3a4b] font-bold text-sm\'>BCA</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">BCA Virtual Account</p>
                                    <p class="text-xs text-gray-500">Transfer Bank BCA</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                            </div>
                        </button>

                        <!-- BNI VA -->
                        <button type="button" onclick="closeCustomPaymentModal(); setTimeout(() => showVaPayment('bni_va', customPaymentData.serviceName, customPaymentData.price, customPaymentData.customerName, customPaymentData.phone), 300);" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/bni.png') }}" alt="BNI" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-[#2b3a4b] font-bold text-sm\'>BNI</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">BNI Virtual Account</p>
                                    <p class="text-xs text-gray-500">Transfer Bank BNI</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                            </div>
                        </button>

                        <!-- BRI VA -->
                        <button type="button" onclick="closeCustomPaymentModal(); setTimeout(() => showVaPayment('bri_va', customPaymentData.serviceName, customPaymentData.price, customPaymentData.customerName, customPaymentData.phone), 300);" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/bri.png') }}" alt="BRI" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-[#2b3a4b] font-bold text-sm\'>BRI</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">BRI Virtual Account</p>
                                    <p class="text-xs text-gray-500">Transfer Bank BRI</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                            </div>
                        </button>

                        <!-- Mandiri VA -->
                        <button type="button" onclick="closeCustomPaymentModal(); setTimeout(() => showVaPayment('mandiri_va', customPaymentData.serviceName, customPaymentData.price, customPaymentData.customerName, customPaymentData.phone), 300);" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/mandiri.png') }}" alt="Mandiri" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-[#2b3a4b] font-bold text-xs\'>MANDIRI</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">Mandiri Virtual Account</p>
                                    <p class="text-xs text-gray-500">Transfer Bank Mandiri</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                            </div>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Footer - Security Badge -->
            <div class="p-4 bg-gray-50 border-t border-gray-200 text-center shrink-0">
                <p class="text-xs text-gray-500">
                    <i class="fas fa-shield-alt text-green-500 mr-1"></i>
                    Transaksi aman dan terenkripsi oleh Midtrans
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    let customPaymentData = {
        serviceName: '',
        price: 0,
        customerName: '',
        phone: '',
        orderId: null,
        selectedMethod: null
    };
    let customScrollPosition = 0;

    function showCustomPaymentModal(serviceName, price, customerName, phone) {
        customPaymentData = {
            serviceName: serviceName,
            price: price,
            customerName: customerName,
            phone: phone,
            orderId: null,
            selectedMethod: null
        };

        // Populate modal
        document.getElementById('custom-service-name').textContent = serviceName;
        document.getElementById('custom-price-display').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);
        document.getElementById('custom-customer-name').textContent = customerName;

        // Show modal
        const modal = document.getElementById('customPaymentModal');
        const backdrop = document.getElementById('customPaymentBackdrop');
        const panel = document.getElementById('customPaymentPanel');

        modal.classList.remove('hidden');

        // Lock body scroll - STRONG lock
        customScrollPosition = window.pageYOffset;
        document.documentElement.style.overflow = 'hidden';
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${customScrollPosition}px`;
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('scale-95', 'opacity-0');
            panel.classList.add('scale-100', 'opacity-100');

            // No Snap embed - using Core API now
            // Payment methods will trigger their own modals (e.g., QRIS modal)
        }, 10);
    }

    function closeCustomPaymentModal() {
        const modal = document.getElementById('customPaymentModal');
        const backdrop = document.getElementById('customPaymentBackdrop');
        const panel = document.getElementById('customPaymentPanel');

        backdrop.classList.add('opacity-0');
        panel.classList.remove('scale-100', 'opacity-100');
        panel.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');

            // Unlock body scroll - FULL unlock
            document.documentElement.style.overflow = '';
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.left = '';
            document.body.style.right = '';
            document.body.style.width = '';
            window.scrollTo(0, customScrollPosition);
        }, 300);
    }

    function handleCustomPaymentSuccess(orderId) {
        fetch('{{ route("api.payment.success") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                order_id: orderId
            })
        }).then(() => {
            if (typeof showToast === 'function') {
                showToast('Pembayaran Berhasil! Mengarahkan ke WhatsApp...', 'success');
            }

            const message = `Saya sudah melakukan pembayaran, berikut detail pesanan saya:

*Order ID:* ${orderId}
*Nama:* ${customPaymentData.customerName}
*Layanan:* ${customPaymentData.serviceName}
*Total:* Rp ${new Intl.NumberFormat('id-ID').format(customPaymentData.price)}

Mohon segera diproses. Terima kasih!`;

            const waNumber = '6285881721193';
            const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
            setTimeout(() => {
                window.location.href = waUrl;
            }, 1500);
        });
    }

    function handleCustomPaymentCancel(orderId, message) {
        fetch('{{ route("api.payment.cancel") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                order_id: orderId
            })
        }).then(() => {
            if (typeof showPageLoader === 'function') {
                showPageLoader();
            }
            if (typeof showToast === 'function') {
                showToast(message, 'warning', true);
            }
        });
    }
</script>