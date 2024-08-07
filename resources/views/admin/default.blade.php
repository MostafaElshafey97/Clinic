@extends('layouts.admin')

@section('styles')

@endsection
@section('content')

@endsection


ALTER TABLE `stories` ADD `content` TEXT NOT NULL AFTER `image`;

CREATE TABLE `new_project`.`public_data` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `uuid` CHAR(36) NOT NULL , `email` VARCHAR(255) NOT NULL , `phone` VARCHAR(255) NOT NULL , `whatsapp` VARCHAR(255) NOT NULL , `facebook` VARCHAR(255) NOT NULL , `instagram` VARCHAR(255) NOT NULL , `linkedin` VARCHAR(255) NOT NULL , `twitter` VARCHAR(255) NOT NULL , `updated_by` INT(11) NOT NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `new_project`.`google_reviews` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `uuid` CHAR(36) NOT NULL , `name` VARCHAR(36) NOT NULL , `description` TEXT NOT NULL , `review` TINYINT(8) NOT NULL , `created_by` INT(11) NULL , `image` VARCHAR(255) NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `appointments` ADD `clinic` TINYINT(5) NULL AFTER `date`;

ALTER TABLE `appointments` ADD `status` TINYINT(5) NULL AFTER `clinic`;

CREATE TABLE `new_project`.`services` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `title` VARCHAR(255) NOT NULL , `content` TEXT NOT NULL , `description` TEXT NOT NULL , `sub_description` TEXT NOT NULL , `updated_by` INT(11) NULL , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `services` ADD `image` VARCHAR(255) NOT NULL AFTER `sub_description`;

ALTER TABLE `services` ADD `uuid` CHAR(36) NOT NULL AFTER `id`;
