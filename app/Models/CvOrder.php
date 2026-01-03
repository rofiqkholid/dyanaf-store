<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CvOrder extends Model
{
    protected $fillable = [
        'transaction_id',
        'nama_lengkap',
        'email',
        'phone',
        'foto',
        'alamat',
        'tentang_anda',
        'pendidikan',
        'pengalaman_kerja',
        'sertifikat_text',
        'sertifikat_file',
        'skills',
        'hobby',
        'pertanyaan_lainnya',
    ];

    protected $casts = [
        'skills' => 'array',
    ];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
