<?php
function getWarehouseName();
{
    $wName = mysqli_query(
    select wName from warehouse where idWarehouse = $warehouseId;
    );
}

function getWarehouseAddress();
{
    $wAddress = mysqli_query(
    select address from warehouse where idWarehouse = $warehouseId;
    );
}

?>