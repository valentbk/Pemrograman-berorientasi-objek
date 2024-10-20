<!DOCTYPE html>
<html>

<head>
    <title>Pemrograman Berorientasi Objek</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 3px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h1 align="left">Pemrograman Berorientasi Objek</h1>
    <p>Jika Anda pernah mendengar istilah ini tapi belum benar-benar paham apa maksudnya, Anda berada di tempat yang
        tepat. PBO adalah salah satu pendekatan paling populer dan efektif dalam pemrograman, terutama ketika kita
        berbicara tentang pengembangan perangkat lunak skala besar dan kompleks.
    </p>

    <h1 align="left">Pengertian</h1>
    <p>Pemrograman Berorientasi Objek (PBO) atau Object-Oriented Programming (OOP) adalah paradigma pemrograman yang
        menggunakan "objek" sebagai unit dasar dari program yang dikembangkan. Paradigma ini dirancang untuk
        menyederhanakan pemodelan sistem perangkat lunak yang kompleks dengan cara memetakan konsep dunia nyata ke dalam
        program komputer.
    </p>

    <h1 align="left">Bahasa Pemrograman yang Mendukung</h1>
    <p>Macam-Macam Bahasa Pemrograman Terbaik untuk Dipelajari:</p>
    <ul>
        <li>Python</li>
        <li>C#</li>
        <li>C++</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>Swift</li>
        <li>Java</li>
        <li>Go</li>
        <li>SQL</li>
        <li>Ruby</li>
    </ul>

    <h1>Membuat Tabel Kategori Produk</h1>

    <table>
        <tr>
            <th>NO</th>
            <th>KATEGORI PRODUK</th>
            <th>NAMA PRODUK</th>
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

    <h1>Membuat Tabel Produk</h1>

    <table>
        <tr>
            <th>NO</th>
            <th>PRODUK</th>
            <th>STOCK</th>
            <th>HARGA</th>
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

    <h2>Pertemuan ke 3</h2>

    <?php
    class Mobil {
        // Properties
        public $nama;
        public $warna;

        // Methods
        function set_name($nama) {
            $this->nama = $nama;
        }

        function set_warna($warna) {
            $this->warna = $warna;
        }

        function get_name() {
            return $this->nama;
        }

        function get_warna() {
            return $this->warna;
        }
    }

    $toyota = new Mobil();
    $toyota->set_name('Toyota');
    $toyota->set_warna('Biru Laut');

    echo $toyota->get_name();
    echo "<br>";
    echo $toyota->get_warna();
    ?>

    <h3>Foto profil</h3>
    <img src="foto.jpg" alt="" width="200PX">
    <h3>valent bintang kautsar : 42423048</h3>

    <h2>Pertemuan ke 4</h2>

    <h3>Constructor</h3>

    <?php
    class Buah {
        public $nama;
        public $warna;

        function __construct($nama, $warna) {
            $this->nama = $nama;
            $this->warna = $warna;
        }

        function get_nama() {
            return $this->nama;
        }

        function get_warna() {
            return $this->warna;
        }
    }

    $apel = new Buah("Apel", "Merah");
    echo $apel->get_nama();
    echo "<br>";
    echo $apel->get_warna();
    ?>

    <h3>Destructor</h3>

    <?php
    class jenis {
        public $nama;
        public $warna;
    
        function __construct($nama, $warna) {
            $this->nama = $nama;
            $this->warna = $warna;
        }
    
        function __destruct() {
            echo "Buah tersebut adalah {$this->nama} dan warnanya adalah {$this->warna}.<br>";
        }
    }
    
    
    $apel = new jenis("Apel", "Merah");
    unset($apel);  
    ?>

    <h3>Nama Mahasiswa</h3>

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
    $mahasiswa3 = new Mahasiswa("Khoirul Rohman", 165, "Sawo Matang");

    $mahasiswa1->tampilkanInfo();
    $mahasiswa2->tampilkanInfo();
    $mahasiswa3->tampilkanInfo();

    ?>

    <h2>jjjj</h2>

</body>

</html>
