<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfilMahasiswaController extends Controller
{
    public function index()
    {
        // --- Semua logika yang sudah kita buat sebelumnya ---

        $nama = 'Dzakhwan Rohid Hawarri';
        $tanggalLahir = Carbon::parse('2005-10-15');
        $umur = $tanggalLahir->age;
        $hobi = [
            'Membaca Buku', 'Bermain Game', 'Menonton Film',
            'Mendengarkan Musik', 'Belajar Koding'
        ];
        $tanggalWisuda = Carbon::parse('2028-10-01');
        $formatTanggalWisuda = $tanggalWisuda->isoFormat('D MMMM Y');
        $hariIni = Carbon::now();
        $sisaWaktuStudi = $hariIni->diffInDays($tanggalWisuda);
        $semesterSaatIni = 2;

        if ($semesterSaatIni < 3) {
            $pesanMotivasi = 'Masih Awal, Kejar TAK';
        } else {
            $pesanMotivasi = 'Jangan main-main, kurang-kurangi main game!';
        }

        $citaCita = 'Full-Stack Web Developer & AI Engineer';

        // Menyiapkan data untuk dikirim ke view baru
        $data = [
            'name' => $nama,
            'my_age' => $umur,
            'hobbies' => $hobi,
            'tgl_harus_wisuda' => $formatTanggalWisuda,
            'time_to_study_left' => $sisaWaktuStudi,
            'current_semester' => $semesterSaatIni,
            'motivation_message' => $pesanMotivasi,
            'future_goal' => $citaCita,
        ];

        // Mengarahkan ke view baru bernama 'profil-mahasiswa'
        return view('profil-mahasiswa', $data);
    }
}
