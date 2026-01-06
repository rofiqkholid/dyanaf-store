<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks for truncate
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();

        // Clear existing data
        Service::truncate();
        ServiceCategory::truncate();

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        // Category 1: Tugas Akademik
        $akademik = ServiceCategory::create([
            'name' => 'Tugas Akademik',
            'description' => 'Solusi cepat untuk tugas kuliah dan sekolah',
            'icon' => 'fas fa-book',
            'order' => 1,
        ]);

        Service::create([
            'category_id' => $akademik->id,
            'name' => 'Makalah (Tanpa Materi)',
            'slug' => 'makalah-tanpa-materi',
            'tag' => 'Tanpa Materi',
            'tag_color' => 'blue',
            'icon' => 'fas fa-file-alt',
            'thumbnail' => 'image/thumbnail/banner-makalah.webp',
            'estimation' => '2 Jam - 1 Hari',
            'price' => 100000,
            'price_unit' => 'IDR',
            'route_name' => 'order.makalah-tanpa-materi',
            'order' => 1,
        ]);

        Service::create([
            'category_id' => $akademik->id,
            'name' => 'Makalah (Ada Materi)',
            'slug' => 'makalah-ada-materi',
            'tag' => 'Ada Materi',
            'tag_color' => 'green',
            'icon' => 'fas fa-book-open',
            'thumbnail' => 'image/thumbnail/banner-makalah.webp',
            'estimation' => '1 - 6 Jam',
            'price' => 70000,
            'price_unit' => 'IDR',
            'route_name' => 'order.makalah-ada-materi',
            'order' => 2,
        ]);

        Service::create([
            'category_id' => $akademik->id,
            'name' => 'Jurnal',
            'slug' => 'jurnal',
            'tag' => 'Ilmiah/Akademik',
            'tag_color' => 'purple',
            'icon' => 'fas fa-newspaper',
            'thumbnail' => 'image/thumbnail/banner-jurnal.webp',
            'estimation' => '1 Hari',
            'price' => 130000,
            'price_unit' => 'IDR',
            'route_name' => 'order.jurnal',
            'order' => 3,
        ]);

        Service::create([
            'category_id' => $akademik->id,
            'name' => 'Joki Tugas',
            'slug' => 'joki-tugas',
            'tag' => 'Tugas Harian',
            'tag_color' => 'orange',
            'icon' => 'fas fa-pencil-alt',
            'thumbnail' => 'image/thumbnail/banner-joki-tugas.webp',
            'estimation' => '3 Jam',
            'price' => 50000,
            'price_unit' => '/tugas',
            'route_name' => 'order.joki-tugas',
            'order' => 4,
        ]);

        // Category 2: Kebutuhan Lamar Pekerjaan
        $lamar = ServiceCategory::create([
            'name' => 'Kebutuhan Lamar Pekerjaan',
            'description' => 'Tampil profesional dalam melamar pekerjaan',
            'icon' => 'fas fa-briefcase',
            'order' => 2,
        ]);

        Service::create([
            'category_id' => $lamar->id,
            'name' => 'CV Kreatif',
            'slug' => 'cv-kreatif',
            'tag' => 'Desain Modern',
            'tag_color' => 'pink',
            'icon' => 'fas fa-id-card',
            'thumbnail' => 'image/thumbnail/banner-cv.webp',
            'estimation' => '2 Jam',
            'price' => 25000,
            'price_unit' => 'IDR',
            'route_name' => 'order.cv-kreatif',
            'order' => 1,
        ]);

        Service::create([
            'category_id' => $lamar->id,
            'name' => 'CV ATS',
            'slug' => 'cv-ats',
            'tag' => 'Lolos Sistem ATS',
            'tag_color' => 'indigo',
            'icon' => 'fas fa-shield-alt',
            'thumbnail' => 'image/thumbnail/banner-cv-ats.webp',
            'estimation' => '3 Jam',
            'price' => 60000,
            'price_unit' => 'IDR',
            'route_name' => 'order.cv-ats',
            'order' => 2,
        ]);

        Service::create([
            'category_id' => $lamar->id,
            'name' => 'Surat Lamaran',
            'slug' => 'surat-lamaran',
            'tag' => 'Profesional',
            'tag_color' => 'teal',
            'icon' => 'fas fa-envelope-open-text',
            'thumbnail' => 'image/thumbnail/banner-lamaran.webp',
            'estimation' => '30 Menit',
            'price' => 20000,
            'price_unit' => 'IDR',
            'route_name' => 'order.surat-lamaran',
            'order' => 3,
        ]);

        Service::create([
            'category_id' => $lamar->id,
            'name' => 'Gabung PDF',
            'slug' => 'gabung-pdf',
            'tag' => 'Merge Dokumen',
            'tag_color' => 'red',
            'icon' => 'fas fa-file-pdf',
            'thumbnail' => 'image/thumbnail/banner-gabung-pdf.webp',
            'estimation' => '30 Menit',
            'price' => 10000,
            'price_unit' => 'IDR',
            'route_name' => 'order.gabung-pdf',
            'order' => 4,
        ]);

        // Category 3: Kebutuhan Bisnis
        $bisnis = ServiceCategory::create([
            'name' => 'Kebutuhan Perusahaan & Bisnis',
            'description' => 'Layanan untuk mengembangkan bisnis Anda',
            'icon' => 'fas fa-building',
            'order' => 3,
        ]);

        Service::create([
            'category_id' => $bisnis->id,
            'name' => 'Web Statis',
            'slug' => 'web-statis',
            'tag' => 'Landing Page',
            'tag_color' => 'cyan',
            'icon' => 'fas fa-laptop-code',
            'thumbnail' => 'image/thumbnail/banner-web-statis.webp',
            'estimation' => '5 Hari',
            'price' => 600000,
            'price_unit' => 'IDR',
            'route_name' => 'order.web-statis',
            'order' => 1,
        ]);

        Service::create([
            'category_id' => $bisnis->id,
            'name' => 'Web Dinamis',
            'slug' => 'web-dinamis',
            'tag' => 'Excl. Hosting',
            'tag_color' => 'purple',
            'icon' => 'fas fa-code',
            'thumbnail' => 'image/thumbnail/banner-web-dinamis.webp',
            'estimation' => '7 Hari',
            'price' => 1500000,
            'price_display' => '1.5JT',
            'price_unit' => 'IDR',
            'route_name' => 'order.web-dinamis',
            'order' => 2,
        ]);

        Service::create([
            'category_id' => $bisnis->id,
            'name' => 'Desain Grafis',
            'slug' => 'desain-grafis',
            'tag' => 'Logo, Banner, dll',
            'tag_color' => 'yellow',
            'icon' => 'fas fa-paint-brush',
            'thumbnail' => 'image/thumbnail/banner-desain-grafis.webp',
            'estimation' => '1 Hari',
            'price' => 100000,
            'price_unit' => 'IDR',
            'route_name' => 'order.desain-grafis',
            'order' => 3,
        ]);

        Service::create([
            'category_id' => $bisnis->id,
            'name' => 'Data Entry',
            'slug' => 'data-entry',
            'tag' => 'Input Data',
            'tag_color' => 'lime',
            'icon' => 'fas fa-keyboard',
            'thumbnail' => 'image/thumbnail/banner-data-entry.webp',
            'estimation' => '1 Hari',
            'price' => 150000,
            'price_unit' => 'IDR',
            'route_name' => 'order.data-entry',
            'order' => 4,
        ]);

        Service::create([
            'category_id' => $bisnis->id,
            'name' => 'Jasa Ketik Word',
            'slug' => 'jasa-ketik-word',
            'tag' => 'Proposal, Surat',
            'tag_color' => 'sky',
            'icon' => 'fab fa-microsoft',
            'thumbnail' => 'image/thumbnail/banner-ketik-word.webp',
            'estimation' => '6 Jam',
            'price' => 100000,
            'price_unit' => 'IDR',
            'route_name' => 'order.jasa-ketik-word',
            'order' => 5,
        ]);

        Service::create([
            'category_id' => $bisnis->id,
            'name' => 'Jasa Excel',
            'slug' => 'jasa-excel',
            'tag' => 'Rumus, Tabel, dll',
            'tag_color' => 'emerald',
            'icon' => 'fas fa-file-excel',
            'thumbnail' => 'image/thumbnail/banner-ketik-exel.webp',
            'estimation' => '1 Hari',
            'price' => 130000,
            'price_unit' => 'IDR',
            'route_name' => 'order.jasa-excel',
            'order' => 6,
        ]);
    }
}
