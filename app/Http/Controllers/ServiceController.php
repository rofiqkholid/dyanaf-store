<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the list of services.
     */
    public function index()
    {
        $categories = ServiceCategory::active()
            ->orderBy('order')
            ->with(['services' => function ($query) {
                $query->active()->orderBy('order');
            }])
            ->get();

        return view('list-jasa.list-jasa', compact('categories'));
    }

    /**
     * Display a specific service detail page.
     */
    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->active()->firstOrFail();

        // Map slug to view path
        $viewMap = [
            // Tugas Akademik
            'makalah-tanpa-materi' => 'tugas-akademik.makalah-tanpa-materi',
            'makalah-ada-materi' => 'tugas-akademik.makalah-ada-materi',
            'jurnal' => 'tugas-akademik.jurnal',
            'joki-tugas' => 'tugas-akademik.joki-tugas',
            // Lamar Pekerjaan
            'cv-kreatif' => 'lamar-pekerjaan.cv-kreatif',
            'cv-ats' => 'lamar-pekerjaan.cv-ats',
            'surat-lamaran' => 'lamar-pekerjaan.surat-lamaran',
            'gabung-pdf' => 'lamar-pekerjaan.gabung-pdf',
            // Bisnis
            'web-statis' => 'bisnis.web-statis',
            'web-dinamis' => 'bisnis.web-dinamis',
            'desain-grafis' => 'bisnis.desain-grafis',
            'data-entry' => 'bisnis.data-entry',
            'jasa-ketik-word' => 'bisnis.jasa-ketik-word',
            'jasa-excel' => 'bisnis.jasa-excel',
        ];

        $viewPath = $viewMap[$slug] ?? abort(404);

        return view($viewPath, compact('service'));
    }
}
