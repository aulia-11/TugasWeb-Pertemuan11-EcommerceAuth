<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $categories = [
            'Laptop',
            'Smartphone',
            'Aksesoris',
            'Gaming',
            'Penyimpanan',
        ];

        $categoryModels = [];

        foreach ($categories as $categoryName) {
            $categoryModels[$categoryName] = Category::create([
                'name' => $categoryName,
                'description' => 'Kategori produk ' . $categoryName,
            ]);
        }


        $products = [


            [
                'category' => 'Laptop',
                'name' => 'Laptop Acer Aspire 5',
                'description' => 'Laptop untuk kebutuhan kuliah, pemrograman, dan pekerjaan sehari-hari.',
                'price' => 7500000,
                'stock' => 20,
            ],
            [
                'category' => 'Laptop',
                'name' => 'Laptop ASUS VivoBook 14',
                'description' => 'Laptop ringan dengan performa yang cocok untuk mahasiswa.',
                'price' => 6800000,
                'stock' => 12,
            ],
            [
                'category' => 'Laptop',
                'name' => 'Laptop Lenovo IdeaPad Slim 3',
                'description' => 'Laptop praktis untuk belajar dan aktivitas produktivitas.',
                'price' => 7200000,
                'stock' => 10,
            ],
            [
                'category' => 'Laptop',
                'name' => 'Laptop HP 14',
                'description' => 'Laptop dengan desain ringkas untuk kebutuhan sehari-hari.',
                'price' => 6500000,
                'stock' => 8,
            ],
            [
                'category' => 'Laptop',
                'name' => 'Laptop Dell Inspiron 14',
                'description' => 'Laptop dengan performa stabil untuk pekerjaan dan pembelajaran.',
                'price' => 8500000,
                'stock' => 7,
            ],
            [
                'category' => 'Laptop',
                'name' => 'ASUS TUF Gaming F15',
                'description' => 'Laptop gaming dengan performa tinggi untuk bermain game dan pekerjaan berat.',
                'price' => 12500000,
                'stock' => 6,
            ],
            [
                'category' => 'Laptop',
                'name' => 'Lenovo LOQ 15',
                'description' => 'Laptop gaming dengan performa tinggi dan sistem pendinginan yang baik.',
                'price' => 14500000,
                'stock' => 5,
            ],
            [
                'category' => 'Laptop',
                'name' => 'Acer Aspire 3',
                'description' => 'Laptop ekonomis untuk belajar, mengetik, dan aktivitas sehari-hari.',
                'price' => 5800000,
                'stock' => 14,
            ],
            [
                'category' => 'Laptop',
                'name' => 'HP Pavilion 14',
                'description' => 'Laptop modern dengan desain ringkas untuk produktivitas.',
                'price' => 9200000,
                'stock' => 9,
            ],
            [
                'category' => 'Laptop',
                'name' => 'MSI Modern 14',
                'description' => 'Laptop tipis dan ringan untuk mahasiswa dan pekerja.',
                'price' => 8900000,
                'stock' => 8,
            ],


            [
                'category' => 'Smartphone',
                'name' => 'Samsung Galaxy A25',
                'description' => 'Smartphone dengan layar berkualitas dan performa yang responsif.',
                'price' => 3500000,
                'stock' => 20,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'Xiaomi Redmi Note 13',
                'description' => 'Smartphone dengan fitur lengkap untuk kebutuhan harian.',
                'price' => 2800000,
                'stock' => 25,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'OPPO A60',
                'description' => 'Smartphone dengan desain modern dan baterai tahan lama.',
                'price' => 3200000,
                'stock' => 18,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'Infinix Note 40',
                'description' => 'Smartphone dengan layar luas dan performa yang baik.',
                'price' => 2400000,
                'stock' => 22,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'Realme C67',
                'description' => 'Smartphone terjangkau untuk komunikasi dan hiburan.',
                'price' => 2300000,
                'stock' => 20,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'Samsung Galaxy A35',
                'description' => 'Smartphone dengan kamera berkualitas dan performa yang stabil.',
                'price' => 5200000,
                'stock' => 15,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'Samsung Galaxy S24 FE',
                'description' => 'Smartphone premium dengan performa tinggi dan fitur lengkap.',
                'price' => 9500000,
                'stock' => 7,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'Xiaomi Redmi Note 14',
                'description' => 'Smartphone dengan layar jernih dan baterai berkapasitas besar.',
                'price' => 3100000,
                'stock' => 20,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'OPPO Reno 12',
                'description' => 'Smartphone dengan desain elegan dan kamera berkualitas.',
                'price' => 6500000,
                'stock' => 10,
            ],
            [
                'category' => 'Smartphone',
                'name' => 'Vivo V40',
                'description' => 'Smartphone modern dengan kamera dan performa yang mumpuni.',
                'price' => 6200000,
                'stock' => 12,
            ],

            [
                'category' => 'Aksesoris',
                'name' => 'Mouse Wireless Logitech',
                'description' => 'Mouse wireless praktis untuk laptop dan komputer.',
                'price' => 250000,
                'stock' => 30,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Keyboard Mechanical RGB',
                'description' => 'Keyboard mechanical dengan lampu RGB untuk mengetik dan gaming.',
                'price' => 650000,
                'stock' => 15,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Headset Bluetooth',
                'description' => 'Headset nirkabel untuk mendengarkan musik dan melakukan panggilan.',
                'price' => 350000,
                'stock' => 25,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Webcam Full HD',
                'description' => 'Webcam Full HD untuk kelas online dan video conference.',
                'price' => 450000,
                'stock' => 14,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Cooling Pad Laptop',
                'description' => 'Cooling pad untuk membantu menjaga suhu laptop.',
                'price' => 180000,
                'stock' => 20,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'USB Hub 4 Port',
                'description' => 'USB hub dengan empat port untuk menambah koneksi perangkat.',
                'price' => 120000,
                'stock' => 30,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Charger USB-C 65W',
                'description' => 'Charger USB-C 65W untuk laptop dan perangkat yang kompatibel.',
                'price' => 450000,
                'stock' => 18,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Kabel USB-C 2 Meter',
                'description' => 'Kabel USB-C dengan panjang dua meter untuk pengisian dan transfer data.',
                'price' => 85000,
                'stock' => 35,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Stand Laptop Aluminium',
                'description' => 'Stand laptop berbahan aluminium untuk posisi kerja yang lebih nyaman.',
                'price' => 280000,
                'stock' => 16,
            ],
            [
                'category' => 'Aksesoris',
                'name' => 'Mouse Pad Gaming',
                'description' => 'Mouse pad berukuran besar dengan permukaan yang nyaman digunakan.',
                'price' => 150000,
                'stock' => 25,
            ],

            [
                'category' => 'Gaming',
                'name' => 'Gamepad Wireless',
                'description' => 'Gamepad wireless untuk bermain berbagai jenis game.',
                'price' => 400000,
                'stock' => 16,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Gaming Headset RGB',
                'description' => 'Headset gaming dengan mikrofon dan pencahayaan RGB.',
                'price' => 550000,
                'stock' => 13,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Mouse Gaming RGB',
                'description' => 'Mouse gaming dengan sensor responsif dan pencahayaan RGB.',
                'price' => 300000,
                'stock' => 20,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Gaming Keyboard TKL',
                'description' => 'Keyboard gaming berukuran ringkas dengan desain modern.',
                'price' => 750000,
                'stock' => 10,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Gaming Mouse Pad XL',
                'description' => 'Mouse pad berukuran besar untuk setup gaming.',
                'price' => 200000,
                'stock' => 25,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Gaming Monitor 24 Inch',
                'description' => 'Monitor gaming 24 inci dengan tampilan yang nyaman untuk bermain game.',
                'price' => 2200000,
                'stock' => 8,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Gaming Mouse Logitech',
                'description' => 'Mouse gaming dengan sensor presisi dan desain ergonomis.',
                'price' => 500000,
                'stock' => 15,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Gaming Keyboard RGB',
                'description' => 'Keyboard gaming dengan pencahayaan RGB dan tombol responsif.',
                'price' => 600000,
                'stock' => 12,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Webcam Gaming Full HD',
                'description' => 'Webcam Full HD untuk streaming dan komunikasi saat bermain game.',
                'price' => 650000,
                'stock' => 10,
            ],
            [
                'category' => 'Gaming',
                'name' => 'Controller USB',
                'description' => 'Controller USB untuk bermain game pada komputer dan laptop.',
                'price' => 250000,
                'stock' => 20,
            ],


            [
                'category' => 'Penyimpanan',
                'name' => 'Flashdisk Sandisk 64GB',
                'description' => 'Flashdisk berkapasitas 64GB untuk menyimpan berbagai file.',
                'price' => 100000,
                'stock' => 40,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'Flashdisk Sandisk 128GB',
                'description' => 'Flashdisk berkapasitas 128GB dengan ukuran praktis.',
                'price' => 170000,
                'stock' => 35,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'SSD External 500GB',
                'description' => 'SSD eksternal berkapasitas 500GB untuk penyimpanan data.',
                'price' => 850000,
                'stock' => 12,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'SSD NVMe 1TB',
                'description' => 'SSD NVMe berkapasitas 1TB dengan kecepatan tinggi.',
                'price' => 1100000,
                'stock' => 10,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'Hard Disk External 1TB',
                'description' => 'Hard disk eksternal 1TB untuk menyimpan dan mencadangkan data.',
                'price' => 900000,
                'stock' => 15,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'Flashdisk Kingston 64GB',
                'description' => 'Flashdisk 64GB dengan desain praktis untuk menyimpan file.',
                'price' => 95000,
                'stock' => 35,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'Flashdisk Kingston 128GB',
                'description' => 'Flashdisk 128GB untuk kebutuhan penyimpanan data sehari-hari.',
                'price' => 165000,
                'stock' => 28,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'SSD NVMe 500GB',
                'description' => 'SSD NVMe 500GB dengan kecepatan baca dan tulis tinggi.',
                'price' => 650000,
                'stock' => 14,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'SSD SATA 1TB',
                'description' => 'SSD SATA 1TB untuk meningkatkan kapasitas dan performa komputer.',
                'price' => 950000,
                'stock' => 10,
            ],
            [
                'category' => 'Penyimpanan',
                'name' => 'Hard Disk External 2TB',
                'description' => 'Hard disk eksternal 2TB untuk menyimpan dan mencadangkan data dalam jumlah besar.',
                'price' => 1350000,
                'stock' => 9,
            ],
        ];


        foreach ($products as $product) {
            Product::create([
                'category_id' => $categoryModels[$product['category']]->id,
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'image' => null,
                'is_active' => true,
            ]);
        }


        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);


        User::create([
            'name' => 'Editor',
            'email' => 'editor@example.com',
            'password' => Hash::make('password'),
            'role' => 'editor',
        ]);


        User::factory()->count(10)->create([
            'role' => 'user',
        ]);
    }
}