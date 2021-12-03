use ozmxv751nx7f9n4v;
drop table Collection;

CREATE TABLE Collection (
    Id INT AUTO_INCREMENT NOT NULL,
    PRIMARY KEY (Id),
    Name VARCHAR(100),
    FriendlyName VARCHAR(100),
    ImgSrc VARCHAR(100)
);

insert into Collection (Name, ImgSrc, FriendlyName) values  ("WeddingBands","/assets/img/product1.jpg", "Wedding Bands"),
    ("DiamondEarrings","/assets/img/product2.jpg", "Diamond Earrings"),
    ("BirthstoneRings", "/assets/img/product3.jpg", "Birthstone Rings"),
    ("CladdaghRings","/assets/img/product4.jpg", "Claddagh Rings"),
    ("PaveEngagementRings","/assets/img/product5.jpg", "Pave Engagement Rings"),
    ("SolitareEngagementRings","/assets/img/product6.jpg", "Solitare Engagement Rings"),
    ("TensionSetEngagementRings","/assets/img/product7.jpg", "Tension Set Engagement Rings"),
    ("HaloEngagementRings","/assets/img/product8.jpg", "Halo Engagement Rings");
    
