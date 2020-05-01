-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 09:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `forform`
--
CREATE DATABASE IF NOT EXISTS `forform` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `forform`;


CREATE TABLE userinfo (
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `birthday` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenum` text NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


