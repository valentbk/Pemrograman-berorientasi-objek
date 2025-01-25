<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Berorientasi Objek</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 30%;
        }
        
        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
        
        tr:nth-child(even) {
        background-color: #dddddd;
        }
        </style>
</head>
<body>
    <h1 align="center">Pemrograman Berorientasi Objek</h1>
    <h2>Pertemuan 1 Membuat Halaman Website</h2>
    <h3 align="left">Pengertian</h3>
    <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma
    pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai
    atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. Semua data dan fungsi di
    dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman
    terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya.
    </p>

    <p>Model data berorientasi objek dikatakan dapat memberi fleksibilitas yang lebih, kemudahan mengubah program, dan
        digunakan luas dalam teknik peranti lunak skala besar. Lebih jauh lagi, pendukung OOP mengklaim bahwa OOP lebih
        mudah dipelajari bagi pemula dibanding dengan pendekatan sebelumnya, dan pendekatan OOP lebih mudah dikembangkan
        dan dirawat.</p>
    
    <h3 align="left">Bahasa Pemrograman yang Mendukung</h3>
    <p>Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:</p>
    <ul>
        <li>Visual Foxpro</li>
        <li>Java</li>
        <li>C++</li>
        <li>Pascal (bahasa pemrograman)</li>
        <li>SIMULA</li>
        <li>Smalltalk</li>
        <li>Ruby</li>
        <li>Python</li>
        <li>PHP</li>
        <li>TypeScript</li>
        <li>C#</li>
        <li>Delphi</li>
        <li>Eiffel</li>
        <li>Perl</li>
        <li>Adobe Flash AS 3.0</li>
        </ul>
    <h3 align="left">Membuat Tabel Kategori Produk</h3>
    <table>
        <tr>
            <th>NO</th>
            <th>Kategori Produk</th>
            <th>Nama Produk</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bumbu dapur</td>
            <td>Garam</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bumbu dapur</td>
            <td>Cabe</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bumbu dapur</td>
            <td>Lengkuas</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Bumbu dapur</td>
            <td>Terasi</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sembako</td>
            <td>Beras</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sembako</td>
            <td>Minyak goreng</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Sembako</td>
            <td>Gula pasir</td>
        </tr>
    </table>
    
    <h3 align="left">Membuat Tabel Produk</h3>

    <table>
        <tr>
            <th>NO</th>
            <th>Produk</th>
            <th>Stock</th>
            <th>Harga</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Garam</td>
            <td>10</td>
            <td>7000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Cabe</td>
            <td>10</td>
            <td>25000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lengkuas</td>
            <td>10</td>
            <td>12000</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Terasi</td>
            <td>10</td>
            <td>35000</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Beras</td>
            <td>10</td>
            <td>13000</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Minyak goreng</td>
            <td>10</td>
            <td>15000</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Gula pasir</td>
            <td>10</td>
            <td>13000</td>
        </tr>
    </table>
    <h2>Pertemuan 3 foto</h2>
    <img src="123.jpg" alt="Deskripsi gambar" width="30%">

    <h2>Pertemuan 4 Kelas dan Objek</h2>
<h3>buah-buahan</h3>
    <?php
class Buah {
    // Properties
    public $nama;
    public $warna;

    // Methods
    function set_name($nama) {
        $this->nama = $nama;
    }

    function get_name() {
        return $this->nama;
    }
}

$apel = new Buah();
$pisang = new Buah();
$apel->set_name('Apel');
$pisang->set_name('Pisang');

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
?>
<h3>merk mobil</h3>
<?php
class mobil {
                        // Properties
    public $nama;
    public $warna;

                        // Methods
    function set_name($nama) {
        $this->nama = $nama;
        }

    function get_name() {
        return $this->nama;
        }

    function set_warna($warna) {
        $this->warna = $warna;
        }

    function get_warna() {
        return $this->warna;
        }
    }

    // Membuat objek dari kelas mobil
    $toyota = new mobil();

    // Mengatur nama
    $toyota->set_name('toyota');
    $toyota->set_warna('Biru Metalik');
                    
    // Menampilkan nama 
    echo "Nama : " . $toyota->get_name();
    echo "<br>";
    echo "Warna : " . $toyota->get_warna();
