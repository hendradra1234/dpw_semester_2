CREATE TABLE users(
  Id Integer(3) Primary Key,
  username Varchar(50),
  password Varchar(100),
  level Varchar(20)
);

CREATE TABLE pasien(
  kd_pasien Integer(5) Primary Key,
  nm_pasien Varchar(50),
  tempat_lahir Varchar(50),
  tgl_lahir DATE,
  agama Varchar(10),
  goldar Varchar(3),
  jenkel Varchar(10),
  alamat Varchar(10)
);

CREATE TABLE obat(
  kd_obat Integer(5) Primary Key,
  nm_obat Varchar(50),
  satuan Varchar(20),
  jenis_obat Varchar(25),
  stok INT
);

INSERT INTO `users` (`Id`, `username`, `password`, `level`) VALUES
(1, 'hendra', '7c222fb2927d828af22f592134e8932480637c0d', 'administrator'),
(2, 'via lestari', '7c222fb2927d828af22f592134e8932480637c0d', 'user');

INSERT INTO `pasien` ( `kd_pasien`, `nm_pasien`, `tempat_lahir`, `tgl_lahir`, `agama`, `goldar`, `jenkel`, `alamat`) VALUES
(1, 'tes', 'sungailiat', '2002-01-01', 'Khonghucu', 'O', 'Laki-Laki', 'Alamat');

INSERT INTO `obat` ( `kd_obat`, `nm_obat`, `satuan`, `jenis_obat`, `stok`) VALUES
(1, 'Ibuproven', 'Stock', 'Pain Killer', 100);
