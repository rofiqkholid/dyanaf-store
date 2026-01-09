<!-- Payment Modal CV -->
<div id="paymentModalCV" class="fixed inset-0 z-[100] hidden" aria-labelledby="modal-title-cv" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div id="paymentModalCVBackdrop" class="fixed inset-0 bg-black/20 transition-opacity duration-300 opacity-0"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto overscroll-contain">
        <!-- Mobile: Full screen | Desktop: Centered -->
        <div class="flex min-h-full items-stretch sm:items-center justify-center sm:p-4">
            <!-- Modal Panel -->
            <div id="paymentModalCVPanel" class="relative w-full h-[100dvh] sm:min-h-0 sm:h-auto sm:max-w-4xl sm:rounded-2xl bg-white text-left shadow-2xl transition-all duration-500 ease-out -translate-y-10 opacity-0 flex flex-col">

                <!-- Header with Close Button -->
                <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-100 bg-white shrink-0">
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-full bg-blue-100">
                            <i class="fas fa-file-alt text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900" id="modal-title-cv">Form Pembuatan CV</h3>
                            <p class="text-sm text-gray-500 hidden sm:block">Lengkapi data berikut untuk pembuatan CV profesional.</p>
                        </div>
                    </div>
                    <button type="button" onclick="closePaymentModalCV()" class="text-gray-400 hover:text-gray-500 p-2 cursor-pointer">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>

                <!-- Step Indicator -->
                <div class="px-4 sm:px-6 py-3 bg-gray-50 border-b border-gray-100">
                    <div class="flex items-center justify-center gap-4 sm:gap-8">
                        <!-- Step 1 - Active -->
                        <div class="flex items-center gap-2">
                            <div class="flex h-5 w-5 sm:h-6 sm:w-6 items-center justify-center rounded-full bg-[#2b3a4b] text-white text-[10px] sm:text-xs font-semibold">
                                1
                            </div>
                            <span class="text-xs sm:text-sm font-medium text-[#2b3a4b]">Lengkapi Data</span>
                        </div>

                        <!-- Connector Line -->
                        <div class="w-8 sm:w-16 h-0.5 bg-gray-300"></div>

                        <!-- Step 2 - Inactive -->
                        <div class="flex items-center gap-2">
                            <div class="flex h-5 w-5 sm:h-6 sm:w-6 items-center justify-center rounded-full bg-gray-300 text-gray-500 text-[10px] sm:text-xs font-semibold">
                                2
                            </div>
                            <span class="text-xs sm:text-sm font-medium text-gray-400">Metode Pembayaran</span>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <div id="cv-form-content" class="flex-1 p-4 sm:p-6 overflow-y-auto overscroll-contain">
                    <p class="text-sm text-gray-500 sm:hidden mb-4">Lengkapi data berikut untuk pembuatan CV profesional.</p>

                    <form id="cv-form" enctype="multipart/form-data">
                        <!-- Service Info (Hidden) -->
                        <div class="hidden grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Layanan</label>
                                <div id="cv-payment-service-name" class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2.5 text-sm text-gray-900"></div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Total Pembayaran</label>
                                <div id="cv-payment-price-display" class="mt-1 block w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2.5 text-sm font-bold text-gray-900"></div>
                            </div>
                        </div>

                        <!-- Personal Information Section -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-user text-blue-500"></i> Informasi Pribadi
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Nama Lengkap -->
                                <div>
                                    <label for="cv-name" class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" id="cv-name" name="nama_lengkap" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none" placeholder="Masukkan nama lengkap">
                                    <p class="mt-1 text-xs text-red-500 hidden" id="cv-name-error">Nama wajib diisi</p>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="cv-email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="cv-email" name="email" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none" placeholder="contoh@email.com">
                                    <p class="mt-1 text-xs text-red-500 hidden" id="cv-email-error">Email wajib diisi</p>
                                </div>

                                <!-- No. Telepon/WhatsApp -->
                                <div>
                                    <label for="cv-phone" class="block text-sm font-medium text-gray-700">No. Telepon/WhatsApp <span class="text-red-500">*</span></label>
                                    <input type="tel" id="cv-phone" name="phone" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none" placeholder="08xxxxxxxxxx">
                                    <p class="mt-1 text-xs text-red-500 hidden" id="cv-phone-error">Nomor telepon wajib diisi</p>
                                </div>

                                <!-- Upload Foto -->
                                <div>
                                    <label for="cv-foto" class="block text-sm font-medium text-gray-700">Upload Foto <span class="text-red-500">*</span></label>
                                    <input type="file" id="cv-foto" name="foto" accept="image/*" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none file:mr-3 file:py-1 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-medium file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100 cursor-pointer">
                                    <p class="mt-1 text-xs text-gray-500">Upload file gambar. Maks 10 MB.</p>
                                    <p class="mt-1 text-xs text-red-500 hidden" id="cv-foto-error">Foto wajib diupload</p>
                                </div>

                                <!-- Alamat Lengkap -->
                                <div class="sm:col-span-2">
                                    <label for="cv-alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap <span class="text-red-500">*</span></label>
                                    <textarea id="cv-alamat" name="alamat" rows="2" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none resize-none" placeholder="Jalan/Kampung, RT/RW, Desa, Kecamatan, Kota/Kabupaten, Provinsi, Kode Pos"></textarea>
                                    <p class="mt-1 text-xs text-red-500 hidden" id="cv-alamat-error">Alamat wajib diisi</p>
                                </div>

                                <!-- Jelaskan Tentang Anda -->
                                <div class="sm:col-span-2">
                                    <label for="cv-tentang" class="block text-sm font-medium text-gray-700">Jelaskan Tentang Anda <span class="text-red-500">*</span></label>
                                    <textarea id="cv-tentang" name="tentang_anda" rows="3" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none resize-none" placeholder="Contoh: Saya adalah lulusan S1 Teknik Informatika dengan pengalaman 2 tahun di bidang web development..."></textarea>
                                    <p class="mt-1 text-xs text-red-500 hidden" id="cv-tentang-error">Informasi tentang anda wajib diisi</p>
                                </div>
                            </div>
                        </div>

                        <!-- Education Section -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-graduation-cap text-green-500"></i> Pendidikan
                            </h4>
                            <div>
                                <label for="cv-pendidikan" class="block text-sm font-medium text-gray-700">Nama Sekolah/Pendidikan <span class="text-red-500">*</span></label>
                                <textarea id="cv-pendidikan" name="pendidikan" rows="3" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none resize-none" placeholder="Contoh: SD, SMP, SMA/K, Universitas"></textarea>
                                <p class="mt-1 text-xs text-gray-500">*Nb: Sertakan Tahun Kelulusan & Nilai Akhir.</p>
                                <p class="mt-1 text-xs text-red-500 hidden" id="cv-pendidikan-error">Pendidikan wajib diisi</p>
                            </div>
                        </div>

                        <!-- Work Experience Section -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-briefcase text-orange-500"></i> Pengalaman Kerja
                            </h4>
                            <div>
                                <label for="cv-pengalaman" class="block text-sm font-medium text-gray-700">Pengalaman Kerja <span class="text-gray-400 text-xs">(Opsional)</span></label>
                                <textarea id="cv-pengalaman" name="pengalaman_kerja" rows="3" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none resize-none" placeholder="Sertakan Nama Perusahaan (PKL, Magang, Kontrak), Posisi Kerja, Tahun Masuk & Keluar, (Masukan Deskripsi Jika Perlu)"></textarea>
                                <p class="mt-1 text-xs text-gray-500">*Nb: Jika Tidak Punya Pengalaman Kerja Kosongkan Kolom Ini (Skip)</p>
                            </div>
                        </div>

                        <!-- Certificates Section -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-certificate text-yellow-500"></i> Sertifikat
                            </h4>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label for="cv-sertifikat-text" class="block text-sm font-medium text-gray-700">Sertifikat Keahlian/Organisasi/Kejuaraan <span class="text-gray-400 text-xs">(Opsional)</span></label>
                                    <textarea id="cv-sertifikat-text" name="sertifikat_text" rows="2" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none resize-none" placeholder="Jika Tidak Memiliki Sertifikat Kosongkan Kolom Ini (Skip)"></textarea>
                                </div>
                                <div>
                                    <label for="cv-sertifikat-file" class="block text-sm font-medium text-gray-700">Upload Sertifikat <span class="text-gray-400 text-xs">(Opsional)</span></label>
                                    <input type="file" id="cv-sertifikat-file" name="sertifikat_file" accept="image/*,.pdf" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none file:mr-3 file:py-1 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-medium file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100">
                                    <p class="mt-1 text-xs text-gray-500">Upload 1 file yang didukung. Maks 10 MB.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Skills Section -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-cogs text-purple-500"></i> Kemampuan Skill <span class="text-red-500">*</span>
                            </h4>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                                <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
                                    <input type="checkbox" name="skills[]" value="Microsoft Word" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    Microsoft Word
                                </label>
                                <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
                                    <input type="checkbox" name="skills[]" value="Microsoft Excel" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    Microsoft Excel
                                </label>
                                <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
                                    <input type="checkbox" name="skills[]" value="Microsoft Powerpoint" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    Microsoft Powerpoint
                                </label>
                                <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
                                    <input type="checkbox" name="skills[]" value="Public Speaking" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    Public Speaking
                                </label>
                                <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
                                    <input type="checkbox" name="skills[]" value="Desain Grafis" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    Desain Grafis
                                </label>
                                <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
                                    <input type="checkbox" name="skills[]" value="Video Editing" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    Video Editing
                                </label>
                            </div>
                            <div class="mt-3">
                                <label for="cv-skills-lainnya" class="block text-sm font-medium text-gray-700">Yang lain:</label>
                                <input type="text" id="cv-skills-lainnya" name="skills_lainnya" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none" placeholder="Skill lainnya yang tidak ada di atas...">
                            </div>
                            <p class="mt-1 text-xs text-red-500 hidden" id="cv-skills-error">Pilih minimal satu skill</p>
                        </div>

                        <!-- Additional Info Section -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-800 mb-3 flex items-center gap-2">
                                <i class="fas fa-info-circle text-cyan-500"></i> Informasi Tambahan
                            </h4>
                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <label for="cv-hobby" class="block text-sm font-medium text-gray-700">Hobby <span class="text-gray-400 text-xs">(Opsional)</span></label>
                                    <input type="text" id="cv-hobby" name="hobby" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none" placeholder="*Nb: Jika Ada">
                                </div>
                                <div>
                                    <label for="cv-pertanyaan" class="block text-sm font-medium text-gray-700">Pertanyaan Lainnya <span class="text-gray-400 text-xs">(Opsional)</span></label>
                                    <textarea id="cv-pertanyaan" name="pertanyaan_lainnya" rows="2" class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm focus:border-blue-500 focus:ring-0 focus:outline-none resize-none" placeholder="*Nb: Jika Tidak Ada Pertanyaan Yang Lain, Bisa Isi Di Kolom Ini."></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Loading Overlay -->
                <div id="cv-loading-overlay" class="hidden flex-1 flex flex-col items-center justify-center p-8">
                    <div class="animate-spin rounded-full h-12 w-12 border-4 border-gray-200 border-t-[#2b3a4b] mb-4"></div>
                    <p class="text-sm font-medium text-gray-600">Memproses...</p>
                    <p class="text-xs text-gray-400 mt-1">Mohon tunggu sebentar</p>
                </div>

                <!-- Footer with Buttons -->
                <div id="cv-form-footer" class="flex flex-row-reverse gap-3 p-4 sm:p-6 border-t border-gray-100 bg-gray-50 shrink-0">
                    <button type="button" onclick="processPaymentCV()" id="btn-process-payment-cv" class="flex-1 sm:flex-none inline-flex justify-center items-center rounded-lg gradient-primary px-6 py-2.5 text-sm font-semibold text-white hover:opacity-90 cursor-pointer">
                        Bayar Sekarang
                    </button>
                    <button type="button" onclick="closePaymentModalCV()" class="flex-1 sm:flex-none inline-flex justify-center items-center rounded-lg bg-white px-6 py-2.5 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 cursor-pointer">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentCVServiceName = '';
    let currentCVPrice = 0;
    let activeCVOrderId = null;
    let scrollPositionCV = 0;

    function showPageLoader() {
        const loader = document.getElementById('pageLoader');
        if (loader) {
            loader.classList.remove('hidden');
            loader.style.display = 'flex';
            loader.style.opacity = '1';
            loader.style.visibility = 'visible';
            document.body.classList.add('page-loading');
        }
    }

    function triggerPaymentCV(serviceName, price) {
        currentCVServiceName = serviceName;
        currentCVPrice = price;

        // Populate modal
        document.getElementById('cv-payment-service-name').textContent = serviceName;
        document.getElementById('cv-payment-price-display').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);

        // Reset form
        document.getElementById('cv-form').reset();

        // Hide all error messages
        document.querySelectorAll('#paymentModalCV .text-red-500').forEach(el => {
            if (el.classList.contains('hidden') === false && el.tagName === 'P') {
                el.classList.add('hidden');
            }
        });

        // Show modal
        const modal = document.getElementById('paymentModalCV');
        const backdrop = document.getElementById('paymentModalCVBackdrop');
        const panel = document.getElementById('paymentModalCVPanel');

        modal.classList.remove('hidden');

        // Lock body scroll (robust for mobile)
        scrollPositionCV = window.pageYOffset;
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollPositionCV}px`;
        document.body.style.width = '100%';

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            panel.classList.remove('-translate-y-10', 'opacity-0');
            panel.classList.add('translate-y-0', 'opacity-100');
        }, 10);
    }

    function closePaymentModalCV() {
        const modal = document.getElementById('paymentModalCV');
        const backdrop = document.getElementById('paymentModalCVBackdrop');
        const panel = document.getElementById('paymentModalCVPanel');

        backdrop.classList.add('opacity-0');
        panel.classList.remove('translate-y-0', 'opacity-100');
        panel.classList.add('-translate-y-10', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');

            // Unlock body scroll
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.width = '';
            window.scrollTo(0, scrollPositionCV);
        }, 300);
    }

    function validateCVForm() {
        let isValid = true;

        // Required fields validation
        const requiredFields = [{
                id: 'cv-name',
                errorId: 'cv-name-error'
            },
            {
                id: 'cv-email',
                errorId: 'cv-email-error'
            },
            {
                id: 'cv-phone',
                errorId: 'cv-phone-error'
            },
            {
                id: 'cv-alamat',
                errorId: 'cv-alamat-error'
            },
            {
                id: 'cv-tentang',
                errorId: 'cv-tentang-error'
            },
            {
                id: 'cv-pendidikan',
                errorId: 'cv-pendidikan-error'
            }
        ];

        requiredFields.forEach(field => {
            const input = document.getElementById(field.id);
            const error = document.getElementById(field.errorId);
            if (!input.value.trim()) {
                error.classList.remove('hidden');
                isValid = false;
            } else {
                error.classList.add('hidden');
            }
        });

        // Foto validation
        const fotoInput = document.getElementById('cv-foto');
        const fotoError = document.getElementById('cv-foto-error');
        if (!fotoInput.files || fotoInput.files.length === 0) {
            fotoError.classList.remove('hidden');
            isValid = false;
        } else {
            fotoError.classList.add('hidden');
        }

        // Skills validation (at least one checked or other skill filled)
        const skillsChecked = document.querySelectorAll('input[name="skills[]"]:checked').length > 0;
        const skillsLainnya = document.getElementById('cv-skills-lainnya').value.trim();
        const skillsError = document.getElementById('cv-skills-error');
        if (!skillsChecked && !skillsLainnya) {
            skillsError.classList.remove('hidden');
            isValid = false;
        } else {
            skillsError.classList.add('hidden');
        }

        return isValid;
    }

    function processPaymentCV() {
        if (!validateCVForm()) {
            showToast('Mohon lengkapi semua field yang wajib diisi', 'error');
            return;
        }

        // Get customer data
        const customerName = document.getElementById('cv-name').value;
        const customerPhone = document.getElementById('cv-phone').value;

        // Hide form content and footer, show loading overlay
        const formContent = document.getElementById('cv-form-content');
        const loadingOverlay = document.getElementById('cv-loading-overlay');
        const footer = document.getElementById('cv-form-footer');

        formContent.classList.add('hidden');
        footer.classList.add('hidden');
        loadingOverlay.classList.remove('hidden');

        // Collect form data
        const formData = new FormData(document.getElementById('cv-form'));
        formData.append('service_name', currentCVServiceName);
        formData.append('price', currentCVPrice);

        // Collect skills
        const skills = [];
        document.querySelectorAll('input[name="skills[]"]:checked').forEach(cb => {
            skills.push(cb.value);
        });
        const skillsLainnya = document.getElementById('cv-skills-lainnya').value.trim();
        if (skillsLainnya) {
            skills.push(skillsLainnya);
        }
        formData.set('skills', JSON.stringify(skills));

        // Send CV data to server first to create pending records
        fetch('{{ route("api.payment.checkout.cv") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(response => {
                console.log('CV checkout response status:', response.status);
                if (!response.ok) {
                    return response.json().then(err => {
                        throw new Error(err.message || err.error || JSON.stringify(err));
                    });
                }
                return response.json();
            })
            .then(data => {
                console.log('CV checkout response data:', data);
                if (data.order_id) {
                    // Store order ID for later use
                    activeCVOrderId = data.order_id;

                    // Wait a bit then show payment modal
                    setTimeout(() => {
                        // Reset - show form and footer, hide loading
                        formContent.classList.remove('hidden');
                        footer.classList.remove('hidden');
                        loadingOverlay.classList.add('hidden');

                        // Close current modal
                        closePaymentModalCV();

                        // Show custom payment modal with collected data
                        if (typeof showCustomPaymentModalCV === 'function') {
                            setTimeout(() => {
                                showCustomPaymentModalCV(currentCVServiceName, currentCVPrice, customerName, customerPhone, activeCVOrderId);
                            }, 300);
                        } else if (typeof showCustomPaymentModal === 'function') {
                            setTimeout(() => {
                                showCustomPaymentModal(currentCVServiceName, currentCVPrice, customerName, customerPhone, activeCVOrderId);
                            }, 300);
                        }
                    }, 500);
                } else {
                    // Reset UI on error
                    formContent.classList.remove('hidden');
                    footer.classList.remove('hidden');
                    loadingOverlay.classList.add('hidden');
                    showToast('Gagal menyimpan data CV: ' + (data.error || data.message || 'Unknown error'), 'error');
                }
            })
            .catch(error => {
                console.error('CV checkout error:', error);
                formContent.classList.remove('hidden');
                footer.classList.remove('hidden');
                loadingOverlay.classList.add('hidden');
                showToast('Terjadi kesalahan: ' + error.message, 'error');
            });
    }

    function handleCVPaymentSuccess(orderId) {
        const customerName = document.getElementById('cv-name').value;

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

            const message = `Saya sudah melakukan pembayaran untuk pembuatan CV, berikut detail pesanan saya:

*Order ID:* ${orderId}
*Nama:* ${customerName}
*Layanan:* ${currentCVServiceName}
*Total:* Rp ${new Intl.NumberFormat('id-ID').format(currentCVPrice)}

Data lengkap CV sudah saya isi di form. Mohon segera diproses. Terima kasih!`;

            const waNumber = '6285881721193';
            const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

            // Redirect to WhatsApp
            setTimeout(() => {
                window.location.href = waUrl;
            }, 1500);
        });
    }

    function handleCVPaymentCancel(orderId, message) {
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
            showPageLoader();
            showToast(message, 'warning', true);
        });
    }
</script>