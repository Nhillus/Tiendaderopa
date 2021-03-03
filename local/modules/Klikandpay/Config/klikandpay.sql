
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- klikandpay_return
-- ---------------------------------------------------------------------

# This table is used to save all the return data from Klik & Pay on the confirmation page
CREATE TABLE IF NOT EXISTS `klikandpay_return`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `transaction` VARCHAR(45),
    `order_id` INTEGER DEFAULT 0 NOT NULL,
    `numxkp` VARCHAR(255) NOT NULL,
    `paiement` VARCHAR(255) NOT NULL,
    `montantxkp` FLOAT DEFAULT 0,
    `devisexkp` VARCHAR(45),
    `ipxkp` VARCHAR(45),
    `paysrxkp` VARCHAR(2),
    `scrorexkp` SMALLINT,
    `paysbxkp` VARCHAR(2),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `idx_order_klikandpay_order_id` (`order_id`),
    CONSTRAINT `fk_order_klikandpay_order_id`
        FOREIGN KEY (`order_id`)
        REFERENCES `order` (`id`)
        ON UPDATE RESTRICT
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
