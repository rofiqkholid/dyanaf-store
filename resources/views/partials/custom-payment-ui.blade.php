<!-- Custom Payment UI Modal (Core API) -->
<div id="customPaymentModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="custom-payment-title" role="dialog" aria-modal="true">
    <!-- Backdrop - Transparent Dark -->
    <div id="customPaymentBackdrop" class="fixed inset-0 bg-black/60 transition-opacity duration-300 opacity-0"></div>

    <div class="fixed inset-0 z-10 flex items-center justify-center p-0 sm:p-4">
        <!-- Modal Panel - Full screen mobile, centered desktop -->
        <div id="customPaymentPanel" class="relative w-full h-full sm:h-auto sm:max-h-[90vh] sm:max-w-4xl bg-white sm:border sm:border-gray-200 shadow-lg transition-all duration-500 ease-out scale-95 opacity-0 flex flex-col overflow-hidden">

            <!-- Header - Minimal -->
            <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-100 bg-white">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100">
                        <i class="fas fa-credit-card text-blue-600"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900" id="custom-payment-title">Metode Pembayaran</h3>
                        <p class="text-sm text-gray-500 hidden sm:block">Pilih metode pembayaran favorit Anda.</p>
                    </div>
                </div>
                <button type="button" onclick="closeCustomPaymentModal()" class="text-gray-400 hover:text-gray-500 p-2 cursor-pointer">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Step Indicator -->
            <div class="px-6 py-3 bg-white border-b border-gray-200">
                <div class="flex items-center justify-center gap-4 sm:gap-8">
                    <!-- Step 1 - Completed -->
                    <div class="flex items-center gap-2">
                        <div class="flex h-5 w-5 sm:h-6 sm:w-6 items-center justify-center rounded-full bg-green-500 text-white text-[10px] sm:text-xs">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <span class="text-xs sm:text-sm font-medium text-gray-400">Lengkapi Data</span>
                    </div>

                    <!-- Connector Line -->
                    <div class="w-8 sm:w-16 h-0.5 bg-[#2b3a4b]"></div>

                    <!-- Step 2 - Active -->
                    <div class="flex items-center gap-2">
                        <div class="flex h-5 w-5 sm:h-6 sm:w-6 items-center justify-center rounded-full bg-[#2b3a4b] text-white text-[10px] sm:text-xs font-semibold">
                            2
                        </div>
                        <span class="text-xs sm:text-sm font-medium text-[#2b3a4b]">Metode Pembayaran</span>
                    </div>
                </div>
            </div>

            <!-- Order Summary - Minimal -->
            <div class="px-4 py-3 sm:px-6 sm:py-4 bg-gray-50 border-b border-gray-200">
                <div class="grid grid-cols-2 gap-2 sm:gap-4">
                    <div>
                        <p class="text-[10px] sm:text-xs text-gray-500 mb-0.5 sm:mb-1">Layanan</p>
                        <p class="text-sm sm:text-base font-semibold text-[#2b3a4b]" id="custom-service-name"></p>
                    </div>
                    <div class="text-right">
                        <p class="text-[10px] sm:text-xs text-gray-500 mb-0.5 sm:mb-1">Total Pembayaran</p>
                        <p class="text-base sm:text-xl font-bold text-[#2b3a4b]" id="custom-price-display"></p>
                    </div>
                </div>
                <div class="mt-2 sm:mt-3 flex items-center gap-2 text-xs sm:text-sm text-gray-600">
                    <i class="fas fa-user text-[#2b3a4b] text-xs"></i>
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

                        <!-- QRIS - Disabled (belum aktif di Production) -->
                        <button type="button" disabled class="w-full flex items-center justify-between p-4 bg-gray-50 border border-gray-200 opacity-50 cursor-not-allowed mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/qris.png') }}" alt="QRIS" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<i class=\'fas fa-qrcode text-gray-400\'></i>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-gray-500">QRIS</p>
                                    <p class="text-xs text-gray-400">Coming Soon</p>
                                </div>
                            </div>
                        </button>

                        <!-- GoPay - AKTIF -->
                        <button type="button" onclick="selectGopayPayment()" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/gopay.png') }}" alt="GoPay" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-[#00AA13] font-bold text-xs\'>GoPay</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">GoPay</p>
                                    <p class="text-xs text-gray-500">Bayar via GoPay</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
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

                        <!-- BCA VA - Disabled (tidak aktif di akun) -->
                        <button type="button" disabled class="w-full flex items-center justify-between p-4 bg-gray-50 border border-gray-200 opacity-50 cursor-not-allowed mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/bca.png') }}" alt="BCA" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-gray-400 font-bold text-sm\'>BCA</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-gray-500">BCA Virtual Account</p>
                                    <p class="text-xs text-gray-400">Coming Soon</p>
                                </div>
                            </div>
                        </button>

                        <!-- BNI VA -->
                        <button type="button" onclick="selectVaPayment('bni_va')" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
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
                        <button type="button" onclick="selectVaPayment('bri_va')" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
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

                        <!-- Permata VA (Test - Different payment type) -->
                        <button type="button" onclick="selectVaPayment('permata_va')" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/permata.png') }}" alt="Permata" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-[#2b3a4b] font-bold text-xs\'>PERMATA</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">Permata Virtual Account</p>
                                    <p class="text-xs text-gray-500">Transfer Bank Permata</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                            </div>
                        </button>

                        <!-- CIMB Niaga VA - AKTIF -->
                        <button type="button" onclick="selectVaPayment('cimb_va')" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer mb-2">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 flex items-center justify-center border border-gray-200 bg-white p-1">
                                    <img src="{{ asset('image/payment-logo/cimb.png') }}" alt="CIMB" class="w-full h-full object-contain" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\'text-[#2b3a4b] font-bold text-xs\'>CIMB</span>';">
                                </div>
                                <div class="text-left">
                                    <p class="text-sm font-semibold text-[#2b3a4b]">CIMB Niaga Virtual Account</p>
                                    <p class="text-xs text-gray-500">Transfer Bank CIMB Niaga</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-sm"></i>
                            </div>
                        </button>

                        <!-- Mandiri VA - AKTIF -->
                        <button type="button" onclick="selectVaPayment('mandiri_va')" class="w-full flex items-center justify-between p-4 bg-white border border-gray-200 hover:border-[#2b3a4b] hover:bg-gray-50 transition-all cursor-pointer">
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

    function showCustomPaymentModal(serviceName, price, customerName, phone, orderId = null) {
        console.log('showCustomPaymentModal called with:', {
            serviceName,
            price,
            customerName,
            phone,
            orderId
        });

        customPaymentData = {
            serviceName: serviceName,
            price: price,
            customerName: customerName,
            phone: phone,
            orderId: orderId,
            selectedMethod: null,
            paymentSelected: false
        };

        console.log('customPaymentData set:', customPaymentData);

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

    // Helper function to select QRIS payment
    function selectQrisPayment() {
        // Save data locally before closing modal (orderId gets reset in closeCustomPaymentModal)
        const savedOrderId = customPaymentData.orderId;
        const savedServiceName = customPaymentData.serviceName;
        const savedPrice = customPaymentData.price;
        const savedCustomerName = customPaymentData.customerName;
        const savedPhone = customPaymentData.phone;

        customPaymentData.paymentSelected = true;
        closeCustomPaymentModal(true); // skipCancel = true
        setTimeout(() => {
            showQrisPayment(savedServiceName, savedPrice, savedCustomerName, savedPhone, savedOrderId);
        }, 300);
    }

    // Helper function to select VA payment
    function selectVaPayment(bankMethod) {
        console.log('selectVaPayment called with bankMethod:', bankMethod);
        console.log('customPaymentData.orderId:', customPaymentData.orderId);

        // Save data locally before closing modal (orderId gets reset in closeCustomPaymentModal)
        const savedOrderId = customPaymentData.orderId;
        const savedServiceName = customPaymentData.serviceName;
        const savedPrice = customPaymentData.price;
        const savedCustomerName = customPaymentData.customerName;
        const savedPhone = customPaymentData.phone;

        customPaymentData.paymentSelected = true;
        closeCustomPaymentModal(true); // skipCancel = true
        setTimeout(() => {
            console.log('Calling showVaPayment with savedOrderId:', savedOrderId);
            showVaPayment(bankMethod, savedServiceName, savedPrice, savedCustomerName, savedPhone, savedOrderId);
        }, 300);
    }

    // Helper function to select GoPay payment
    function selectGopayPayment() {
        // Save data locally before closing modal (orderId gets reset in closeCustomPaymentModal)
        const savedOrderId = customPaymentData.orderId;
        const savedServiceName = customPaymentData.serviceName;
        const savedPrice = customPaymentData.price;
        const savedCustomerName = customPaymentData.customerName;
        const savedPhone = customPaymentData.phone;

        customPaymentData.paymentSelected = true;
        closeCustomPaymentModal(true); // skipCancel = true
        setTimeout(() => {
            showGopayPayment(savedServiceName, savedPrice, savedCustomerName, savedPhone, savedOrderId);
        }, 300);
    }

    function closeCustomPaymentModal(skipCancel = false) {
        console.log('closeCustomPaymentModal called', {
            skipCancel: skipCancel,
            orderId: customPaymentData.orderId,
            paymentSelected: customPaymentData.paymentSelected
        });

        // Cancel transaction if exists and payment not selected
        if (!skipCancel && customPaymentData.orderId && !customPaymentData.paymentSelected) {
            console.log('Calling cancel API for order:', customPaymentData.orderId);
            fetch('{{ route("api.payment.cancel") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        order_id: customPaymentData.orderId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Cancel response:', data);
                    if (typeof showToast === 'function') {
                        showToast('Pembayaran dibatalkan', 'info');
                    }
                })
                .catch(err => {
                    console.error('Cancel error:', err);
                });
        } else if (!skipCancel && !customPaymentData.paymentSelected) {
            // No orderId but still show toast if modal closed without payment
            if (typeof showToast === 'function') {
                showToast('Pembayaran dibatalkan', 'info');
            }
        }

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

            // Reset orderId after closing
            customPaymentData.orderId = null;
            customPaymentData.paymentSelected = false;
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