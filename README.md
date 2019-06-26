# rapid-io
A small package tracking system.

rapid.io é um projeto para desenvolver um sistema de rastreamento e frete de encomendas leves para serem entregues pelas capitais do Brasil, visando expansão para o mundo. 

Através do rapid.io os clientes poderão entregar itens de no máximo 5kg por entre regiões capitais com tempo de entrega médio de um dia útil e máximo de três dias úteis. 

# engineering

All the ids are randomly generated and it generates a QRCode.

The QRCode is scanned by the motoboy when the package reaches consumer's house. 

And the package status is updated on the server.
  The changed data is sent to both MySQL and MongoDB databases.

- The router is implemmented by thedevdojo
https://github.com/thedevdojo/create-a-php-routing-system

- Databases engineering -
    All the data about tracking is hosted in a NoSQL database (MongoDB in this case) and about clients, warehouses and less-changing information data is hosted in a Relational SQL database (MySQL in this case).
    
The structure of the MongoDB is divided in 1 schema, that one is the package schema (PacksSchema).
    Its structure:
    
    _id: A string-type field which is automatically filled by the idGenerator.php;
    
    statusId: A integer-type field which is filled by the data that previously came from the user input;
    
    lastUpdate: A date-type field which is automatically filled the date using the Mongo Engine;
    
    postDate: A date-type field which is automatically filled in the first using the date using the Mongo Engine and by the user's input in the following ones;
    
    location: An array containing the warehouse names where the package once have had been;
    
    warehouseId: A integer-type field which is filled by the data that previously came from the MySQL input;

The structure of the MySQL is divided in 3 tables.
    Its structure::

    table 'customer':
    
    idCustomer -Pk -serial -notnull
    name -varchar -100 -notnull 
    birth -date
    email -varchar -255 -notnull
    phone -varchar -50 -notnull
    address ?-varchar -255 -notnull
    /passwd -sha2
    //packs
    
    table 'address':
    
    idCustomer -Fk
    l1Add -varchar -255 -notnull
    l2Add -varchar -255 -notnull
    stNum -integer -notnull
    district -varchar -255 -notnull
    city -varchar -255 -notnull
    state -varchar -50 -notnull
    CC -varchar -2 -notnull
    zip -numeric -notnull
    
    table 'warehouse':
    idWarehouse -Pk
    name -varchar -255 -notnull
    l1Add -varchar -255 -notnull
    l2Add -varchar -255 -notnull
    stNum -integer -notnull
    district -varchar -255 -notnull
    city -varchar -255 -notnull
    state -varchar -50 -notnull
    CC -varchar -2 -notnull
    zip -numeric -notnull
    
    table 'deliverers':
    register -serial -Pk
    name -varchar -255 -notnull
    username -varchar -255 -notnull
    phone -varchar -100 -notnull
    passwd -varchar -255 -notnull
    role -number -3 -notnull
    
    //table 'packs':
    packCode -Pk
    idcustomer -Fk
    idWarehouse -Fk

- Mobile engineering -
The mobile app is developed in React both to iOS and Android devices. Containing minimously a kind-of web-view with push-in notifications and email replies.

- Web engineering -
The webapp is entirely in PHP and JavaScript back-end and HTML + CSS front-end with some JS resources.

- Secure engineering -
All the data is sent to the client in the view layer within a SSH secure channel which provides a high-secured environment to both customers and employees. 
