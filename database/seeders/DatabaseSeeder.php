<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::create([
            'title' => 'Obat obatan',
            'slug' => 'obat-obatan',
            'desc' => 'Obat-obatan pada manusia adalah substansi kimia yang digunakan untuk mencegah, mengobati, atau menyembuhkan penyakit. Contohnya adalah parasetamol untuk mengurangi demam. Obat herbal, di sisi lain, berasal dari bahan alami seperti tumbuhan, akar, atau buah-buahan dan sering digunakan sebagai alternatif atau pelengkap terapi medis konvensional. Misalnya, jahe bisa digunakan sebagai obat herbal untuk meredakan mual.'
        ]);
        Category::create([
            'title' => 'P3k',
            'slug' => 'p3k',
            'desc' => 'P3K, atau Pertolongan Pertama pada Kecelakaan, adalah tindakan medis awal yang diberikan untuk memberikan pertolongan pertama pada korban kecelakaan atau kejadian medis mendadak. Ini meliputi tindakan seperti memberikan pertolongan pernapasan, menghentikan pendarahan, dan memberikan bantuan dalam kondisi kegawatdaruratan sebelum tim medis profesional tiba.'
        ]);
        Category::create([
            'title' => 'PMR',
            'slug' => 'pmr',
            'desc' => 'PMR, atau Palang Merah Remaja, adalah organisasi relawan yang biasanya aktif di lingkungan sekolah atau masyarakat. Anggota PMR dilatih untuk memberikan pertolongan pertama pada kecelakaan atau kejadian darurat lainnya, memberikan bantuan sosial kepada masyarakat yang membutuhkan, dan melakukan kegiatan kemanusiaan lainnya. PMR juga sering kali terlibat dalam kampanye kesehatan dan kegiatan sosial untuk meningkatkan kesejahteraan masyarakat.'
        ]);

        User::factory(5)->create();
        Post::factory(15)->create();







        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
