-- *********************************************
-- * SQL MySQL generation                      
-- *--------------------------------------------
-- * DB-MAIN version: 11.0.2              
-- * Generator date: Sep 14 2021              
-- * Generation date: Fri Mar 25 15:35:23 2022 
-- * LUN file: F:\AllProjet\HTML CSS\Laravel-E-Commerce\db\DB-P_Web2-ECommerce.lun 
-- * Schema: MLD/1 
-- ********************************************* 


-- Database Section
-- ________________ 

create database DB_P_Web2_ECommerce;
use DB_P_Web2_ECommerce;


-- Tables Section
-- _____________ 

create table t_article (
     idArticle int not null auto_increment,
     ArtName varchar(70) not null,
     ArtDescription varchar(250) not null,
     ArtPrice float(10) not null,
     ArtReleaseDate date not null,
     idAuthor int not null,
     constraint ID_t_article_ID primary key (idArticle));

create table t_author (
     idAuthor int not null auto_increment,
     autCompanieName varchar(60) not null,
     autMail varchar(150) not null,
     autCountry varchar(80) not null,
     constraint ID_t_author_ID primary key (idAuthor));

create table t_basket (
     idBasket int not null auto_increment,
     constraint ID_t_basket_ID primary key (idBasket));

create table t_category (
     idCategory int not null auto_increment,
     catName varchar(50) not null,
     constraint ID_t_category_ID primary key (idCategory));

create table t_contain (
     idArticle int not null,
     idBasket int not null,
     constraint ID_t_contain_ID primary key (idBasket, idArticle));

create table t_have (
     idArticle int not null,
     idCategory int not null,
     constraint ID_t_have_ID primary key (idArticle, idCategory));

create table t_order (
     idOrder int not null auto_increment,
     idBasket int not null,
     ordPrice float(10) not null,
     ordDate date not null,
     idUser int not null,
     constraint ID_t_order_ID primary key (idOrder),
     constraint FKt_compose_ID unique (idBasket));

create table t_session (
     idSession int not null auto_increment,
     idUser int not null,
     constraint ID_t_session_ID primary key (idSession),
     constraint FKt_get_ID unique (idUser));

create table t_user (
     idUser int not null auto_increment,
     useLogin varchar(60) not null,
     usePassword varchar(60) not null,
     useAdministrator char not null,
     constraint ID_t_user_ID primary key (idUser));


-- Constraints Section
-- ___________________ 

alter table t_article add constraint FKt_made_FK
     foreign key (idAuthor)
     references t_author (idAuthor);

-- Not implemented
-- alter table t_basket add constraint ID_t_basket_CHK
--     check(exists(select * from t_contain
--                  where t_contain.idBasket = idBasket)); 

alter table t_contain add constraint FKt_c_t_b
     foreign key (idBasket)
     references t_basket (idBasket);

alter table t_contain add constraint FKt_c_t_a_FK
     foreign key (idArticle)
     references t_article (idArticle);

alter table t_have add constraint FKt_h_t_c_FK
     foreign key (idCategory)
     references t_category (idCategory);

alter table t_have add constraint FKt_h_t_a
     foreign key (idArticle)
     references t_article (idArticle);

alter table t_order add constraint FKt_own_FK
     foreign key (idUser)
     references t_user (idUser);

alter table t_order add constraint FKt_compose_FK
     foreign key (idBasket)
     references t_basket (idBasket);

alter table t_session add constraint FKt_get_FK
     foreign key (idUser)
     references t_user (idUser);


-- Index Section
-- _____________ 

create unique index ID_t_article_IND
     on t_article (idArticle);

create index FKt_made_IND
     on t_article (idAuthor);

create unique index ID_t_author_IND
     on t_author (idAuthor);

create unique index ID_t_basket_IND
     on t_basket (idBasket);

create unique index ID_t_category_IND
     on t_category (idCategory);

create unique index ID_t_contain_IND
     on t_contain (idBasket, idArticle);

create index FKt_c_t_a_IND
     on t_contain (idArticle);

create unique index ID_t_have_IND
     on t_have (idArticle, idCategory);

create index FKt_h_t_c_IND
     on t_have (idCategory);

create unique index ID_t_order_IND
     on t_order (idOrder);

create index FKt_own_IND
     on t_order (idUser);

create unique index FKt_compose_IND
     on t_order (idBasket);

create unique index ID_t_session_IND
     on t_session (idSession);

create unique index FKt_get_IND
     on t_session (idUser);

create unique index ID_t_user_IND
     on t_user (idUser);