?>
    <h2>Pertemuan 5 Construktor dan Destructor</h2>
    <?php
    class Mahasiswa {
    public $nama;
    public $tinggiBadan;
    public $warnaKulit;

    public function __construct($nama, $tinggiBadan, $warnaKulit) {
    $this->nama = $nama;
    $this->tinggiBadan = $tinggiBadan;
    $this->warnaKulit = $warnaKulit;
    }

    public function tampilkanInfo() {
    echo "Mahasiswa tersebut bernama {$this->nama}, Tinggi Badan {$this->tinggiBadan} cm, dan Warna Kulit {$this->warnaKulit}.<br>";
        }
    }

    $mahasiswa1 = new Mahasiswa("Valent Bintang", 172, "Sawo Matang");
    $mahasiswa2 = new Mahasiswa("Agitya Putra", 170, "Sawo Matang");
    $mahasiswa3 = new Mahasiswa("Seva Khairul Rohman", 165, "Sawo Matang");

    $mahasiswa1->tampilkanInfo();
    $mahasiswa2->tampilkanInfo();
    $mahasiswa3->tampilkanInfo();

    ?>

    <h2>PERTEMUAN 6 Konstanta dan Abstrak</h2>

    <?php
    class komputer {
    // buat kosntanta
    const DOLLAR = '12000';
    }

    // panggil konstanta class
    echo "Harga dollar saat ini = Rp. ".komputer::DOLLAR;
    echo "<br/>";
    // hasil: harga dollar saat ini = Rp. 12000
    ?>

    <?php
    class Selamat_tinggal {
    const LEAVING_MESSAGE = "Terima kasih telah berkunjung";
    public function byebye() {
    echo self::LEAVING_MESSAGE;
        }
    }
    
    $selamat_tinggal = new Selamat_tinggal();
    $selamat_tinggal->byebye();
    ?>
    <h4>Abstrak</h4>
    <?php
    // kelas induk
    abstract class car {
    public $nama;
    public function __construct($nama) {
    $this->nama = $nama;
    }
    abstract public function intro() : string;
    }

    // kelas anak
    class Audi extends car {
    public function intro() : string {
    return "Untuk kualitas terbaik! saya pilih $this->nama!";
        }
    }

    class Volvo extends car {
    public function intro() : string {
    return "Untuk hemat bahan bakar! saya pilih $this->nama!";
        }
    }

    class Citroen extends car {
    public function intro() : string {
    return "Untuk purna jual! saya pilih $this->nama!";
        }
    }

    // membuat objek dari kelas anak
    $audi = new audi("BMW");
    echo $audi->intro();
    echo "<br/>";

    $volvo = new audi("Panther");
    echo $volvo->intro();
    echo "<br/>";

    $citroen = new audi("Toyota");
    echo $citroen->intro();
    echo "<br/>";
    ?>

    <h1>.</h1>

    <?php
    abstract class ParentClass {
    // metode abstark dengan sebuah argumen
    abstract protected function prefixName($nama);
    }

    class ChildClass extends ParentClass {
    public function prefixName($nama) {
    if ($nama == "Ahmad Sulistiyo") {
        $prefix = "Mr. ";
        }   elseif ($nama == "Siti Aisyah") {
        $prefix = "Miss. ";
        }   else {
        $prefix = "";
        }
    return "{$prefix} {$nama}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("Ahmad Sulistiyo");
    echo "<br/>";
    echo $class->prefixName("Siti Aisyah");
    ?>

    <h1>.</h1>
    
    <?php
    abstract class KelasInduk {
    // metode abstark dengan sebuah argumen
    abstract protected function prefixName($nama);
    }

    class KelasAnak extends KelasInduk {
    // kelas anak dapat mendefinisikan argumen opsional yang tidak ada dalam metode abstrak induknya
    public function prefixName($nama, $separator = ".", $greet = "Dear") {
    if ($nama == "Ahmad Sulistiyo") {
        $prefix = "Mr";
        }   elseif ($nama == "Siti Aisyah") {
        $prefix = "Miss";
        }   else {
        $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$nama}";
        }
    }

    $class = new KelasAnak;
    echo "<br/>";
    echo $class->prefixName("Ahmad Sulistiyo");
    echo "<br/>";
    echo $class->prefixName("Siti Aisyah");
    ?>

    <h2>Pertemuan 7 penjelasan CRUD</h2>

    <h2>index.php</h2>
    <P>
        Kode ini merupakan halaman utama untuk aplikasi manajemen inventaris toko sembako "BERKAH JAYA". Aplikasi ini dirancang dengan antarmuka sederhana yang memungkinkan pengguna melakukan berbagai operasi CRUD pada data barang</P>
    
        <div>
    <h3>Fitur Utama:</h3>
    <ol>
        <li>
            <strong>Create (Tambah Barang):</strong>
            <ul>
                <li>Tombol "Tambah Barang" akan menampilkan form untuk menambahkan barang baru.</li>
                <li>Proses ini dilakukan melalui file <code>add_data.php</code>.</li>
                <li>Pengguna dapat memasukkan detail barang yang akan disimpan dalam sistem.</li>
            </ul>
        </li>
        <li>
            <strong>Read (Lihat Stok):</strong>
            <ul>
                <li>Tombol "Lihat Stok" menampilkan daftar barang yang tersedia.</li>
                <li>Informasi stok ditampilkan melalui file <code>view.php</code>.</li>
                <li>Memungkinkan pengguna melihat semua barang yang ada di inventaris.</li>
            </ul>
        </li>
        <li>
            <strong>Update (Edit Barang):</strong>
            <ul>
                <li>Menggunakan iframe untuk menampilkan form edit.</li>
                <li>Proses edit dilakukan secara dinamis.</li>
                <li>Memungkinkan pengguna mengubah informasi barang yang sudah ada.</li>
            </ul>
        </li>
        <li>
            <strong>Delete (Hapus Barang):</strong>
            <ul>
                <li>Bagian "Proses Data" yang di-include dari <code>proses_data.php</code>.</li>
                <li>Memungkinkan pengguna menghapus barang dari inventaris.</li>
            </ul>
        </li>
    </ol>
</div>

<h3>Fitur Tambahan dalam Kode</h3>
    <ul id="fitur">
        <li>Desain responsif dengan CSS</li>
        <li>Tombol untuk menampilkan/menyembunyikan section</li>
        <li>Catatan penting tentang refresh halaman untuk melihat perubahan</li>
    </ul>

<h3>Fungsi JavaScript:</h3>
<img src="code.png" alt="Deskripsi gambar" width="60%">
<div class="container">
        <p>Fungsi-fungsi ini memungkinkan navigasi antarhalaman tanpa me-reload seluruh halaman.</p>
        <h3>Desain dan Antarmuka:</h3>
        <ul>
            <li>Menggunakan font Arial</li>
            <li>Warna background abu-abu terang</li>
            <li>Tombol dengan desain modern</li>
            <li>Efek hover pada tombol</li>
            <li>Kontainer putih dengan bayangan lembut</li>
        </ul>
    </div>

    <h2>Penjelasan Operasi CREATE pada add_data.php</h2>
    <h2>1. Koneksi Database</h2>
    <p>
        Untuk membuat koneksi ke database MySQL, gunakan kode berikut:
    </p>
<img src="code1.png" alt="" width="60%">
<h3>Penjelasan Koneksi Database</h3>
    <ul>
        <li>Membuat koneksi ke database MySQL</li>
        <li>Host: <b>localhost</b></li>
        <li>Username: <b>root</b></li>
        <li>Password: <b>kosong</b></li>
        <li>Nama Database: <b>valent.pbo</b></li>
    </ul>
    <h3>2. Proses Penambahan Data</h3>
<img src="code2.png" alt="" width="60%">
<h3>Fitur utama:</h3>
<ul>
        <li>Menerima data dari form</li>
        <li>Melakukan insert data ke tabel tbl_valentstock</li>
        <li>Menampilkan pesan sukses/error</li>
    </ul>

    <h3>3. Desain Antarmuka Form</h3>
<h3>Fitur form:</h3>
<ul>
        <li>Input untuk ID Barang</li>
        <li>Input untuk Nama Barang</li>
        <li>Input untuk Stok</li>
        <li>Input untuk Harga Beli</li>
        <li>Input untuk Harga jual</li>
    </ul>

    <h3>4. Fitur JavaScript Tambahan</h3>
    <img src="code3.png" alt="" width="60%">
    <h3>Keunggulan:</h3>
    <ul>
        <li>Menambah data tanpa reload halaman (AJAX)</li>
        <li>Mereset form setelah submit</li>
        <li>Menampilkan pesan sukses</li>

    </ul>

    <h2>Penjelasan Operasi UPDATE dalam File Edit Data</h2>
    <h3>1. Proses Pengambilan Data Barang</h3>
    <img src="code4.png" alt="" width="60%">
    <h3>Fitur utana:</h3>
    <ul>
        <li>Mengambil ID barang dari parameter URL</li>
        <li>Menggunakan prepared statement untuk keamanan</li>
        <li>Mengambil data barang berdasarkan ID</li>
        <li>Mencegah SQL Injection</li>
    </ul>

    <h3>2. Form Edit Data</h3>
    <h3>Fitur utana:</h3>
    <ul>
        <li>Input tersembunyi untuk ID Barang</li>
        <li>MInput Nama Barang</li>
        <li>Input Stok</li>
        <li>Input Harga Beli</li>
        <li>Input Harga Jual</li>
        <li>Tombol Update</li>
    </ul>

    <h3>3. Proses Update</h3>
    <img src="code5.png" alt="" width="60%">
    <ul>
        <li>Form diarahkan ke proses_data.php</li>
        <li>Mengirim data dengan metode POST</li>
        <li>Menyertakan ID Barang tersembunyi</li>
    </ul>

    <h2>Penjelasan Operasi READ pada view.php</h2>
    <h2>1. Pengambilan Data Barang</h2>
<img src="code6.png" alt="" width="60%">
<h3>Fitur Utama:</h3>
    <ul>
        <li>Mengambil seluruh data dari tabel tbl_valentstock</li>
        <li>Menggunakan query sederhana untuk mendapatkan semua record</li>
    </ul>

    <h3>2.  Struktur Tabel Ditampilkan</h3>
    <h3>Kolom Tabel:</h3>
    <ul>
        <li>Form diarahkan ke proses_data.php</li>
        <li>ID Barang</li>
        <li>Nama Barang</li>
        <li>Stok</li>
        <li>Harga Jual</li>
        <li>Kolom Aksi (Edit/Hapus)</li>
    </ul>

    <h2>3. Fitur JavaScript</h2>
    <h3>Fitur hapus barang</h3>
<img src="code7.png" alt="" width="60%">
<h3>Keunggulan</h3>
    <ul>
        <li>Konfirmasi sebelum menghapus</li>
        <li>Pengiriman data secara asynchronous</li>
        <li>Penghapusan baris tanpa reload halaman</li>
    </ul>
    <h2>Fungsi Edit Barang</h2>
    <img src="code8.png" alt="" width="60%">
    <ul>
        <li>Membuka form edit di iframe</li>
        <li>Menampilkan section edit</li>
    </ul>

    <h2>4. Penanganan Kondisi Kosong</h2>
<img src="code9.png" alt="" width="60%">
<h3>Fitur Utama:</h3>
    <ul>
        <li>Menampilkan pesan jika tidak ada data</li>
    </ul>

    <h2>Penjelasan Operasi UPDATE dan DELETE pada proses_data.php</h2>
    <h2>1. Operasi UPDATE (Edit Barang)</h2>
<img src="code10.png" alt="" width="60%">
<h3>Fitur Utama Operasi UPDATE:</h3>
    <ul>
        <li>Menggunakan Prepared Statement untuk keamanan</li>
        <li>Validasi dan feedback melalui alert</li>
    </ul>

    <h2>2. Operasi DELETE (Hapus Barang)</h2>
<img src="code11.png" alt="" width="60%">

<h2>pertemuan 8,tabel</h2>
<table>
        <tr>
            <th>NO</th>
            <th>Kategori Produk</th>
            <th>Nama Produk</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bumbu dapur</td>
            <td>Garam</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bumbu dapur</td>
            <td>Cabe</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bumbu dapur</td>
            <td>Lengkuas</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Bumbu dapur</td>
            <td>Terasi</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sembako</td>
            <td>Beras</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sembako</td>
            <td>Minyak goreng</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Sembako</td>
            <td>Gula pasir</td>
        </tr>
    </table>
</body>
</html>