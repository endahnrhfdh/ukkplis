## Konsep web yang saya buat

website ini merupakan sebuah aplikasi untuk pendataan siswa yang masuk ekstrakulikuler

## Fitur yang tersedia
- login
- logout
- Halaman pengguna
- Halaman tamu
   
## Authentication
   - Login

## Multiuser
  - pengguna
   1. menambah data
   2. mengedit data
   3. menghapus data
   4. melihat semua data
      
  - tamu
   1. hanya melihat data

## pencarian

 1.kategori ekstrakulikuler
 
 2.nama siswa,kelas siswa,alamat siswa
  

## Akun default untuk pengujian  

- pengguna
  
  email : admin@gmail.com
  
  password : admin123


## ERD
![image](https://github.com/user-attachments/assets/9499abb0-fd95-43ff-abba-f655391db7e9)



## UML Diagram Use 
![image](https://github.com/user-attachments/assets/be3e0835-c783-4819-a3f2-ea85893b6716)




## Teknologi yang di gunakan
 - laravel 10
 - bootstrap 5

## Persyaratan melakukan instalasi
  - PHP 8.1.0 & Web server
  - Database (laragon)
  - Web Browser (Chrome atau Firefox)

## Instalasi
 1. clone repositori
    
  git clone (https://github.com/endahnrhfdh/ukk-eskul).git 
  cd ukk-eskul
  
 2. composer install

 3.mendownload database :     cp.env.example .env
 
 4.konfigurasi database pada file .env
    
 php artisan key:generate php artisan storage:link php artisan migrate --seed
 
 5.menjalankan server
 php artisan serve
    
## ukk eskul di buat oleh ndahh
