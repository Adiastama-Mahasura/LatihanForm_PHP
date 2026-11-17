# Form Biodata Siswa - HTML & PHP

## Deskripsi
Project ini merupakan aplikasi sederhana untuk menginput dan menampilkan data biodata siswa menggunakan HTML dan PHP. Data yang dimasukkan melalui form akan diproses menggunakan metode GET dan ditampilkan dalam bentuk tabel.

## Fitur
- Input NIS siswa.
- Input nama siswa.
- Input tanggal lahir.
- Memilih jenis kelamin.
- Memilih kompetensi keahlian.
- Input email.
- Input tinggi badan.
- Memilih ekstrakurikuler.
- Input alamat siswa.
- Menampilkan data biodata dalam bentuk tabel.

## Teknologi yang Digunakan
- HTML5
- PHP
- Visual Studio Code
- XAMPP

## Struktur File
```text
Form-Biodata/
│
├── index.html
└── bio.php
```

## Cara Menjalankan
1. Download atau clone repository ini.
2. Simpan folder project ke dalam direktori `htdocs`.
3. Jalankan Apache melalui XAMPP.
4. Buka browser.
5. Masukkan alamat berikut:

```text
http://localhost/Form-Biodata/
```

6. Isi form biodata siswa.
7. Klik tombol **Kirim** untuk menampilkan data.

## Cara Kerja
1. Pengguna mengisi form biodata pada halaman `index.html`.
2. Data dikirim menggunakan method `GET`.
3. File `bio.php` menerima data menggunakan variabel `$_GET`.
4. Data ditampilkan dalam bentuk tabel HTML.

## Tujuan Pembelajaran
Project ini dibuat untuk mempelajari:
- Penggunaan form HTML.
- Penggunaan berbagai tipe input HTML.
- Penggunaan method GET.
- Pengambilan data menggunakan `$_GET` pada PHP.
- Menampilkan data PHP ke dalam tabel HTML.

## Author
**Adiastama D**

Project Pembelajaran RPL
