
 ========= /** Как удалить полк из таблицы, у которого есть связь внешним ключем **/ =========
 Вначале удалить сам ключ
    ALTER TABLE my_table DROP FOREIGN KEY fk_name
 Где fk_name это имя внешнего ключа. Посмотреть его можно выполнив запрос
    SHOW CREATE TABLE my_table
 имя будет видно в блоке
    CONSTRAINT "fk_name" FOREIGN KEY ("my_column") REFERENCES...
 А потом удалять поле
 ALTER TABLE my_table DROP COLUMN my_column;


 ========= /** При работе apt иногда бывает такая ошибка, apt уже занят загрузкой. **/=========
 sudo apt-get install php5.6 -y
 E: Could not get lock /var/lib/dpkg/lock-frontend - open (11: Resource temporarily unavailable)
 E: Unable to acquire the dpkg frontend lock (/var/lib/dpkg/lock-frontend), is another process using it?



 ========= /** Как добавить внешний ключ в уже существующую таблицу **/ =========
 ALTER TABLE articles ADD FOREIGN KEY (`subcategoryId`) REFERENCES subcategories(`id`);
 ALTER TABLE organization ADD FOREIGN KEY (`militaryDistrict`) REFERENCES military_district(`id`);

 militaryDistrict
 Примеры:
     CONSTRAINT `FK_organization_activity_id_organization_activity_id` FOREIGN KEY (`activity_id`)
     REFERENCES `organization_activity` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,

     CONSTRAINT `FK_organization_age_contingent_field_value` FOREIGN KEY (`age_contingent`)
     REFERENCES `list_field_value` (`id`) ON DELETE SET NULL,







