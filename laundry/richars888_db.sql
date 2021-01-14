   CREATE DATABASE laundry_native;

   CREATE TABLE data_minggu(
    id int(35) NOT NULL AUTO_INCREMENT,
    nama varchar(150) NOT  NULL,
    alamat varchar(100) NOT NULL,
    nomor varchar(80) NOT NULL,
    berat varchar(68) NOT NULL,
    jenis varchar(75) NOT NULL,
    tanggal varchar(85) NOT NULL,
    jumlah varchar(90) NOT NULL,
    PRIMARY KEY(id)

   );


   CREATE TABLE data_bulan(
     id int(35) NOT NULL AUTO_INCREMENT,
     nama varchar(150) NOT  NULL,
     alamat varchar(100) NOT NULL,
     nomor varchar(80) NOT NULL,
     berat varchar(68) NOT NULL,
     jenis varchar(75) NOT NULL,
     tanggal varchar(85) NOT NULL,
     jumlah varchar(90) NOT NULL,
     PRIMARY KEY(id)


   );


   CREATE TABLE data_tahun(
     id int(35) NOT NULL AUTO_INCREMENT,
     nama varchar(150) NOT  NULL,
     alamat varchar(100) NOT NULL,
     nomor varchar(80) NOT NULL,
     berat varchar(68) NOT NULL,
     jenis varchar(75) NOT NULL,
     tanggal varchar(85) NOT NULL,
     jumlah varchar(90) NOT NULL,
     PRIMARY KEY(id)



   );

   CREATE TABLE harga(
     id int(40) NOT NULL AUTO_INCREMENT,
     harga varchar(100) NOT NULL,
     PRIMARY KEY(id)
   );
