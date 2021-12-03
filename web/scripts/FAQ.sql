drop table FAQ;
create table FAQ (
Id int auto_increment not null,
primary key (Id),
Author varchar(100),
Question varchar(100),
Submitted datetime default current_timestamp
);