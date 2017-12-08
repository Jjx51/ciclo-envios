# Requerimientos del proyecto

##Tipos de usuarios
Se necesita una sistema que cuenten con la opción de tener 3 tipos de usuarios: 
1. **Usuario normal:**(El que hace el pedido)
2. **Usuario no registrado**(El que hace un pedido sin necesidad de registro)
2. **Usuario:** (Bicicleteros) 
3. **Admin:**(Dueños del negocio: 2)

##Usuario normal
**Usuario normal :** Va a poder registrarse , hacer login , poder hacer pedidos de 3 tipos diferentes:
1. **Encomienda:** Significa que va a tener que pasar por varios lugares, Por ejemplo : pasar a pagar la luz después pasar a pagar el agua , etc.No superando los 20km.

2. **Inmediato:** Un pedido que requiera ser inmediato no superando los 20 km

3. **Programado:** Un pedido hecho con anticipación, que es el único que pueda superar los 20 km , los km maximo de este paquete se desconocen: 

Y ademas de seleccionar cualquiera de los 3 anteriores tendra la opcion de seleccionar tambien si es: 
1. Carga normal
2. Carga pesada

###Cotizacion del pedido
El usuario debe de poder seleccionar atraves del api de google un punto A a un punto B para poder calcular la distancia y en base a lo 
seleccionado anteriormente calcular el costo de su envio.

###Seguimiento de pedidos
El usuario debe poder ver los pedidos que ha realizado y cual es el estado de los mismos: Por el momento se desconoce con exactitud los estados mientras dejemos los siguientes: 
1. Pedido sin Asignar
2. Pedido Asingado a ciclista
3. Pedido en camino
4. Pedido entregado

###Tener direccion favoritas registradas
Para el usuario registrado podra simplemente poner las ultimas direcciones registradas para no tener que manualmente ingresar diferentes pedidos a las mismas direcciones.

##Generacion de PDF para ticket
Se debe de generar un pdf tanto para el cliente para que pueda descargarlo y uno para el ciclista para que tenga la informacion del pedido
y pueda recibir la firma del cliente de que el paquete llego bien.
El ticket debe de contener los siguientes datos:
1. Fecha: 
2. Vigencia: 
3. Folio: 
4. Cliente: 
5. Inmediato /Programado/Encomienda
6. Remitente 
7. Teléfono de remitente
8. Direccion
9. Destinatario 
10. Direccion 
11. Teléfono del destinatario
12. Descripción/Observaciones
13. Distancia
14. Costo
15. Total
16. Hora de recolección 
17. Hora de entrega 
18. Firma(Solo para el ticket del ciclista)

##Cuenta ciclista
1. Ver los pedidos que tenga que entregar.
2. Actualizar el seguimiento de sus pedidos.
3. Logearse y cerrar cuenta

##Cuenta administradora
1. Crear cuentas de usuario ciclistas
2. Editar cuentas de usuarios ciclistas
3. Eliminar cuentas de usuarios ciclistas
4. Registrar un pedido sin registro para un cliente que llame por telefono
5. Ver los pedidos realizados
6. Asignar un ciclista a los pedidos.
7. Reasignar los ciclistas a algun pedido
8. Logearse y cerrar cuenta

##Usuario no registrado
El usuario no registrado sera capaz de poder hacer una cotizacion por el servicio que necesita , una vez 
realizada la cotizacion el mismo podra decidir que es lo que hace si decide: 
1. Iniciar Sesion
2. Registrarse
3. Realizar pedido sin registro

###Realizar pedido sin registro 
Se le debe de recordar las ventajas que tiene el hecho de ser un usuario registrado , que ya la informacion que posee como direccion 
podra ser usada para que no tenga que estar metiendo la información todo el tiempo.

##Api de google para Mapas
###[Google Maps Distance Matrix API](https://developers.google.com/maps/documentation/distance-matrix/start)
Parece ser que esta es la Api a utilizar para poder obtener los datos como las distancias entre los dos puntos.

###Reto adicional: Encontrar la forma de delimitar la zona del centro
Poder saber cuando dos puntos se encuentran en el area del centro

![Zona del centro](https://drive.google.com/open?id=1dpBkCZ9Ewm_6b4SycKbcDylFcP6xSH4f)

