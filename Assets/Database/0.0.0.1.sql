drop database if exists `portal`;
create database `portal`;
use `portal`;

insert into `utphpcore`.`instance`(`name`)
values
('Portal');

set @instanceId = null;
select `id` into @instanceId from `utphpcore`.`instance` where `name` = 'portal';

create table `cards`
(
    `id` int(11) not null auto_increment,
    `name` varchar(32) not null,
    `description` blob not null,
    primary key(`id`)
)Engine=InnoDB;

create table `card-links`
(
    `id` int(11) not null auto_increment,
    `card-id` int(11) not null,
    `text` varchar(8) not null,
    `url` varchar(256) not null,
    primary key(`id`),
    foreign key(`card-id`) references `cards`(`id`) on delete cascade
)Engine=InnoDB;

insert into `cards`(`id`, `name`, `description`)
values
(1, 'A Lonely Gameserver', '--description--'),
(2, 'W.WHOT.AI', '--description--');

insert into `card-links`(`card-id`, `text`, `url`)
values
(1, 'LINK', 'http://unrealtechnologies.nl:82/'),
(2, 'LINK', 'http://unrealtechnologies.nl:81/');