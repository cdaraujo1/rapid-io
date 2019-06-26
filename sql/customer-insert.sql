DELIMITER $$

create procedure customerRegister (
	IN name VARCHAR(100), IN birth DATE, IN phone VARCHAR(50), IN email VARCHAR(255),
    IN l1Add VARCHAR(255), IN l2Add VARCHAR(255), IN stNum NUMERIC, IN district VARCHAR(100),
    IN city VARCHAR(100), IN state VARCHAR(100), IN CC VARCHAR(2), IN zip NUMERIC)
    
BEGIN
insert into customer (name, birth, phone, email)
values (
	name,
    birth,
    phone,
    email);
    
    select last_insert_id() into @lastIdCustomer;
    
  --  select last_insert_id();
    
insert into address (idCustomer, l1Add, l2Add, stNum, district, city, state, CC, zip)
values (
	@lastIdCustomer,
    l1Add,
    l2Add,
    stNum,
    district,
    city,
    state,
    CC,
    zip);
    END $$
    DELIMITER ;
    
drop procedure customerRegister;

CALL customerRegister(
	'Maria Silva',
    '1995-01-01',
    '+552112345678',
    'mariasilva@mail.com',
    'Rua das Couves',
    'Bloco C',
    16,
    'Maracana',
    'Centro',
    'Rio de Janeiro',
    'BR',
    1234567);