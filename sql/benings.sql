CREATE TABLE users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Age int,
    Password varchar(200)
);

CREATE TABLE booking(
    Id int PRIMARY KEY AUTO_INCREMENT,
    nama varchar(200),
    Email varchar(200),
    telepon int,
    treatment varchar(100),
    tanggal date,
    pesan varchar(200)
);