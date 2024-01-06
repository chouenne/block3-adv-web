CREATE TABLE .`ingredient` (`ingredientID` INT NOT NULL AUTO_INCREMENT , `ingredientName` VARCHAR(256) NOT NULL , `ingredientType` VARCHAR(256) NOT NULL , `ingredientPrice` DECIMAL(60) NOT NULL , PRIMARY KEY (`ingredientID`)) ENGINE = InnoDB;

CREATE TABLE `xuan88_food`.`supplier` (`supplierID` INT NOT NULL AUTO_INCREMENT , `supplierName` VARCHAR(256) NOT NULL , `supplierLocation` VARCHAR(256) NOT NULL , `supplierContact` VARCHAR(128) NOT NULL , `supplierEmail` VARCHAR(256) NOT NULL , PRIMARY KEY (`supplierID`)) ENGINE = InnoDB;

INSERT INTO `ingredient` (`ingredientID`, `ingredientName`, `ingredientType`, `ingredientPrice`) VALUES (NULL, 'Fresh Tomatoes', 'Vegetables', '2.5');
INSERT INTO `ingredient` (`ingredientID`, `ingredientName`, `ingredientType`, `ingredientPrice`) VALUES (NULL, 'Chicken Breast', 'Meat', '5'), (NULL, 'Broccoli', 'Vegetables	', '3');
INSERT INTO `ingredient` (`ingredientID`, `ingredientName`, `ingredientType`, `ingredientPrice`) VALUES (NULL, 'Olive Oil  ', 'Condiment', '10');

INSERT INTO `supplier` (`supplierID`, `supplierName`, `supplierLocation`, `supplierContact`, `supplierEmail`) VALUES (NULL, 'ABC Farms', 'Farmington, QC', 'John Farmer', 'john@abcfarms.com'), (NULL, 'Meat Master', 'Butchertown, QC', 'Mary Butcher', 'mary@meatmaster.com');
INSERT INTO `supplier` (`supplierID`, `supplierName`, `supplierLocation`, `supplierContact`, `supplierEmail`) VALUES (NULL, 'Green Harvest', 'Veggie Valley, QC ', 'Grace Gardner ', 'grace@greenharvest.com'), (NULL, 'Gourmet Oils', 'Olive Grove, QC', 'Giuseppe Oliveoil', 'giuseppe@gourmetoils.com');

CREATE TABLE `xuan88_food`.`dish` (`dishID` INT NOT NULL AUTO_INCREMENT , `dishName` VARCHAR(256) NOT NULL , PRIMARY KEY (`dishID`)) ENGINE = InnoDB;
INSERT INTO `dish` (`dishID`, `dishName`) VALUES (NULL, 'Grilled Chicken Salad'), (NULL, 'Veggie Pasta Primavera');
INSERT INTO `dish` (`dishID`, `dishName`) VALUES (NULL, 'Margherita Pizza ');

-- CREATE TABLE `xuan88_food`.`dishIngredient` (`dishID` INT NOT NULL , `ingredientID` INT NOT NULL , `ingredientQuantity` INT NOT NULL , `ingredientName` VARCHAR(256) NOT NULL , `ingredientType` VARCHAR(256) NOT NULL , `ingredientPrice` DECIMAL(60) NOT NULL , `supplierID` INT NOT NULL , `supplierName` VARCHAR(256) NOT NULL , `supplierLocation` VARCHAR(256) NOT NULL , `supplierContact` VARCHAR(256) NOT NULL , `supplierEmail` VARCHAR(256) NOT NULL , PRIMARY KEY (`dishID`)) ENGINE = InnoDB;

CREATE TABLE `xuan88_food`.`dishIngredient` (`dishID` INT NOT NULL , `ingredientID` INT NOT NULL , `ingredientQuantity` VARCHAR(256) NOT NULL ) ENGINE = InnoDB;


ALTER TABLE `dishIngredient` ADD CONSTRAINT `dishID` FOREIGN KEY (`dishID`) REFERENCES `dish`(`dishID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `dishIngredient` ADD CONSTRAINT `ingredientID` FOREIGN KEY (`ingredientID`) REFERENCES `ingredient`(`ingredientID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `dishIngredient` (`dishID`, `ingredientID`, `ingredientQuantity`) VALUES ('1', '1', '100'), ('1', '2', '150')

INSERT INTO `dishIngredient` (`dishID`, `ingredientID`, `ingredientQuantity`) VALUES ('1', '3', '200'), ('2', '1', '300')

INSERT INTO `dishIngredient` (`dishID`, `ingredientID`, `ingredientQuantity`) VALUES ('2', '3', '100'), ('2', '4', '50')

INSERT INTO `dishIngredient` (`dishID`, `ingredientID`, `ingredientQuantity`) VALUES ('3', '1', '500'), ('3', '4', '100')

SELECT dishIngredient.ingredientID, dishIngredient.ingredientQuantity, dishIngredient.dishID, ingredient.ingredientName, ingredient.ingredientType, ingredient.ingredientPrice FROM ingredient
INNER JOIN dishIngredient
ON ingredient.ingredientID = dishIngredient.ingredientID;

ALTER TABLE ingredient
ADD supplierID INT;

ALTER TABLE `ingredient` ADD CONSTRAINT `supplierID` FOREIGN KEY (`supplierID`) REFERENCES `supplier`(`supplierID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

UPDATE `ingredient` SET `supplierID` = '1' WHERE `ingredient`.`ingredientID` = 1
UPDATE `ingredient` SET `supplierID` = '2' WHERE `ingredient`.`ingredientID` = 2
UPDATE `ingredient` SET `supplierID` = '3' WHERE `ingredient`.`ingredientID` = 3
UPDATE `ingredient` SET `supplierID` = '4' WHERE `ingredient`.`ingredientID` = 4

-- creat table ingredientType and 

CREATE TABLE `xuan88_food`.`ingredientType` (`ingredientTypeID` INT NOT NULL AUTO_INCREMENT , `ingredientTypeName` VARCHAR(128) NOT NULL , PRIMARY KEY (`ingredientTypeID`)) ENGINE = InnoDB;

INSERT INTO `ingredientType` (`ingredientTypeID`, `ingredientTypeName`) VALUES (NULL, 'Vegetable'), (NULL, 'Meat')

INSERT INTO `ingredientType` (`ingredientTypeID`, `ingredientTypeName`) VALUES (NULL, 'Condiment'), (NULL, 'dairy product')

INSERT INTO `ingredientType` (`ingredientTypeID`, `ingredientTypeName`) VALUES (NULL, 'Fruit'), (NULL, 'soy product')


-- use the foreign key ingredientTypeID to relate with the table ingregientType
ALTER TABLE `ingredient` ADD CONSTRAINT `ingredientTypeID` FOREIGN KEY (`ingredientTypeID`) REFERENCES `ingredientType`(`ingredientTypeID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

SELECT ingredient.*, supplier.supplierName, ingredientType.ingredientTypeName FROM ingredient NATURAL JOIN supplier NATURAL JOIN ingredientType;

UPDATE ingredient SET ingredientName = 'tomato', ingredientPrice = '4', supplierID = '1', ingredientTypeID = '2' WHERE ingredientID = '1';

SELECT * FROM `ingredient` ORDER BY `ingredientID` ASC