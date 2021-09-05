-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 25, 2021 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

--
-- Database: `hackertask`

-----------------shubham kumar jaiswal-------------------

create database hackertask;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE usertable(
  id int(11) NOT NULL auto_increment primary key,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  number bigint(10) NOT NULL
);


create table tasktable(
    id int(11) NOT NULL auto_increment primary key,
    taskname varchar(255) NOT NULL
);


------------------shubham kumar jaiswal-----------------------