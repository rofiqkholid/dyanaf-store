<!-- Payment Modal -->
<div id="paymentModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div id="paymentModalBackdrop" class="fixed inset-0 bg-black/20 transition-opacity duration-300 opacity-0"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <!-- Mobile: Full screen | Desktop: Centered horizontal rectangle -->
        <div class="flex min-h-full items-stretch sm:items-center justify-center sm:p-4">
            <!-- Modal Panel -->
            <div id="paymentModalPanel" class="relative w-full h-[100dvh] sm:min-h-0 sm:h-auto sm:max-w-5xl sm:rounded-2xl bg-white text-left shadow-2xl transition-all duration-500 ease-out -translate-y-10 opacity-0 flex flex-col overflow-hidden">

                <!-- Header with Close Button -->
                <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100">
                            <i class="fas fa-credit-card text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900" id="modal-title">Lengkapi Data</h3>
                            <p class="text-sm text-gray-500 hidden sm:block">Mohon lengkapi data berikut untuk melanjutkan pembayaran.</p>
                        </div>
                    </div>
                    <button type="button" onclick="closePaymentModal()" class="text-gray-400 hover:text-gray-500 p-2 cursor-pointer">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <!-- Form Content -->
                <div class="flex-1 p-4 sm:p-6 overflow-y-auto">
                    <p class="text-sm text-gray-500 sm:hidden mb-4">Mohon lengkapi data berikut untuk melanjutkan pembayaran.</p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Hidden: Layanan & Total Pembayaran -->
                        <div class="hidden">
                            <label class="block text-sm font-medium text-gray-700">Layanan</label>
                            <div id="payment-service-name" class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2.5 text-sm text-gray-900"></div>
                        </div>
                        <div class="hidden">
                            <label class="block text-sm font-medium text-gray-700">Total Pembayaran</label>
                            <div id="payment-price-display" class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2.5 text-sm font-bold text-gray-900"></div>
                        </div>
                        <div>
                            <label for="customer-name" class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" id="customer-name" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none" placeholder="Masukkan nama anda">
                            <p class="mt-1 text-xs text-red-500 hidden" id="name-error">Nama wajib diisi</p>
                        </div>
                        <div>
                            <label for="customer-phone" class="block text-sm font-medium text-gray-700">Nomor yang bisa dihubungi: WhatsApp, dll. <span class="text-red-500">*</span></label>
                            <input type="tel" id="customer-phone" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none" placeholder="08xxxxxxxxxx">
                            <p class="mt-1 text-xs text-red-500 hidden" id="phone-error">Nomor WhatsApp wajib diisi</p>
                        </div>
                    </div>
                </div>

                <!-- Footer with Buttons -->
                <div class="flex flex-row-reverse gap-3 p-4 sm:p-6 border-t border-gray-100 bg-gray-50">
                    <button type="button" onclick="processPayment()" id="btn-process-payment" class="flex-1 sm:flex-none inline-flex justify-center items-center rounded-lg gradient-primary px-6 py-2.5 text-sm font-semibold text-white hover:opacity-90 cursor-pointer">
                        Bayar
                    </button>
                    <button type="button" onclick="closePaymentModal()" class="flex-1 sm:flex-none inline-flex justify-center items-center rounded-lg bg-white px-6 py-2.5 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 cursor-pointer">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentServiceName = '';
    let currentPrice = 0;
    let activeOrderId = null;

    function showPageLoader() {
        const loader = document.getElementById('pageLoader');
        if (loader) {
            // Remove hidden class and ensure visibility
            loader.classList.remove('hidden');
            loader.style.display = 'flex';
            loader.style.opacity = '1';
            loader.style.visibility = 'visible';
            document.body.classList.add('page-loading');
        }
    }

    function triggerPayment(serviceName, price) {
        currentServiceName = serviceName;
        currentPrice = price;

        // Populate modal
        document.getElementById('payment-service-name').textContent = serviceName;
        document.getElementById('payment-price-display').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);
        document.getElementById('customer-name').value = '';
        document.getElementById('customer-phone').value = '';
        document.getElementById('name-error').classList.add('hidden');
        document.getElementById('phone-error').classList.add('hidden');

        // Show modal
        const modal = document.getElementById('paymentModal');
        const backdrop = document.getElementById('paymentModalBackdrop');
        const panel = document.getElementById('paymentModalPanel');

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent background scroll

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('-translate-y-10', 'opacity-0');
            panel.classList.add('translate-y-0', 'opacity-100');
        }, 10);
    }

    // Support for data-attribute based buttons (fixes IDE lint errors)
    document.addEventListener('DOMContentLoaded', function() {
        const payButton = document.getElementById('pay-button');
        if (payButton && payButton.dataset.serviceName) {
            payButton.addEventListener('click', function() {
                const serviceName = this.dataset.serviceName;
                const servicePrice = parseInt(this.dataset.servicePrice);
                triggerPayment(serviceName, servicePrice);
            });
        }
    });

    function closePaymentModal() {
        const modal = document.getElementById('paymentModal');
        const backdrop = document.getElementById('paymentModalBackdrop');
        const panel = document.getElementById('paymentModalPanel');

        backdrop.classList.add('opacity-0');
        panel.classList.remove('translate-y-0', 'opacity-100');
        panel.classList.add('-translate-y-10', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = ''; // Restore scroll
        }, 300);
    }

    function processPayment() {
        const customerName = document.getElementById('customer-name').value;
        const customerPhone = document.getElementById('customer-phone').value;
        const btn = document.getElementById('btn-process-payment');
        const nameError = document.getElementById('name-error');
        const phoneError = document.getElementById('phone-error');

        let isValid = true;

        if (!customerName.trim()) {
            nameError.classList.remove('hidden');
            isValid = false;
        } else {
            nameError.classList.add('hidden');
        }

        if (!customerPhone.trim()) {
            phoneError.classList.remove('hidden');
            isValid = false;
        } else {
            phoneError.classList.add('hidden');
        }

        if (!isValid) return;

        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
        btn.disabled = true;

        fetch('{{ route("api.payment.checkout") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    service_name: currentServiceName,
                    price: currentPrice,
                    customer_name: customerName,
                    phone: customerPhone
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.snap_token) {
                    activeOrderId = data.order_id;
                    closePaymentModal();
                    btn.innerHTML = originalText;
                    btn.disabled = false;

                    window.snap.pay(data.snap_token, {
                        onSuccess: function(result) {
                            handlePaymentSuccess(activeOrderId);
                        },
                        onPending: function(result) {
                            showToast('Menunggu Pembayaran!', 'warning', true);
                        },
                        onError: function(result) {
                            handlePaymentCancel(activeOrderId, "Pembayaran Gagal!");
                        },
                        onClose: function() {
                            handlePaymentCancel(activeOrderId, "Pembayaran Dibatalkan oleh pengguna");
                        }
                    });
                } else {
                    showToast('Gagal membuat transaksi: ' + (data.error || 'Unknown error'), 'error');
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                }
            })
            .catch(error => {
                console.error(error);
                showToast('Terjadi kesalahan sistem', 'error');
                btn.innerHTML = originalText;
                btn.disabled = false;
            });
    }

    function handlePaymentSuccess(orderId) {
        const customerName = document.getElementById('customer-name').value;

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
            showToast('Pembayaran Berhasil! Mengarahkan ke WhatsApp...', 'success');

            const message = `Saya sudah melakukan pembayaran, berikut detail pesanan saya:

*Order ID:* ${orderId}
*Nama:* ${customerName}
*Layanan:* ${currentServiceName}
*Total:* Rp ${new Intl.NumberFormat('id-ID').format(currentPrice)}

Mohon segera diproses. Terima kasih!`;

            const waNumber = '6285881721193';
            const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
            setTimeout(() => {
                window.location.href = waUrl;
            }, 1500);
        });
    }

    function handlePaymentCancel(orderId, message) {
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
            // Show loading overlay then reload with toast
            showPageLoader();
            showToast(message, 'warning', true);
        });
    }
</script>