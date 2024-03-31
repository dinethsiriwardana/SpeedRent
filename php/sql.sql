create table car_category
(
    car_cat_id int auto_increment,
    brand      varchar(255) not null,
    model      varchar(255) not null
);

create table car_reviews
(
    review_id   int auto_increment,
    car_id      int           null,
    review_text text          null,
    rating      decimal(3, 1) null
);

create table car_table
(
    carid        int auto_increment,
    car_brand    varchar(100) not null,
    car_model    varchar(100) not null,
    fuel         varchar(16)  null,
    number_plate varchar(255) not null,
    price        double       not null,
    availability int          not null,
    noofseat     int          not null,
    ownership    int          not null,
    owner_name   varchar(255) null,
    owner_id     varchar(255) null,
    owner_tel    varchar(15)  null,
    year         int          null,
    description  varchar(250) null
);

create table emp_atnd
(
    attend_id int auto_increment,
    emp_id    int      not null,
    date      datetime not null,
    attend    int      not null
);

create table finised_order
(
    orderid int    not null,
    carid   int    not null,
    uid     int    not null,
    date    date   not null,
    price   double not null
);

create table logs
(
    id        int auto_increment,
    timestamp datetime null,
    message   text     null
);

create table medical_table
(
    m_id   int auto_increment,
    emp_id int          not null,
    reason varchar(255) not null,
    date   date         not null
);

create table msg_table
(
    msgid           int auto_increment,
    msg_type        varchar(10)                        not null,
    reply_msg_id    int                                null,
    msg             varchar(500)                       not null,
    seen            int                                not null,
    from_id         int                                not null,
    to_id           int                                not null,
    title           varchar(225)                       null,
    datetime_column datetime default CURRENT_TIMESTAMP null
);

create table rent_order
(
    orderid      int auto_increment,
    carid        int                                not null,
    uid          int                                not null,
    date_from    date                               not null,
    date_to      date                               null,
    pickup_type  int                                not null,
    return_type  int                                not null,
    stts         varchar(100)                       not null,
    stts_details varchar(100)                       null,
    price        double                             not null,
    payment      varchar(25)                        not null,
    submit_date  datetime default CURRENT_TIMESTAMP not null
);

create table user_accounts
(
    uid          int auto_increment,
    email        varchar(100) not null,
    user_name    varchar(255) not null,
    password     varchar(45)  not null,
    fname        varchar(150) not null,
    lname        varchar(150) not null,
    address      varchar(255) not null,
    phoneNo      varchar(45)  not null,
    idno         varchar(45)  not null,
    otp          int          null,
    otp_time     datetime     null,
    verification varchar(45)  null,
    bankcardno   int          null,
    bankcvvno    int          null,
    membership   varchar(50)  null,
    usertype     varchar(255) not null
);

